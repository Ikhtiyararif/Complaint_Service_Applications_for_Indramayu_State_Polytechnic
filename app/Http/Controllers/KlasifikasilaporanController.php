<?php

namespace App\Http\Controllers;

use App\Models\KlasifikasiLaporan;
use Illuminate\Http\Request;

class KlasifikasilaporanController extends Controller
{
    public function index(Request $request){
        $keyword = $request->query('keyword');
        $klasifikasilaporan = KlasifikasiLaporan::when($keyword, function($query, $keyword){
             return $query->where('title', 'like', '%' .$keyword.'%');
        })
        ->paginate(10)
        ->withQueryString();
        // $subjeklaporan = SubjekLaporan::paginate();
        return view('admin.pages.klasifikasilaporan.index', [
            'klasifikasilaporan' => $klasifikasilaporan,
        ]);
    }

    // public function create(){
    //     return view('admin.pages.subjeklaporan.add');
    // }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
        ]);

        $klasifikasilaporan = new KlasifikasiLaporan();
        // $subjeklaporan->fill($request->all());
        // $subjeklaporan->save();
        KlasifikasiLaporan::create($request->all());
        return redirect()->back()->with([
            'success' => 'Data berhasil ditambahkan.'
        ]);
    }

    public function destroy($id){
        $klasifikasilaporan = KlasifikasiLaporan::find($id);
        $klasifikasilaporan ->delete();
        return redirect()->back()->with([
            'delete' => 'Data berhasil dihapus.']);
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'title' => 'required|max:255',
        ]);

        $klasifikasilaporan = KlasifikasiLaporan::find($id);
        $klasifikasilaporan->fill($request->all());
        $klasifikasilaporan->save();
        return redirect()->back()->with([
            'update' => 'Data berhasil diubah.']);
    }
}
