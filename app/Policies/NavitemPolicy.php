<?php

namespace App\Policies;

use App\Models\Navitem;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class NavitemPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // return $user->isDev() || $user->hasPermissionTo('view_navitem');
        return $user->isDev();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Navitem $navitem): bool
    {
        // return $user->isDev() || $user->hasPermissionTo('view_navitem');
        return $user->isDev();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->isDev();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Navitem $navitem): bool
    {
        // return $user->isDev() || $user->hasPermissionTo('edit_navitem');
        return $user->isDev();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Navitem $navitem): bool
    {
        // return $user->isDev() || $user->hasPermissionTo('delete_navitem');
        return $user->isDev();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Navitem $navitem): bool
    {
        // return $user->isDev() || $user->hasPermissionTo('restore_navitem');
        return $user->isDev();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Navitem $navitem): bool
    {
        return $user->isDev();
    }
}
