<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
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
        
        Session::put('email',$request->email);
        Session::put('password',$request->password);

        return redirect()->route('contact_page');

        
    }
    public function contact(){
        
        $email=session('email');
        $password=session('password');
        if(!empty($email && !empty($password))){
            return view('contact',compact('email','password'));

        }
        else{
            return redirect('home');
        }


    }

    public function panel(){

        
        return view('dashboard');

    }
    
}
