<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\StatusPelapor;
use App\Models\SubjekLaporan;
use App\Models\KlasifikasiLaporan;
use Illuminate\Support\Facades\Storage;


class IndexController extends Controller
{
    public function index(){
    $laporan = Laporan::paginate();
    $klasifikasilaporan = KlasifikasiLaporan::all();
    $statuspelapor = StatusPelapor::all();
    $subjeklaporan = SubjekLaporan::all();
    $unit = Unit::all();
        return view('index', [
            'laporan' => $laporan,
            'klasifikasilaporan' => $klasifikasilaporan,
            'statuspelapor' => $statuspelapor,
            'subjeklaporan' => $subjeklaporan,
            'unit' => $unit,
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'induk' => 'required|max:30',
            'email' => 'required|email:dns',
            'tlp' => 'required|max:20',
            'alamat' => 'required',
            'klasifikasilaporan_id' => 'required',
            'statuspelapor_id' => 'required',
            'subjeklaporan_id' => 'required',
            'tglkejadian' => 'required',
            'tglpelaporan' => 'required',
            'judul' => 'required|max:255',
            'description' => 'required',
            'unit_id' => 'required',
            'kartu' => 'required',
            // 'status' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
            // 'user_id' => 'required'
        ]);

        // $laporan['user_id'] = auth()->id();
        $laporan = new Laporan();
        $laporan->fill($request->all());

        $path = Storage::putFile(
            'public/images/laporan',
            $request->file('image'),
        );
        $laporan->image = $path;
        $laporan->user_id = auth()->user()->id;
        $laporan->save();
        // TentangLaporin::create($request->all());
        return redirect()->back()->with([
            'success' => 'Data laporan berhasil dikirimkan kepada UPA/ unit terkait.',
            // 'error' => 'Data laporan gagal dikirimkan kepada UPA/ unit terkait.'
        ]);
    }
}
        // return view('admin.pages.user.index', [
        //     'user' => $user,
        //     'role' => $role
        // ]);

        // Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum ullam assumenda ducimus, sit exercitationem natus ad provident quo minima voluptatum. Ad, sequi reiciendis dolorum aperiam natus iste assumenda quis praesentium.