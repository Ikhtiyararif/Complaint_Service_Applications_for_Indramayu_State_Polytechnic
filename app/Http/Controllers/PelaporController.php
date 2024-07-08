<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\TentangLaporin;
use Illuminate\Http\Request;

class PelaporController extends Controller
{
    public function index(){
        return view('home', [

        ]);
    }
    public function profil(){
        // $users = Profil::paginate();
        return view('pages.profil', [

        ]);
    }
    // public function dashboard(){
    //     return view('pages.admin.dashboard');
    // }
    
    public function tentanglaporin(){
        $tentanglaporin = TentangLaporin::paginate();
        return view('tentanglaporin', [
            'tentanglaporin' => $tentanglaporin,
        ]);
    }
}
