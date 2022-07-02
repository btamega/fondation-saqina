<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index()
    {
       return view('login')->with('success', 'Connexion faite avec succès !');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
 
        if (Auth::attempt($credentials) && ($request->email=='karecherif2000@gmail.com' ||$request->email=='bougarytamega77@gmail.com')) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        elseif($request->email!='karecherif2000@gmail.com'){
            return redirect('')->with('success', 'Connexion faite avec succès !');
        }
        else{
            return redirect()->back()->with('error','Les données ne correspondent pas !');
        }
    }
    public function register()
    {
        return view('register');
    }
    public function inscrire(Request $request)
    {   
        $oldUser = DB::table('users')->where('email',$request->email)->first();
        if ($oldUser) {
            return redirect()->back()->with('emailExist','Erreur, il existe déjà un compte avec cette adresse émail');
        }
        else {
            # code...
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect('login')->with('status', 'Votre compte a été crée avec succès!');
    }
    }
}
