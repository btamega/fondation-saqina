<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index()
    {   
        $user = Auth::user();
        return view('admin/index')->with('user',$user);
    }
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
        
        return redirect('/login');
    }
    public function articles()
    {   
        $user = Auth::user();
        $articles =DB::table("articles")->where('Type','=','article')->orderBy('created_at', 'desc')->orderBy('id_article', 'desc')->limit(6)->get();
        $events=DB::table("articles")->where('Type','=','evenement')->orderBy('created_at', 'desc')->limit(3)->get();
        return view('admin/articles')->with('user',$user)->with("articles", $articles)->with('events', $events);
    }

    public function store(Request $request)
    {
        $article = new Article();
        $article->Titre=$request->title;
        $article->Description=$request->description;
        $article->Type=$request->type;
        $target_dir = "../public/images/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $path="images/".basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
        return redirect()->back()->with('fileExist', 'Cette image existe déjà dans la base de données !');
        $uploadOk = 0;
        }

        //Check file size
        if ($_FILES["image"]["size"] > 500000) {
            return redirect()->back()->with('fileSizeToLong', 'La taille de votre image est trop volumineuse !');
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        return redirect()->back()->with('fileType', 'Désolé, les types de fichiers supportés sont JPG, JPEG, PNG & GIF !');
        $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            return redirect()->back()->with('fileNotUpload', 'Votre image n\'a pas été chargée  !');
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $article->Image=$path;
            $article->save();
            return redirect()->back()->with('success','Votre post a été publié !');
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }
    
    }
    public function delete($id)
    {
        DB::table('articles')->where('id_article', $id)->delete();
        return redirect()->back()->with('deleted','Suppression effectuée avec succès !');
    }
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->Titre=$request->title;
        $article->Description=$request->description;
        $article->Type=$request->type;
        $article->update();
        return redirect()->back()->with('updated','article Updated Successfully');
    }
    public function edit($id)
    {
        $oldArticle = DB::table('articles')->where('id_article', $id)->first();
        // dd($oldArticle);
        return view('admin/edit')->with('oldArticle',$oldArticle);
    }
}
