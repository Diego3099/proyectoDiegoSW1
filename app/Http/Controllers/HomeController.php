<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __invoke(){
    return view('home');
    }

    public function login(){
        $credentials = request()->only('email','password');

        if(Auth::attempt($credentials)){
            return 'inicio';
        }
    return 'no';
    }
   
    
}
