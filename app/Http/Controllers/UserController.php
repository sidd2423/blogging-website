<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
  
    public function loadRegister(){
     return view('register');   
    }

    public function userRegister(Request $request){
        $request->validate([
            'name' => 'string|required|min:1',
            'email'=> 'string|required|email|max:100|unique:users',
            'password' => 'string|required|min:6|confirmed'
        ]);


        $user = new User;
        $user->name = $request->name;
        $user->email = $request -> email;
        $user->password = Hash::make(($request->password));
        $user->save();
        return redirect('/homepage');
        
    }

    public function loadLogin(){
        return view('login');
    }

    public function userLogin(Request $request){
      
        $user = User::where('email','=',$request->email)->first();
        if($user || Hash::check($request->password,$user->password) ){
            Auth::login($user);
            if(Auth::check()){
                return redirect('/homepage');
        }
        else{
            return back()->with('error','Click Register now for registration.Thank you');
        }
    }
        else{
            return back()->with('error','Username and Password is incorrect.Please try again');
           
        }    

}
     public function homepage()
     {
        if(Auth::check()){
            return view('posts');
        }
        else{
            return redirect('/');
        }
        
     }

     public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return view('login');
     }

}







