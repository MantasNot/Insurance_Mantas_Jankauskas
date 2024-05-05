<?php

namespace App\Policies;

use App\Models\User;
use App\Models\cars;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CarsPolicy
{
    /**
     * Create a new policy instance.
     */
    //use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return true;
    }
    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param cars $cars
     * @return bool
     */
    public function view(User $user, cars $cars)
    {
        return $user->type=="admin" || $user->type=="reader";
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return bool
     */
    public function create(User $user)
    {
        return $user->type=="admin" || $user->type=="reader";
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param cars $cars
     * @return bool
     */
    public function update(User $user): bool
    {
        return true;
    }
    public function edit(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param cars $cars
     * @return bool
     */
    public function destroy(cars $cars): bool
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param cars $cars
     * @return bool
     */
    public function restore(User $user, cars $cars)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param cars $cars
     * @return void
     */
    public function forceDelete(User $user, cars $cars)
    {
        //
    }
}
