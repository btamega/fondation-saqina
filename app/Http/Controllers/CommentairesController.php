<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Commentaires;
use Illuminate\Support\Facades\DB;

class CommentairesController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'nom'=>'required',
            'email'=>'required|email',
            'message'=>'required',

        ]);
    }

    public function sendEmail(Request $request)
    {
        $commentaire = new Commentaires();
        $commentaire->Nom=$request->nom;
        $commentaire->Email=$request->email;
        $commentaire->Message=$request->message;
        $commentaire->save();
        return back()->with('message_sent', 'Votre message a bien été envoyé !');
    }
    public function destroy($id)
    {
        DB::table('commentaires')->where('id_commentaire',$id)->delete();
        return redirect()->back()->with('message_deleted', 'Message supprimé avec succès !');
    }
    public function deleteAll()
    {
        DB::table('commentaires')->truncate();
        return redirect()->back()->with('deleted', 'Tous les messages ont été supprimés !');
    }
    
}
