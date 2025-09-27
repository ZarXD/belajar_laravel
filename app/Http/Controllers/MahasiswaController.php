<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    // Get data
    public function index() {
        $data = Mahasiswa::all();
        return view('mahasiswa.index', compact('data'));
    }

    // Store data
    public function store(Request $request) {
        Mahasiswa::create($request->only('nama', 'nim'));
        return redirect()->back();
    }

    // Edit data
    public function edit($id) {
        $mhs = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mhs'));
    }

    // Update data
    public function update(Request $request, $id) {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required'
        ]);

        $mhs = Mahasiswa::findOrFail($id);
        $mhs->update($request->only('nim', 'nama'));

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diupdate!');
    }

    // Delete data
    public function destroy($id) {
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus!');
    }
}
