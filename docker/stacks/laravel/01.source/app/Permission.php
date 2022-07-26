<?php

namespace App;



class Permission extends Model
{
    /**
     * Get the permissions' uuid when requesting the name attribute.
     *
     * @return string
     */
    public function getNameAttribute()
    {
        return $this->uuid;
    }

    /**
     *
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     *
     */
    public function users()
    {
        return $this->belongsToMany(Role::class);
    }
}
