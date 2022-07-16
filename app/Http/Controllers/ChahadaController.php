<?php

namespace App\Http\Controllers;

use App\Models\Chahada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChahadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        DB::table('chahadas')->insert([
            'titre' => $request->title,
            'description' => $request->chahada
        ]);
        return redirect()->back()->with('chahadaAdded', 'Chahada ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chahada  $chahada
     * @return \Illuminate\Http\Response
     */
    public function show(Chahada $chahada)
    {
        $chahadas=DB::table('chahadas')->orderByDesc('id')->get();
        return view('chahada')->with('chahadas',$chahadas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chahada  $chahada
     * @return \Illuminate\Http\Response
     */
    public function edit(Chahada $chahada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chahada  $chahada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chahada $chahada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chahada  $chahada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chahada $chahada)
    {
        //
    }
}
