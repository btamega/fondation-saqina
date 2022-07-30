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
    public function create(Request $request)
    {
        User::create($request->all());
        return redirect('login')->with('');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user=DB::table('users')->where('email',$request->email)->first();
        if (is_null($user)) {
            return redirect()->back()->with('userNotExist', 'Il n\'y a aucun compte avec cette adresse mail !');
        } else {
            if (Auth::attempt($credentials) && ($user->role=='Admin' || $request->email=='karecherif2000@gmail.com ')) {
                // Authentication passed...
                return redirect()->intended('dashboard');
            }
            elseif($user->role!='Admin'){
                return redirect('')->with('success', 'Connexion faite avec succès !');
            }
            else{
                return redirect()->back()->with('error','Les données ne correspondent pas !');
            }
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
        elseif ($_POST["password"] === $_POST["passwordConfirm"]) {
        $user = new User();
        $user->name=$request->firstName.' '.$request->lastName;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->Telephone=$request->phone;
        $user->save();
        return redirect('login')->with('status', 'Votre compte a été crée avec succès!');
        }else {
            return redirect()->back()->with('passwordNotMatch','Erreur, les mots de passe sont différents');
        }
    }
    public function search(Request $request)
    {
       $categorie=$request->categorieToSearch;
       $word=$request->textToSearch;
       switch ($categorie) {
        case 'Hadith':
            $hadith=DB::table('hadiths')
            ->where('titre','LIKE','%'.$word."%")
            ->orWhere('description','LIKE','%'.$word.'%')
            ->get();
            if(is_null($hadith)){
                return redirect('error')->with('emptyHadith','Désolé, nous n\'avons aucune donnée de hadiths concernant votre recherche');
            }
            else{
                return view('search/search-hadith')->with('hadithsResult',$hadith)
                ->with('word',$word);
            }
            break;
        case 'Fatwas':
            $fatwa=DB::table('fatwas')
            ->where('Titre','LIKE','%'.$word."%")
            ->orWhere('Description','LIKE','%'.$word.'%')
            ->get();
            if(is_null($fatwa)){
                return redirect('error')->with('emptyFatwas','Désolé, nous n\'avons aucun fatwas concernant votre recherche');
            }
            else{
                return view('search/search-fatwas')->with('fatwasResult',$fatwa)
                ->with('word',$word);
            }
            break;
        case 'Invocation':
            $invocation=DB::table('invocations')
            ->where('Category','LIKE','%'.$word."%")
            ->orWhere('Titre','LIKE','%'.$word.'%')
            ->orWhere('Description','LIKE','%'.$word.'%')
            ->get();
            if(!is_null($invocation)){
            return view('search/search-invocation')->with('invocationsResult',$invocation)
            ->with('word',$word);
            }
            else{
                return redirect('error')->with('emptyInvocation','Désolé, nous n\'avons aucune invocation concernant votre recherche');
            }
            break;
            case 'Chahada':
                $chahadas=DB::table('chahadas')
                ->where('titre','LIKE','%'.$word."%")
                ->orWhere('description','LIKE','%'.$word.'%')
                ->get();
                if(!is_null($chahadas)){
                return view('search/search-chahada')->with('chahadas',$chahadas)
                ->with('word',$word);
                }
                else{
                    return redirect('error')->with('emptyChahada','Désolé, nous n\'avons aucune donnée de chahada concernant votre recherche');
                }
                break;
        case 'Autre':
            $article=DB::table('articles')
            ->where('Titre','LIKE','%'.$word."%")
            ->orWhere('Description','LIKE','%'.$word.'%')
            ->orWhere('Image','LIKE','%'.$word.'%')
            ->get();
            if (is_null($article)) {
                return redirect('error')->with('emptyArticle','Désolé, nous n\'avons aucune donnée concernant votre recherche');
            }else{
                return view('search/search-articles')
                ->with('word',$word)
                ->with('articlesResults',$article);
            }
            break;
            
        default:
            $hadith=DB::table('hadiths')
            ->where('titre','LIKE','%'.$word."%")
            ->orWhere('description','LIKE','%'.$word.'%')
            ->get();
            if($hadith!=null){
            return view('search/search-hadith')->with('hadithsResult',$hadith)
            ->with('word',$word);
            }
            else{
                return redirect('error')->with('emptyHadith','Désolé, nous n\'avons aucune donnée de hadiths concernant votre recherche');
            }
            break;
       }
    }
}
