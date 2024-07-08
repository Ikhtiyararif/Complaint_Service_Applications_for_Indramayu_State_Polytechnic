<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login', [

        ]);
    }

    public function auth(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            if(Auth::user()->role_id == '1'){
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
            }else if(Auth::user()->role_id == '0'){
                $request->session()->regenerate();
                return redirect()->intended('/index');
            }else if(Auth::user()->role_id == '2'){
                $request->session()->regenerate();
                return redirect()->intended('/laporanmasuk/informatika');
            }
            
        }

        return back()->with('loginerror', 'Login gagal!');

        // $credentials = $request->validate([
        //     'email'     => 'required|email:dns',
        //     'password'  => 'required',
        // ]);
        // // dd('berhasil login');
        // // $data = [
        // //     'email'     => $request->email,
        // //     'password'  => $request->password,
        // // ];

        // if(Auth::attempt($credentials)){
        //     $request->session()->regenerate();
        //     return redirect()->intended('index');
        // }
        //     return back()->with('failed', 'Email atau Password Salah.');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home');
    }
}
