<?php

namespace App\Http\Controllers;

use App\Models\RimFirst;
use Illuminate\Http\Request;

class RimFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return rimFirst::all();
        $rimFirst = rimFirst::all();
        return view('rim-first')->with('rimFirst', $rimFirst);
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
     * @param  \App\Models\RimFirst  $rimFirst
     * @return \Illuminate\Http\Response
     */
    public function show(RimFirst $rimFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RimFirst  $rimFirst
     * @return \Illuminate\Http\Response
     */
    public function edit(RimFirst $rimFirst)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RimFirst  $rimFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RimFirst $rimFirst)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RimFirst  $rimFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy(RimFirst $rimFirst)
    {
        //
    }
}
