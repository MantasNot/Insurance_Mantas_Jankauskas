<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Insurance;
use Illuminate\Auth\Access\HandlesAuthorization;

class InsurancePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any insurance records.
     *
     * @param User $user
     * @return bool
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the insurance record.
     *
     * @param User $user
     * @param Insurance $insurance
     * @return bool
     */
    public function view(User $user, Insurance $insurance)
    {
        return $user->type == "admin" || $user->type == "reader";
    }

    /**
     * Determine whether the user can create insurance records.
     *
     * @param User $user
     * @return bool
     */
    public function create(User $user)
    {
        return $user->type=="admin" || $user->type=="reader";
    }

    /**
     * Determine whether the user can update the insurance record.
     *
     * @param User $user
     * @param Insurance $insurance
     * @return bool
     */
    public function update(User $user, Insurance $insurance)
    {
        return true;
    }

    /**
     * Determine whether the user can delete the insurance record.
     *
     * @param User $user
     * @param Insurance $insurance
     * @return bool
     */
    public function delete(User $user, Insurance $insurance)
    {
        return true;
    }

    /**
     * Determine whether the user can restore the insurance record.
     *
     * @param User $user
     * @param Insurance $insurance
     * @return bool
     */
    public function restore(User $user, Insurance $insurance)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the insurance record.
     *
     * @param User $user
     * @param Insurance $insurance
     * @return bool
     */
    public function forceDelete(User $user, Insurance $insurance)
    {
        return true;
    }
}
