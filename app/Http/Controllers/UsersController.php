<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index()
    {
        return Inertia::render('Users', [
            'users' => User::all()->map(fn($user) => [
                'name' => $user->name,
                'id' => $user->id,
                'email' => $user->email
            ])
        ]);
    }
     public function store(Request $request){
        $attributes = $request ->validate([
            'name' => 'required',
            'email' =>  ['required', 'email'],
            'password' => 'required',

        ]);
        User::create($attributes);
        return to_route('login');

     }
}
