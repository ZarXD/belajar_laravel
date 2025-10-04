<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    // Get data
    public function index() {
        $data = Ruangan::all();
        return view('ruangan.index', compact('data'));
    }

    // Store data
    public function store(Request $request) {
        Ruangan::create($request->only('namaRuangan', 'kapasitas'));
        return redirect()->back();
    }

    // Edit data
    public function edit($id) {
        $kls = Ruangan::findOrFail($id);
        return view('ruangan.edit', compact('kls'));
    }

    // Update data
    public function update(Request $request, $id) {
        $request->validate([
            'namaRuangan' => 'required',
            'kapasitas' => 'required',
        ]);

        $kls = Ruangan::findOrFail($id);
        $kls->update($request->only('namaRuangan', 'kapasitas'));

        return redirect()->route('ruangan.index')->with('success', 'Data berhasil diupdate!');
    }

    // Delete data
    public function destroy($id) {
        $kls = Ruangan::findOrFail($id);
        $kls->delete();

        return redirect()->route('ruangan.index')->with('success', 'Data berhasil dihapus!');
    }
}
