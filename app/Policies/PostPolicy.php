<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    /**
     * Create a new policy instance.
     */
    use HandlesAuthorization;
    public function __construct()
    {
        //
    }
    public function isAdmin(User $user){
        return $user->email === "admin@gmail.com";
    }
    // public function isAdmin(User $user){
    //     return $user->email === "admin@gmail.com"
    //     ? Response::allow()
    //     :Response::deny('You do not own this post');
    // }
}
