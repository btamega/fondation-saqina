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
        $prieres=DB::table('prieres')->where('id_category_priere','=',$id)->orderByDesc('id_priere')->get();
        $category_priere=DB::table('category__prieres')->where('id_category_priere','=',$id)->first();
        return view('prieres')->with('prieres',$prieres)->with('category_prieres',$category_priere);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorie_id=DB::table('category__prieres')->where('Titre',$request->categorie)->first();
        Prieres::create([
            'Titre' => $request->title,
            'Description' => $request->priere,
            'id_category_priere' => $categorie_id->id_category_priere,
            'Reference_Coran' => $request->referenceCoran,
            'Reference_Hadith' => $request->referenceHadith,
        ]);
        return redirect()->back()->with('priereAdded','Prière ajoutée avec succès !');
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
