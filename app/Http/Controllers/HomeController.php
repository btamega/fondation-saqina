<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    //
    public function index($id)
    {
        $articles =DB::table("articles")->where('Type','=','article')->where('id_article','=',$id)->orderBy('id_article', 'desc')->get();
        $events=DB::table("articles")->where('Type','=','evenement')->where('id_article','=',$id)->orderBy('id_article', 'desc')->get();
        return view('articles_list')->with("articles", $articles)->with('events', $events);
    }
}
