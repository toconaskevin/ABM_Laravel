<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(Request $request){

        $request->user()->authorizeRoles('admin');
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'email'=>'required',
            'password' =>'required'
        ]);

        $user = new User([
            'name' => $request->get('nombre'),
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);

        $user->save();
        return redirect('/users')->with('success', 'Usuario guardado !');
    }

    public function update(Request $request, User $user)
    {

        $request->validate([
            'nombre'=>'required',
            'email'=>'required',
        ]);

        $user->name = $request->get('nombre');
        $user->email = $request->get('email');
        $user->save();

        return redirect('/users')->with('success', 'Usuario actualizado!');
    }

    public function show()
    {
        abort(404, 'Error');
    }
    
}
