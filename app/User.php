<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    /**
     * Returns the userRoles column html for datatables.
     *
     * @param \App\User
     * @return string
     */
    public static function laratablesCustomUserRoles($user)
    {
        return $user->roles->implode('name', ',');
    }
}
