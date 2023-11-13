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
            'users' => User::all()->map(fn($user) => [
                'name' => $user->name,
                'id' => $user->id,
                'email' => $user->email,
                // 'can' => [
                //     'creatUser' => auth()->user()->can('create', User::class),
                // ]
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
