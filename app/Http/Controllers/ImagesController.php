<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;

use Illuminate\Support\Facades\DB;
class ImagesController extends Controller
{
    //
    public function index()
    {
        $image =DB::table("images")->where("Type", "=", 'Image')->orderBy('URL_Image', 'asc')->get();
        $video =DB::table("images")->where("Type", "=", 'Video')->get();
        return view('fondation')->with("photos", $image)->with("videos", $video);
        
    }
}
