<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request){
        $keyword = $request->query('keyword');
        $user = User::when($keyword, function($query, $keyword){
             return $query->where('name', 'like', '%' .$keyword.'%');
        })
        ->paginate(10)
        ->withQueryString();
        $role = Role::all();
        return view('admin.pages.user.index', [
            'user' => $user,
            'role' => $role
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'tlp' => 'required|max:20|unique:users',
            'role_id' => 'required',
            'password' => 'required|min:8|max:255',
        ]);
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect()->back()->with([
            'success' => 'Data berhasil ditambahkan.'
        ]);
    }
}
