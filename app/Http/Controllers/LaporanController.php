<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\StatusPelapor;
use App\Models\SubjekLaporan;
use App\Models\KlasifikasiLaporan;
use Illuminate\Support\Facades\DB;


class LaporanController extends Controller
{
    public function informatika(){
    $jumlahinformatika = DB::table('laporan')->where('unit_id',5)->count();
    $laporan = Laporan::paginate();
    $klasifikasilaporan = KlasifikasiLaporan::all();
    $statuspelapor = StatusPelapor::all();
    $subjeklaporan = SubjekLaporan::all();
    $unit = Unit::all();
    return view('admin.pages.unit.teknikinformatika', [
        'laporan' => $laporan,
        'klasifikasilaporan' => $klasifikasilaporan,
        'statuspelapor' => $statuspelapor,
        'subjeklaporan' => $subjeklaporan,
        'unit' => $unit,
        'jumlahinformatika' => $jumlahinformatika,
    ]);
    }
}
