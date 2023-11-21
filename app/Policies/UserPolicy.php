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

    public function create(User $user)
    {
        return $user->email === 'salihatigli55@gmail.com';
    }
     public function edit(User $targetUser)
     {
         return $targetUser->id % 2 === 0;
     }
 }