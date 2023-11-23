<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Inertia\Inertia;

class UsersController extends Controller
{
    public function index()
    {
        return Inertia::render('Users', [
             'can' => [
                 'create_user' => Auth::user()->can('create', User::class),
            ],
            'users' => User::all()->map(function ($user) {
                return [
                'name' => $user->name,
                'id' => $user->id,
                'email' => $user->email,
                ];
            }),
        ]);
    }
     public function store(Request $request){
        $attributes = $request ->validate([
            'name' => 'required',
            'email' =>  ['required', 'email'],
            'password' => 'required',

        ]);
        User::create($attributes);
        return to_route('users.create');

     }
}
