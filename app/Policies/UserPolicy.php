<?php

namespace App\Policies;

use App\Models\User;
use Auth;
use Illuminate\Auth\Access\Gate;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\Model;

class UserPolicy
{
    use HandlesAuthorization;

    // public function create(User $user):bool
    // {
    //     return $user->email === 'susan@doe.com';
    // }
    
}