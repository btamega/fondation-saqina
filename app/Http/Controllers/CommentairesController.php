<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Commentaires;

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
        // $details=[
        //     'nom'=>$request->nom,
        //     'email'=>$request->email,
        //     'message'=>$request->message
        // ];
        // Mail::to('bougarytamega77@gmail.com')->send( new ContactMail($details));
        $commentaire = new Commentaires();
        $commentaire->Nom=$request->nom;
        $commentaire->Email=$request->email;
        $commentaire->Message=$request->message;
        $commentaire->save();
        return back()->with('message_sent', 'Votre message a bien été envoyé !');
    }
    
}
