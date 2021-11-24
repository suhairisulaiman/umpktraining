<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // query list of user from db
        $users = User::all();

        // return to view - resources/views/users/index.blade.php
        return view('users.index', compact('users'));
    }

    public function show(User $User)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $User)
    {
        return view('users.edit', compact('user'));
    }

    public function update(User $User, Request $request)
    {
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();

        return redirect()->to('/users');
    }

    public function delete(User $User)
    {
        //delete from table using model
        $user->delete();

        //return to todo index
        return redirect()->to('/users');

    }
}