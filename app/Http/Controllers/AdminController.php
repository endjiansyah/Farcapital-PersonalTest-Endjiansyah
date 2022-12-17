<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view(
            'admin.list',
            ['admin' => Admin::all()]  // tampilkan semua dari tabel admin (Models admin)

        );
    }

    public function show(Admin $admin)
    {
        return view('admin.show', ['admin' => $admin]);
    }

    public function create() //untuk halaman tambah data admin
    {
        return view('admin.create');
    }

    public function store(Request $request) //store data yg diinput dari create()
    {

        $validasi = [
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];
        $payload = $request->validate($validasi);
        Admin::create($payload);
        return redirect()->route('admin.list');
    }

    public function edit(Admin $admin)
    {
        return view('admin.edit', ['admin' => $admin]);
    }

    public function update(Request $request, Admin $admin)
    {
        $admin->fill($request->all());
        $admin->save();
        return redirect()->route('admin.list');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();
        return  redirect()->route('admin.list');
    }
}
