<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
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
        $data = $request->all();

        $social = SocialMedia::create([

            'red' => $data['red'],
            'url' => $data['url'],
            'user_id' => intval($data['user_id']),
        ]);

        $social->save();

        return redirect()->to('my-portfolio')->with('success', 'Red social creada con exito!');
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
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, SocialMedia $social)
    {
        $data = $request->all();

        $id = intval($data['id']);

        $social->where('id', $id)->update(['red' => $data['red'], 'url' => $data['url']]);

        return redirect()->to('my-portfolio')->with('success', 'Red social editada con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, SocialMedia $social)
    {
        $data = $request->all();

        $id = intval($data['id']);

        $social->where('id', $id)->delete();

        return redirect()->to('my-portfolio')->with('danger', 'Red social borrada con exito!');
    }
}
