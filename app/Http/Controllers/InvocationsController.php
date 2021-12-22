<?php

namespace App\Http\Controllers;

use App\Models\Invocations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class InvocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category)
    {
        //
        $invocation=DB::table("invocations")
        ->join('category__invocations', 'category__invocations.id_category_invocation', '=', 'invocations.id_category_invocation')
        ->select('invocations.*')
        ->get();
        $category_invocation = DB::table("category__invocations")->where('Titre','=',$category)->get();
        $volumes = DB::table("volumes")->get();
        return view('invocation_list')->with('invocations', $invocation)->with('volumes', $volumes)->with('category_invocation', $category_invocation);
        

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
     * @param  \App\Models\Invocations  $invocations
     * @return \Illuminate\Http\Response
     */
    public function show(Invocations $invocations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invocations  $invocations
     * @return \Illuminate\Http\Response
     */
    public function edit(Invocations $invocations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invocations  $invocations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invocations $invocations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invocations  $invocations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invocations $invocations)
    {
        //
    }
}
