<?php

namespace App\Http\Controllers;

use App\Models\Hadith;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HadithController extends Controller
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
        DB::table('hadiths')->insert([
            'titre' => $request->title,
            'description' => $request->hadith
        ]);
        return redirect()->back()->with('hadithAdded', 'Hadith ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hadith  $hadith
     * @return \Illuminate\Http\Response
     */
    public function show(Hadith $hadith)
    {
        $hadiths=DB::table('hadiths')->orderByDesc('id')->get();
        return view('coran_hadith')->with('hadiths',$hadiths);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hadith  $hadith
     * @return \Illuminate\Http\Response
     */
    public function edit(Hadith $hadith)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hadith  $hadith
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hadith $hadith)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hadith  $hadith
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hadith $hadith)
    {
        //
    }
}
