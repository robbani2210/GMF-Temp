<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index(){

        return view('auth.sign-up', [
            'title' => 'sign-up',
            'active' => 'sign-up',
        ]);
    }

    public function store(Request $request){
        // dd('berhasil', $request->all());

        $validatedData = $request->validate([
            'name'      => 'required|max:255',
            'username'  => 'required|min:4|max:255|unique:users',
            'email'     => 'required|email:dns|unique:users',
            'password'  => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash :: make($validatedData['password']);
        $validatedData['email_verified_at'] = now();
         
        User::on('mysql')->create($validatedData);
        return redirect('/sign-in')->with('success', 'Registration successful! Please login');
    }
}
