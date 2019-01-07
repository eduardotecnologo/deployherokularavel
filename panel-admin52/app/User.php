<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Permission;

class User extends Authenticatable
{
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

    public function roles(){
        $this->belongsToMany(\App\Role::class);
    }

    public function hasPermission(Permission $permission){
        //view_post => Manager, Editor
        return $this->hasAnyRoles($permission->roles);
    }

    public function hasAnyRoles($roles){
        if(is_array($roles) || is_object($roles)){
            foreach($roles as $role){
                return $this->hasAnyRoles($role);
            }
        }
        return $this->roles->contains('name',$roles);
    }
}
