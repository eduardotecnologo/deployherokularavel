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

     // Trabalhando con Mutator
    public function getCpfAttribute(){
        $cpf = $this->attributes['cpf'];
        return substr($cpf,0,3) . '.' . substr($cpf,3,3) . '.' . substr($cpf,7,3) . '-' . substr($cpf,-2);
    }

    public function getPhoneAttribute(){
        $phone = $this->attributes['phone'];
        return "(" . substr($phone,0,2) . ") " . substr($phone,2,4) . "-" . substr($phone, -4);
    }

    public function getBirthAttribute(){
        $birth = explode('-', $this->attributes['birth']);
            if(count($birth) != 3)
            return "";
        $birth = $birth[2] . '/' . $birth[1] . '/' . $birth[0];
        return $birth;
    }
}
