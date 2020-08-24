<?php


namespace App\Traits;


use App\Models\Company\Company;
use App\Models\User;

trait CheckUserPermission
{
    /**
     * Check company contain user
     *
     * @param Company $company
     * @param User $user
     *
     * @return bool
     */
    public function checkUserInCompany(Company $company, User $user)
    {
        return $company->users->contains($user);
    }

    /**
     * Check have permission to do some action
     *
     * @param User $user
     * @param $permission
     *
     * @return bool
     */
    public function checkUserPermission(User $user, $permission)
    {
        return $user->can($permission);
    }
}
