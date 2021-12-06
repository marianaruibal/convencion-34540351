<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
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

        $skill = Skill::create([
            'name' => $data['name'],
            'user_id' => intval($data['user_id']),
            'percent' => 50
        ]);

        $skill->save();

        return redirect()->to('user/'. $skill->user_id . '/edit')->with('success', 'Habilitadad creada con exito!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeClient(Request $request)
    {
        $data = $request->all();

        $skill = Skill::create([

            'name' => $data['name'],
            'user_id' => intval($data['user_id']),
            'percent' => 50
        ]);

        $skill->save();

        return redirect()->to('my-portfolio')->with('success', 'Skill ha sido creada con exito!');
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
    public function update(Request $request, Skill $skill)
    {
        $skill->update($request->all());
        return redirect()->to('user/'. $skill->user_id . '/edit')->with('success', 'Habilitadad editada con exito!');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSkill(Request $request, Skill $skill)
    {

        $data = $request->all();

        $id = intval($data['id']);

        $skill->where('id', $id)->update(['name' => $data['name']]);

        return redirect()->to('my-portfolio')->with('success', 'Skill fue editada con exito!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $id = $skill->user_id;

        $skill = Skill::find($skill->id);
        $skill->delete();

        return redirect()->to('user/'.$id.'/edit')->with('danger', 'Habilidad borrada con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyClient(Request $request, Skill $skill)
    {
        $data = $request->all();

        $id = intval($data['id']);

        $skill->where('id', $id)->delete();

        return redirect()->to('my-portfolio')->with('danger', 'La Skill fue borrada con exito!');
    }


}
