<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function home(){
        return view('index');

    }
    public function log(){
        return view('log');
    }
    
    public function signIn(Request $request){
        return $request;
        
    }
    
}
