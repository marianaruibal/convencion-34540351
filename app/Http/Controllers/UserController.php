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
       $users = User::with('education', 'skill', 'roles')->latest()->get();

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
    public function store(Request $request, User $user)
    {
        $data = $request->all();

        $skill = User::create([

            'name' => $data['name'],
            'user_id' => intval($data['user_id']),
            'percent' => 50
        ]);

        $user->save();

        if($user->role == 'admin'){
        return redirect()->to('user')->with('success', 'Datos guardados con exito!');
        exit;
        }
        return redirect()->to('my-portfolio')->with('success', 'Datos guardados con exito!');
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

            if($request->file('file')){
                Storage::disk('public')->delete($user->image);
                $user->image = $request->file('file')->store('users', 'public');
                $user->save();
            }

            if($request->file('about_image')){
                Storage::disk('public')->delete($user->about_image);
                $user->about_image = $request->file('about_image')->store('users', 'public');
                $user->save();
             }

            $user->update($request->all());

            if($user->role == 'admin'){

                return redirect()->to('user')->with('success', 'Datos guardados con exito!');
                exit;
            }

            return redirect()->to('my-portfolio')->with('success', 'Datos guardados con exito!');
    }

    public function updateAbout(UserRequest $request, User $user){

        if($request->file('about_image')){
            Storage::disk('public')->delete($user->about_image);
            $user->about_image = $request->file('about_image')->store('users', 'public');
            $user->save();
        }

        $user->update($request->all());

        if($user->role == 'admin'){

            return redirect()->to('user')->with('success', 'Datos sobre mi editados con exito!');
            exit;
        }

        return redirect()->to('my-portfolio')->with('success', 'Datos sobre mi editados con exito!');
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

    /**
     * Logout the user.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout_user()
    {
        Auth::logout();;

        return view('welcome');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function my_portfolio()
    {
        $user = User::find(Auth::user()->id)->with('education', 'skill', 'roles')->first();

        return view('my-portfolio', compact('user'));
    }
}
