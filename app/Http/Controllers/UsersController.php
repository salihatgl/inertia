<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class UsersController extends Controller
{
    public function index()
    {
        return Inertia::render('Users', [
             'can' => [
                 'create_user' => Auth::user()->can('create', User::class),
                 'delete_user' => Auth::user()->can('delete', User::class),
            ],
        //     'can' => [

        //         'delete_user' => Auth::user()->can('delete', User::class),
        //    ],
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
    /**
     * Display the user's profile form.
     */
    public function edit()
{
    $user = Auth::user();

    return Inertia::render('Edit', [
        'user' => $user,
    ]);
}

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . $user->id,
    ]);

    $user->update([
        'name' => $request->name,
        'email' => $request->email,
    ]);

    return Redirect::route('profile.edit');
}
public function destroy(User $user)
{
    $user->delete();

    return Redirect::back()->with('success', 'Contact deleted.');
}

}