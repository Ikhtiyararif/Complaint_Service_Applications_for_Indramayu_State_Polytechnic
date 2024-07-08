<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArsipLaporanController extends Controller
{
    public function arsiplaporan(){
        // $orders = Order::where('id', $id)->where('user_id', Auth::id())->first();
        $laporan = Laporan::where('user_id', Auth::id())->get();
        return view('pages.arsiplaporan', [
            'laporan' => $laporan,
        ]);
    }
}
