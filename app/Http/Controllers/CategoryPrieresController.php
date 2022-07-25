<?php

namespace App\Http\Controllers;

use App\Models\Category_Prieres;
use App\Models\Prieres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryPrieresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category_Prieres=DB::table('category_prieres')->get();
        return view('salat')->with('category_prieres',$category_Prieres);
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
        Category_Prieres::create([
            'Titre' => $request->categorie
        ]
        );
        return redirect()->back()->with('categorieAdded','Catégorie d\'invocation ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category_Prieres  $category_Prieres
     * @return \Illuminate\Http\Response
     */
    public function show(Category_Prieres $category_Prieres)
    {
       $category_Prieres=DB::table('category__prieres')->orderByDesc('id_category_priere')->get();
       $nombre = intdiv($category_Prieres->count(),3);
       return view('salat')->with('category_Prieres',$category_Prieres)->with('nombre',$nombre);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category_Prieres  $category_Prieres
     * @return \Illuminate\Http\Response
     */
    public function edit(Category_Prieres $category_Prieres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category_Prieres  $category_Prieres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category_Prieres $category_Prieres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category_Prieres  $category_Prieres
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Prieres::where('id_category_priere',$id)->delete();
        Category_Prieres::where('id_category_priere',$id)->delete();
        return redirect()->back()->with('categorieDeleted','Catégorie d\'invocation supprimée !');
    }
}
