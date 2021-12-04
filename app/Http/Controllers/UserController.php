<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = User::with('education', 'skill')->latest()->get();

       //dd($users);
       return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('welcome');
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
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
       /* $request->validate([
            'name'=> 'required | min:5 | max:100',
            'title_job' => 'required | min:5 | max:64',
            'tel' => 'required | numeric | min:6',
            'address' => 'required | min:10 | max:128',
            'file' => 'image:jpg | image:png | image:jpeg | dimensions:min_width=100,min_height=200| size:513',
        ]);*/

        if($request->file('file')){
            Storage::disk('public')->delete($user->image);
            $user->image = $request->file('file')->store('users', 'public');
            $user->save();
        }

        $user->update($request->all());
        return redirect()->to('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if($user->image){
            Storage::disk('public')->delete($user->image);

        }

        $user->delete();

        return redirect()->to('user');
    }
}
