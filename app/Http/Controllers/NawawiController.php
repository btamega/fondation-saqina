<?php

namespace App\Http\Controllers;

use App\Models\nawawi;
use Illuminate\Http\Request;

class NawawiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('fatwas/nawawi');
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
     * @param  \App\Models\nawawi  $nawawi
     * @return \Illuminate\Http\Response
     */
    public function show(nawawi $nawawi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nawawi  $nawawi
     * @return \Illuminate\Http\Response
     */
    public function edit(nawawi $nawawi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nawawi  $nawawi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nawawi $nawawi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nawawi  $nawawi
     * @return \Illuminate\Http\Response
     */
    public function destroy(nawawi $nawawi)
    {
        //
    }
}
