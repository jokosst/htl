<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
   public function login(Request $Request){

   	  if (\Auth::attempt(['username' => $Request->username, 'password' => $Request->password])) {
            // Authentication passed...
            return redirect()->intended('/admin');
        } else {
        	return back()->with('error', 'Cek Lagi username atau password anda');
        }
  		
   }
   public function logout(Request $request)
    {
    	\Auth::logout();

    	return redirect('/login');
    }
}
