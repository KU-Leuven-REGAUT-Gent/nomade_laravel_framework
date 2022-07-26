<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Collection;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token', 'HA1', 'pivot',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the user's name.
     *
     * @return string
     */
    public function getNameAttribute()
    {
        return $this->username;
    }

    /**
     *
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }


    /**
     *
     */
    public function nonce()
    {
        return $this->hasOne(Nonce::class);
    }

    /**
     *
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    /**
     *
     */
    public function allPermissions()
    {               
        $permissions = $this->permissions()->get();
        foreach($this->roles as $role){
            $permissions = $permissions->merge($role->permissions);
        }
        return $permissions;
    }

    /**
     *
     */
    public function hasPermission($permission)
    {
        return $this->allPermissions()->where('name','=',$permission)->isNotEmpty();
    }

    /**
     *
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
