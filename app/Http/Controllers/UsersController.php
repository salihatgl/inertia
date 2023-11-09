<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
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
