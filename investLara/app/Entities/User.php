<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    public $timestamps = true;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    
    protected $fillable = ['name', 'cpf', 'phone', 'gender','birth','notes','email','password', 'status','permission'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function setPasswordAdttribute($value){
        $this->attributes['password'] = env('PASSSWORD_HASH') ? bcrypt('$value') : '$value';
    }
}
