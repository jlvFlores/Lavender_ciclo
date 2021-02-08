<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        
        return view('users.index', [
            'users' => $users
        ]);
    }
    
    public function store()
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return back();
    }

    public function destroy()
    {
        $user->delete();

        return back();
    }
}
