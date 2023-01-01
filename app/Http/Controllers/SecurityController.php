<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;// import model user
use Illuminate\Support\Facades\Auth;//agar auth bisa berjalan


class SecurityController extends Controller
{
    public function formLogin() { 
        return view("security.form-login"); 
    }
     
    //proses login
    public function prosesLogin(Request $request) { 
        $username = $request->get("username"); 
        $password = $request->get("password"); 
        $user = User::where('username', $username)->where("password", $password)->first();
        if ($user != null) { 
            Auth::login($user); 
            return redirect(route('about')); 
        } else { 
            return back(); 
            } 
        }

        //proses logout
        public function logout() {
            Auth::logout(); 
            return redirect(route("login"));
            
        }


}
