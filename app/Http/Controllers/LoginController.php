<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Auth;
use app\Models\User;
use App\Admin;


use App\Http\Controllers\Controller;



use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    

public function login(Request $request ){

    
 //dd(request('password'));
   
    $admin='admin';
    $client='user';
    
    $email=request('Email');
    $password=request('password');
    
 
  
    
if(Auth::attempt( ['email'=>$email , 'password'=>$password , 'type'=>$admin  ]))
{

    
    


 

    return redirect('/admin');

    }elseif(Auth::attempt( ['email'=> $email , 'password'=> $password , 'type'=>$client  ]))
        {

          

            return redirect('/client');

        }else
           {
            return redirect('/login');
           }

    



}





    public function logout(Request $request) {

        session()->forget(['admin']);
        session()->forget(['client']);

        Auth::logout();
        return redirect('/');
      }


   /* public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }*/

}




