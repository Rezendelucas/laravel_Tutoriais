<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prototypesViewController extends Controller
{
    public function list_Prototypes(){
       return view('prototypesView');
    }

    public function email_Contato(){
        dd("Caminho ok: projeto email_Contato ainda nao implementado");
    }

    public function login_CRUD(){
        return view('views_Login_CRUD/home_Login');
    }

    public function jokenpo_game(){
        return view('jokenpo');
    }

    public function job_view(){
        return view('jobView');
    }




}
