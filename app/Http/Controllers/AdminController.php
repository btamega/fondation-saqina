<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Hadith;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Images;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
    public function admin()
    {   
        $admins=DB::table('users')->where('role','Admin')->get();
        $users=DB::table('users')->where('role','User')->get();
        return view('admin/admins',compact('admins','users'));
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
    public function uploadFiles(Request $request)
    {
        $target_dir = "../public/images/";
        $target_file = $target_dir . basename($_FILES["newFile"]["name"]);
        $path="images/".basename($_FILES["newFile"]["name"]);
        $uploadOk = 1;
        $getfilename =  str_replace(' ', '_', $path);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $type='Image';
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["newFile"]["tmp_name"]);
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
            echo 'Ce fichier existe déjà dans la base de données !';
        $uploadOk = 0;
        }

        //Check file size
        if ($_FILES["newFile"]["size"] > 50000*1024) {
            echo 'La taille de votre image est trop volumineuse !';
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType == "mp4") {
            $type='Video';
            echo 'Désolé, les types de fichiers supportés sont JPG, JPEG, PNG & GIF !';
        $uploadOk = 1;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo 'Votre image n\'a pas été chargée  !';
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["newFile"]["tmp_name"], $getfilename)) {
            
            return $getfilename;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        }
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
        return redirect()->back()->with('fileExist', 'Ce fichier existe déjà dans la base de données !');
        $uploadOk = 0;
        }

        //Check file size
        if ($_FILES["image"]["size"] > 50000*1024) {
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
    public function deleteAdmin($id)
    {
        DB::table('users')->where('id', $id)
        ->update([
            'role' => 'User',
        ]);
        return redirect()->back()->with('update', 'Mises à jour effectuées avec succès !');
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
        $path=new AdminController();
        if ($request->newFile==null) {
            DB::table('images')->where('id', $id)
            ->update([
                'Description' => $request->description,
            ]);
        }else {
            DB::table('images')->where('id', $id)
            ->update([
                'Description' => $request->description,
                'URL_Image' => $path->uploadFiles($request),
            ]);
        }
        
        return redirect()->back()->with('updated','Les modifications ont bien été enregistrées !');
    }
    public function updateUser($id)
    {
        DB::table('users')->where('id', $id)
        ->update([
            'role' => 'Admin',
        ]);
        return redirect()->back()->with('adminAdded', 'Votre nouvel utilisateur est maintenant administrateur !');
    }
    public function editArchive($id)
    {
        $oldArticle = DB::table('images')->where('id', $id)->first();
        return view('admin/edit')->with('oldArticle',$oldArticle);
    }
    public function archive()
    {   $image =DB::table("images")->where("Type", "=", 'Image')->orderBy('id','desc')->get();
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
        return redirect()->back()->with('fileExist', 'Ce fichier existe déjà dans la base de données !');
        $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType == "mp4" ) {
            $type='Video';
        // return redirect()->back()->with('fileType', 'Désolé, les types de fichiers supportés sont JPG, JPEG, PNG & GIF !');
        $uploadOk = 1;
        }
        //Check file size
        if ($_FILES["image"]["size"] > 50000*1024) {
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
    public function hadith()
    {
        return view('admin/pages/hadith');
    }
    public function salat()
    {
        $category_Prieres = DB::table('category__prieres')->get();
        return view('admin/pages/salat')->with('category_prieres',$category_Prieres);
    }
    public function invocation()
    {   
        $categorie_invocations=DB::table('category__invocations')
        ->join('volumes','category__invocations.id_volume','=','volumes.id_volume')
        ->select('category__invocations.*','volumes.Titre as titre_volume')
        ->get();
        $volumes=DB::table('volumes')->get();
        $categoies=DB::table('category__invocations')->get();
        return view('admin/pages/invocation')
        ->with('categorie_invocations',$categorie_invocations)
        ->with('categoies',$categoies)
        ->with('volumes',$volumes);
    }
    public function fatwas()
    {
        return view('admin/pages/fatwas');
    }
    public function sante()
    {
        return view('admin/pages/sante');
    }
    public function chahada()
    {
        return view('admin/pages/chahada');
    }
    public function register()
    {
        return view('admin/register');
    }
    public function addVolume(Request $request)
    {
        DB::table('volumes')->insert([
            'Titre' => $request->volume
        ]);
        $request->session()->put('volume',$request->id_volume);
        return redirect('admin/invocations')->with('addedVolume','Nouveau volume ajouté !');
    }
    public function addCategorie(Request $request)
    {

        $volume=DB::table('volumes')->where('Titre','=',$request->volume)->first();
        DB::table('category__invocations')->insert([
            'Titre' => $request->categorie,
            'id_volume' => $volume->id_volume
        ]);
        return redirect('admin/invocations')->with('addedVolume','Nouvelle catégorie ajoutée !');
    }
    public function addInvocation(Request $request)
    {
        $categorie=DB::table('category__invocations')->where('Titre','=',$request->categorie)->first();
        DB::table('invocations')->insert([
            'Category' => $request->categorie,
            'Titre' => $request->titre,
            'Description' => $request->description,
            'id_category_invocation' => $categorie->id_category_invocation
        ]);
        return redirect()->back()->with('addedInvocation','Invocation ajoutée avec succès !');
    }
    public function addAdmin(Request $request)
    {
        $oldUser = DB::table('users')->where('email',$request->email)->first();
        if ($oldUser) {
            return redirect()->back()->with('emailExist','Erreur, il existe déjà un compte avec cette adresse émail');
        }
        elseif ($_POST["password"] === $_POST["confirmPassword"]) {
        $user = new User();
        $user->name=$request->firstName.' '.$request->lastName;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->Telephone=$request->phone;
        $user->role='Admin';
        $user->save();
        return redirect()->back()->with('adminAdded', 'Votre nouvel utilisateur est maintenant administrateur !');
        }else {
            return redirect()->back()->with('passwordNotMatch','Erreur, les mots de passe sont différents');
        }
    }
}
