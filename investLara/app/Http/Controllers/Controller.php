<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage(){
        return view('welcome');
    }
    public function cadastrar(){
        // return view('');
        echo "Tela de cadastro";
    }
    /**
    * Method to user login View
    */
    public function fazerlogin(){
        return view('user.login');
    }
}
