<?php

namespace App\Http\Controllers;

use App\Models\Personnalites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PersonnalitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personnalites = DB::table("personnalites")->get();
        return view('personnalites')->with('personnalites', $personnalites);
        
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
     * @param  \App\Models\Personnalites  $personnalites
     * @return \Illuminate\Http\Response
     */
    public function show(Personnalites $personnalites)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personnalites  $personnalites
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnalites $personnalites)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personnalites  $personnalites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personnalites $personnalites)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personnalites  $personnalites
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personnalites $personnalites)
    {
        //
    }
}
