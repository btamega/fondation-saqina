<?php

namespace App\Http\Controllers;

use App\Models\sante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sante = DB::table("santes")->get();
        return view("pass_sante")->with("sante", $sante);
    
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
     * @param  \App\Models\sante  $sante
     * @return \Illuminate\Http\Response
     */
    public function show(sante $sante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sante  $sante
     * @return \Illuminate\Http\Response
     */
    public function edit(sante $sante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sante  $sante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sante $sante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sante  $sante
     * @return \Illuminate\Http\Response
     */
    public function destroy(sante $sante)
    {
        //
    }
}
