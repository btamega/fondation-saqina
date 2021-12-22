<?php

namespace App\Http\Controllers;

use App\Models\Prieres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PrieresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $prieres=DB::table('prieres')->where('id_category_priere','=',$id)->get();
        $category_priere=DB::table('category__prieres')->where('id_category_priere','=',$id)->get();
        return view('prieres')->with('prieres',$prieres)->with('category_prieres',$category_priere);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prieres  $prieres
     * @return \Illuminate\Http\Response
     */
    public function show(Prieres $prieres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prieres  $prieres
     * @return \Illuminate\Http\Response
     */
    public function edit(Prieres $prieres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prieres  $prieres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prieres $prieres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prieres  $prieres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prieres $prieres)
    {
        //
    }
}
