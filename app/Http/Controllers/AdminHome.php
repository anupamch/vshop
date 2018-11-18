<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Cookie;
class AdminHome extends Controller
{
    function login(){
    	return view('admin.user.login');
    }

    public function setAuthenticate(){

        $login_name=request("username");
        $pass=request("password");
        $remember_me = request()->has('remember') ? true : false; 
        
        if (Auth::attempt(['email' => $login_name, 'password' => $pass])) {

            if(Auth::user()->status==1){
                Session::save();
                
                if($remember_me){
                      $remember_value=json_encode(['username' => $login_name, 'password' => $pass]);
                      $remember_value=Crypt::encryptString($remember_value);
                      Cookie::queue('remember_me', $remember_value,15*24*365*60);
                      
                }
                else{
                    Cookie::queue(Cookie::forget('remember_me'));
                }
                if(Auth::user()->user_type==1)
                   return redirect("admin/dashboard");
                
            }
            else{

                Session::flash('error', 'Please verify your email.');
                return redirect("/login");

            }
        }
        else
        {
            Session::flash('error', 'Wrong username or password!!');
            return redirect("/login"); 
        }

    }

    function dashboard(){
    	return view('admin.user.dashboard');
    }
    
}
