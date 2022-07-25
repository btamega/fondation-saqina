<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VolumeController extends Controller
{
    //
    public function index()
    {
        //
        $volumes = DB::table("volumes")->orderByDesc('id_volume')->get();
        $category_invocation = DB::table("category__invocations")
        ->join('volumes', 'volumes.id_volume', '=', 'category__invocations.id_volume')
        ->select('category__invocations.*')
        ->get();
        return view("invocation_evocation")->with("volumes", $volumes)->with("category_invocation", $category_invocation);
    
    }
}
