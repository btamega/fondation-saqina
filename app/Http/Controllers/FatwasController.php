<?php

namespace App\Http\Controllers;

use App\Models\Categorie_Fatwas;
use App\Models\Fatwas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FatwasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie_fatwas=Categorie_Fatwas::all();
        return view('fatwas',compact('categorie_fatwas',$categorie_fatwas));
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
        $categorie_id=DB::table('categorie__fatwas')->where('Titre',$request->categorie)->first();
        // dd($categorie_id);
        Fatwas::create([
            'Titre' => $request->title,
            'Description' => $request->fatwas,
            'id_categorie_fatwas' => $categorie_id->id,
        ]);
        return redirect()->back()->with('fatwasAdded','Fatwas ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fatwas  $fatwas
     * @return \Illuminate\Http\Response
     */
    public function show($titre)
    {
        $categorie_fatwas=DB::table('categorie__fatwas')
        ->where('Titre','=',$titre)
        ->select('Titre','id')
        ->first();
        $fatwas=DB::table('fatwas')->where('id_categorie_fatwas','=',$categorie_fatwas->id)->first();
        // dd($categorie_fatwas);
        return view('fatwas_display', compact('fatwas',$fatwas));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fatwas  $fatwas
     * @return \Illuminate\Http\Response
     */
    public function edit(Fatwas $fatwas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fatwas  $fatwas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fatwas $fatwas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fatwas  $fatwas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fatwas $fatwas)
    {
        //
    }
}
