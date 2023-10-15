<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {

        return view('auth.sign-in', [
            'title' => 'sign-in',
            'active' => 'sign-in',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        // dd('berhasil', $request->all());

              

        // if(Auth::attempt (['email'=>$request['email'], 'password'=>$request['password']]) ) {
        //     if (isset($credentials['remember']) && !empty($credentials['remember'])) {
        //         setcookie("email", $credentials['email'], time() + 3600);
        //         setcookie("password", $credentials['password'], time() + 3600);
        //     } else {
        //         setcookie("email", "");
        //         setcookie("password", "");
        //     }  
        // }
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            $request->session()->regenerate();
            return redirect()->intended('/about');
        } else {
            return back()->with('loginError', 'Incorrect username or password.');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/sign-in');
    }
}
