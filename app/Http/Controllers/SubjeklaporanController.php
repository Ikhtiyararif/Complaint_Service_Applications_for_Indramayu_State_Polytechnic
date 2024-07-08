<?php

namespace App\Http\Controllers;

use App\Models\SubjekLaporan;
use Illuminate\Http\Request;

class SubjeklaporanController extends Controller
{
    // $keyword = $request->query('keyword');
    // $careers = Career::when($keyword, function($query, $keyword){
    //     return $query->where('position', 'like', '%' .$keyword.'%');
    // })
  
    public function index(Request $request){
        $keyword = $request->query('keyword');
        $subjeklaporan = SubjekLaporan::when($keyword, function($query, $keyword){
             return $query->where('title', 'like', '%' .$keyword.'%');
        })
        ->paginate(10)
        ->withQueryString();
        // $subjeklaporan = SubjekLaporan::paginate();
        return view('admin.pages.subjeklaporan.index', [
            'subjeklaporan' => $subjeklaporan,
        ]);
    }

    // public function create(){
    //     return view('admin.pages.subjeklaporan.add');
    // }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
        ]);

        $subjeklaporan = new SubjekLaporan();
        // $subjeklaporan->fill($request->all());
        // $subjeklaporan->save();
        SubjekLaporan::create($request->all());
        return redirect()->back()->with([
            'success' => 'Data berhasil ditambahkan.'
        ]);
    }

    public function destroy($id){
        $subjeklaporan = SubjekLaporan::find($id);
        $subjeklaporan ->delete();
        return redirect()->back()->with([
            'delete' => 'Data berhasil dihapus.']);
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'title' => 'required|max:255',
        ]);

        $subjeklaporan = SubjekLaporan::find($id);
        $subjeklaporan->fill($request->all());
        $subjeklaporan->save();
        return redirect()->back()->with([
            'update' => 'Data berhasil diubah.']);
    }
}
