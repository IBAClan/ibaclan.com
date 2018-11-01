<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function groups() {
        return $this->belongsToMany('App\Group', 'users_to_groups', 'user_id', 'group_id');
    }

    public function hasRole($role) {
        if( ! $this->roles()->exists() )
            return false;
        if( $this->roles()->where('slug', $role)->count() > 0 )
            return true;
        return false;
    }

    public function news() {
        return $this->hasMany('App\News');
    }

    public function roles() {
        return $this->belongsToMany('App\Role', 'users_to_roles', 'user_id', 'role_id');
    }

}
