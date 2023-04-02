<?php

namespace App\Policies;

use App\Models\AdminModel;
use App\Models\TeachersModel;
use Illuminate\Auth\Access\Response;

class TeachersModelPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(AdminModel $adminModel): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(AdminModel $adminModel, TeachersModel $teachersModel): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(AdminModel $adminModel): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(AdminModel $adminModel, TeachersModel $teachersModel): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(AdminModel $adminModel, TeachersModel $teachersModel): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(AdminModel $adminModel, TeachersModel $teachersModel): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(AdminModel $adminModel, TeachersModel $teachersModel): bool
    {
        //
    }
}
