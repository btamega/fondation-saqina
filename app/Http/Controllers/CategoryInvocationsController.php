<?php

namespace App\Http\Controllers;

use App\Models\Category_Invocations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryInvocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category)
    {
        
        $category_invocation = DB::table("category__invocations")->where('Titre','=',$category)->get();
        return view("invocation_list")->with("category_invocation", $category_invocation);
    
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
     * @param  \App\Models\Category_Invocations  $category_Invocations
     * @return \Illuminate\Http\Response
     */
    public function show(Category_Invocations $category_Invocations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category_Invocations  $category_Invocations
     * @return \Illuminate\Http\Response
     */
    public function edit(Category_Invocations $category_Invocations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category_Invocations  $category_Invocations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category_Invocations $category_Invocations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category_Invocations  $category_Invocations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category_Invocations $category_Invocations)
    {
        //
    }
}
