<?php

namespace App\Http\Controllers;

use App\Models\Whatido;
use Illuminate\Http\Request;

class WhatidoController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeWhat(Request $request)
    {
        $data = $request->all();

        $whatido = Whatido::create([

            'title' => $data['title'],
            'user_id' => intval($data['user_id']),
            'description' => $data['description'],
        ]);

        $whatido->save();

        return redirect()->to('my-portfolio')->with('success', 'What I do ha sido creado con exito!');
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateWhat(Request $request, Whatido $whatido)
    {

        $data = $request->all();

        $id = intval($data['id']);

        $whatido->where('id', $id)->update(['title' => $data['title'], 'description' => $data['description']]);

        return redirect()->to('my-portfolio')->with('success', 'What I do editado con exito!');

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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyWhat(Request $request, Whatido $whatido)
    {
        $data = $request->all();

        $id = intval($data['id']);

        $whatido->where('id', $id)->delete();

        return redirect()->to('my-portfolio')->with('danger', 'La Skill fue borrada con exito!');
    }
}
