<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TentangLaporin;
use Illuminate\Support\Facades\Storage;

class TentangLaporinController extends Controller
{
    public function index(Request $request){
        $keyword = $request->query('keyword');
        $tentanglaporin = TentangLaporin::when($keyword, function($query, $keyword){
             return $query->where('title', 'like', '%' .$keyword.'%');
        })
        ->paginate(10)
        ->withQueryString();
        // $subjeklaporan = SubjekLaporan::paginate();
        return view('admin.pages.tentanglaporin.index', [
            'tentanglaporin' => $tentanglaporin
        ]);
    }

    // public function create(){
    //     return view('admin.pages.subjeklaporan.add');
    // }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|mimes:jpg,png,jpeg',
            'description' => 'required',
        ]);

        $tentanglaporin = new TentangLaporin();
        $tentanglaporin->fill($request->all());

        $path = Storage::putFile(
            'public/images/tentanglaporin',
            $request->file('image'),
        );
        $tentanglaporin->image = $path;
        $tentanglaporin->save();
        // TentangLaporin::create($request->all());
        return redirect()->back()->with([
            'success' => 'Data berhasil ditambahkan.'
        ]);
    }

    public function destroy($id){
        $tentanglaporin = TentangLaporin::find($id);
        $tentanglaporin ->delete();
        return redirect()->back()->with([
            'delete' => 'Data berhasil dihapus.']);
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'image' => 'mimes:jpg,png,jpeg',
            'description' => 'required',
        ]);

        $tentanglaporin = TentangLaporin::find($id);
        $tentanglaporin->fill($request->all());
        
        if($request->hasFile('image')){
            $path = Storage::putFile(
                'public/images/tentanglaporin',
                $request->file('image'),
            );
            $tentanglaporin->image = $path;
        }
        $tentanglaporin->save();
        return redirect()->back()->with([
            'update' => 'Data berhasil diubah.']);
    }
}
