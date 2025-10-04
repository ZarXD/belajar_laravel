<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    // Get data
    public function index() {
        // $data = Mahasiswa::all();
        // return view('mahasiswa.index', compact('data'));

        $data = Mahasiswa::with('kelas')->get();
        $kelas = Kelas::all();
        return view('mahasiswa.index', compact('data', 'kelas'));
    }

    // Store data
    public function store(Request $request) {
        // Mahasiswa::create($request->only('nama', 'nim'));
        // return redirect()->back();

        $request->validate([
            'nim' => 'required|string|max:50|unique:mahasiswa,nim',
            'nama' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id'
        ]);

        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diupdate!');

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
