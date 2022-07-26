<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

abstract class Policy
{
    use HandlesAuthorization;

    protected $model;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function index(User $user)
    {
        return $this->hasAnyPermission($user, null, 'index');
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $this->hasAnyPermission($user, null, 'viewAny');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Model  $model
     * @return mixed
     */
    public function view(User $user, $model = null)
    {
        return $this->hasAnyPermission($user, $model, 'view') || $this->hasAnyPermission($user, $model, 'show');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Model  $model
     * @return mixed
     */
    public function show(User $user, $model = null)
    {
        return $this->hasAnyPermission($user, $model, 'view') || $this->hasAnyPermission($user, $model, 'show');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user, $model = null)
    {
        return $this->hasAnyPermission($user, $model, 'create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function edit(User $user, $model = null)
    {
        return $this->hasAnyPermission($user, $model, 'edit');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function update(User $user, $model = null)
    {
        return $this->hasAnyPermission($user, $model, 'update');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function delete(User $user, $model)
    {    
        return $this->hasAnyPermission($user, $model, 'delete') || $this->hasAnyPermission($user, $model, 'destroy');
    }

    /**
     * Determine whether the user can destroy the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function destroy(User $user, $model)
    {
        return $this->hasAnyPermission($user, $model, 'delete') || $this->hasAnyPermission($user, $model, 'destroy');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function arrange(User $user, $model)
    {
        return $this->hasAnyPermission($user, $model, 'arrange');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function duplicate(User $user, $model)
    {
        return $this->hasAnyPermission($user, $model, 'duplicate');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function restore(User $user, $model)
    {
        return $this->hasAnyPermission($user, $model, 'restore');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\User  $model
     * @return mixed
     */
    public function forceDelete(User $user, $model)
    {
        return $this->hasAnyPermission($user, $model, 'forceDelete');
    }

    protected function hasAnyPermission(User $user, $model = null, $method = null){ 
        if($user->hasPermission($this->model.'.'.$method)){       
            return true;
        }elseif($user->hasPermission($this->model.'.'.$method.'.company')){
            return $this->matchingCompany($user, $model);
        }elseif($user->hasPermission($this->model.'.'.$method.'.user')){
            return $this->matchingUser($user, $model);
        }else{
            return false;
        }
    }

    protected function matchingCompany(User $user, $model = null){
        return false;
    }

    protected function matchingUser(User $user, $model = null){
        return false;
    }
}
