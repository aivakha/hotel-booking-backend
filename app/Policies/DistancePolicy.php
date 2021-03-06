<?php

namespace App\Policies;

use App\Models\Distance;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DistancePolicy
{
    use HandlesAuthorization;

    public function index(?User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Distance  $distance
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Distance $distance)
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Distance  $distance
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Distance $distance)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Distance  $distance
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Distance $distance)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Distance  $distance
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Distance $distance)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Distance  $distance
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Distance $distance)
    {
        //
    }
}
