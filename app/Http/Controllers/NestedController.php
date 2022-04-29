<?php

namespace App\Http\Controllers;

use App\Models\Nested;
use Illuminate\Http\Request;

class NestedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Nested.index',[
            "nestedLoop" => Nested::all(),
        ]);
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
     * @param  \App\Models\Nested  $nested
     * @return \Illuminate\Http\Response
     */
    public function show(Nested $nested)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nested  $nested
     * @return \Illuminate\Http\Response
     */
    public function edit(Nested $nested)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nested  $nested
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nested $nested)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nested  $nested
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nested $nested)
    {
        //
    }
}
