<?php

namespace App\Http\Controllers;

use App\Models\Pendonor;
use Illuminate\Http\Request;

class pendonorController extends Controller
{
    //
    public function index()
    {
        return view(
            'pendonor.list',
            ['pendonor' => Pendonor::all()]  // tampilkan semua dari tabel pendonor (Models Pendonor)

        );
    }

    public function show(Pendonor $pendonor)
    {
        return view('pendonor.show', ['pendonor' => $pendonor]);
    }

    public function create() //untuk halaman tambah data pendonor
    {
        return view('pendonor.create');
    }

    public function store(Request $request) //store data yg diinput dari create()
    {

        $validasi = [
            'nama' => 'required',
            'gender' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ];
        $payload = $request->validate($validasi);
        Pendonor::create($payload);
        return redirect()->route('pendonor.list');
    }

    public function kelayakan(Request $request)
    {
        # code...
    }

    public function edit(Pendonor $pendonor)
    {
        return view('pendonor.edit', ['pendonor' => $pendonor]);
    }

    public function update(Request $request, Pendonor $pendonor)
    {
        $validasi = [
            'nama' => 'required',
            'gender' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ];
        $payload = $request->validate($validasi);
        $pendonor->update($payload);
        return redirect()->route('pendonor.list');
    }

    public function destroy(Pendonor $pendonor)
    {
        $pendonor->delete();
        return  redirect()->route('pendonor.list');
    }
}
