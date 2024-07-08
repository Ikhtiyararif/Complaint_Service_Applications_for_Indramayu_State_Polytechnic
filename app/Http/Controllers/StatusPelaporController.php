<?php

namespace App\Http\Controllers;

use App\Models\StatusPelapor;
use Illuminate\Http\Request;

class StatusPelaporController extends Controller
{
    public function index(Request $request){
        $keyword = $request->query('keyword');
        $statuspelapor = StatusPelapor::when($keyword, function($query, $keyword){
             return $query->where('title', 'like', '%' .$keyword.'%');
        })
        ->paginate(10)
        ->withQueryString();
        // $subjeklaporan = SubjekLaporan::paginate();
        return view('admin.pages.statuspelapor.index', [
            'statuspelapor' => $statuspelapor,
        ]);
    }

    // public function create(){
    //     return view('admin.pages.subjeklaporan.add');
    // }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
        ]);

        $statuspelapor = new StatusPelapor();
        // $subjeklaporan->fill($request->all());
        // $subjeklaporan->save();
        StatusPelapor::create($request->all());
        return redirect()->back()->with([
            'success' => 'Data berhasil ditambahkan.'
        ]);
    }

    public function destroy($id){
        $statuspelapor = StatusPelapor::find($id);
        $statuspelapor ->delete();
        return redirect()->back()->with([
            'delete' => 'Data berhasil dihapus.']);
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'title' => 'required|max:255',
        ]);

        $statuspelapor = StatusPelapor::find($id);
        $statuspelapor->fill($request->all());
        $statuspelapor->save();
        return redirect()->back()->with([
            'update' => 'Data berhasil diubah.']);
    }
}
