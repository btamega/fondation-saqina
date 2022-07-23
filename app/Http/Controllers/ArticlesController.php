<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ArticlesController extends Controller
{
    //
    public function index()
    {
        $articles =DB::table("articles")->where('Type','=','article')->orderBy('created_at', 'desc')->orderBy('id_article', 'desc')->limit(3)->get();
        $events=DB::table("articles")->where('Type','=','evenement')->orderBy('created_at', 'desc')->limit(3)->get();
        return view('home')->with("articles", $articles)->with('events', $events);
    }
}
