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
        $image =DB::table("images")->where("Type", "=", 'Image')->orderByDesc('id')->get();
        $video =DB::table("images")->where("Type", "=", 'Video')->orderByDesc('id')->get();
        return view('fondation')->with("photos", $image)->with("videos", $video);
        
    }
}
