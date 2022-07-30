<?php

namespace App\Http\Controllers;

use App\Models\Categorie_Fatwas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorieFatwasController extends Controller
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
        Categorie_Fatwas::create([
            'Titre'=>$request->categorie_fatwas,
            'Volume' => $request->volume_fatwas
        ]);
        return redirect()->back()->with('categorieAdded','Nouvelle catégorie de fatwas ajoutée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie_Fatwas  $categorie_Fatwas
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie_Fatwas $categorie_Fatwas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie_Fatwas  $categorie_Fatwas
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie_Fatwas $categorie_Fatwas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie_Fatwas  $categorie_Fatwas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie_Fatwas $categorie_Fatwas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie_Fatwas  $categorie_Fatwas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (DB::table('fatwas')->where('id_categorie_fatwas',$id)->exists()) {
            DB::table('fatwas')->where('id_categorie_fatwas',$id)->delete();
            DB::table('categorie__fatwas')->where('id', $id)->delete();
            return redirect()->back()->with('fatwasDeleted','Catégorie de fatwas supprimée avec succès');
        } else {
            DB::table('categorie__fatwas')->where('id', $id)->delete();
            return redirect()->back()->with('fatwasDeleted','Catégorie de fatwas supprimée avec succès');
        }
    }
}
