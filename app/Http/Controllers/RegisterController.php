<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register', [

        ]);
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'email'     => 'required|email:dns',
        //     'password'  => 'required',
        // ]);
       $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'tlp' => 'required|max:20|unique:users',
            'password' => 'required|min:8|max:255',
        ]);
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registrasi berhasil, silahkan login!');

       // session()->flash('success', 'Registrasi berhasil, silahkan login!');

        return redirect('/login')->with('success', 'Registrasi berhasil, silahkan login!');
        ;
    }
}
