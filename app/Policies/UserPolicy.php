<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function view(User $user, $user2)
    {
        // dd($user2);
        return $user->id === $user2->id;
    }

    public function create(User $user)
    {
        //dd($user->id);
        return $user->id === auth()->user()->id;
    }
}
