<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Images;
class AdminController extends Controller
{
    public function index()
    {   
        $post=DB::table('articles')->count();
        $users=DB::table('users')->count();
        $interactions=DB::table('commentaires')->count();
        return view('admin/index')
        ->with('nombreUsers',$users)
        ->with('nombreInteractions',$interactions)
        ->with('nombrePosts',$post);
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
        $articles =DB::table("articles")->orderBy('created_at', 'desc')->get();
        return view('admin/articles')->with("articles", $articles);
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
        DB::table('articles')->where('id_article', $id)
        ->update([
            'Titre' => $request->title,
            'Description' => $request->description,
            'Type' => $request->type
        ]);
        return redirect()->back()->with('updated','article Updated Successfully');
    }
    public function edit($id)
    {
        $oldArticle = DB::table('articles')->where('id_article', $id)->first();
        return view('admin/edit')->with('oldArticle',$oldArticle);
    }
    public function deleteArchive($id)
    {
        $del=DB::table('images')->delete($id);
        if ($del) {
            return redirect()->back()->with('deleted','Suppression effectuée avec succès !');
        }
        else{
            
        return redirect()->back()->with('notDeleted','La suppression n\'a pas été effectuée !');
        }
    }
    public function updateArchive(Request $request, $id)
    {
        DB::table('images')->where('id', $id)
        ->update([
            'Titre' => $request->title,
            'Description' => $request->description,
            'Type' => $request->type
        ]);
        return redirect()->back()->with('updated','article Updated Successfully');
    }
    public function editArchive($id)
    {
        $oldArticle = DB::table('images')->where('id', $id)->first();
        return view('admin/edit')->with('oldArticle',$oldArticle);
    }
    public function archive()
    {   $image =DB::table("images")->orderBy('id','desc')->get();
        $video =DB::table("images")->where("Type", "=", 'Video')->get();
        return view('admin/archives')->with("photos", $image)->with("videos", $video);
    }
    public function storePhoto(Request $request)
    {
        $image = new Images();
        $image->Description=$request->description;
        $target_dir = "../public/images/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $path="images/".basename($_FILES["image"]["name"]);
        $getfilename =  str_replace(' ', '_', $path);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $type='Image';
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
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType == "mp4" ) {
            $type='Video';
        // return redirect()->back()->with('fileType', 'Désolé, les types de fichiers supportés sont JPG, JPEG, PNG & GIF !');
        $uploadOk = 1;
        }
        //Check file size
        if ($_FILES["image"]["size"] > 5000000) {
            return redirect()->back()->with('fileSizeToLong', 'La taille de votre fichier est trop volumineuse !');
        $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            return redirect()->back()->with('fileNotUpload', 'Votre image n\'a pas été chargée  !');
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $getfilename)) {
            $image->Type=$type;
            $image->URL_Image=$getfilename;
            $image->save();
            return redirect()->back()->with('success','Votre fichier a été publié !');
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }
    }

    public function notification($id)
    {   
        DB::table('commentaires')->where('id_commentaire', $id)
        ->update([
            'statut' => 'Lu'
        ]);
        $message = DB::table('commentaires')->where('id_commentaire',$id)->first();
        return view('admin/charts')->with('message',$message);
    }
}
