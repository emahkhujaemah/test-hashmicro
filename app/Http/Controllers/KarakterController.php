<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KarakterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $input1 = "ABBCD";
        $input2 = "Gallant Duct";

        $input1LowerCase = strtolower($input1);
        $input2LowerCase = strtolower($input2);
        $char1 = similar_text($input1LowerCase, $input2LowerCase);
        // echo $char1;

        $char2 = strlen($input1);
        // echo $char2;

        $sameCharPersen = round($char1/$char2 * 100, 2);
        // echo "Hasilnya ". $sameCharPersen ."%";
        
        return view('karakter.index', [
            $char1 => 'char1', 
            $char2 => 'char2',
            $sameCharPersen => 'sameCharPersen',
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
