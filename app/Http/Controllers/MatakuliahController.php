<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahController extends Controller
{
    // Get data
    public function index() {
        $data = Matakuliah::all();
        return view('matakuliah.index', compact('data'));
    }

    // Store data
    public function store(Request $request) {
        Matakuliah::create($request->only('namaMatkul', 'deskripsi'));
        return redirect()->back();
    }

    // Edit data
    public function edit($id) {
        $mk = Matakuliah::findOrFail($id);
        return view('matakuliah.edit', compact('mk'));
    }

    // Update data
    public function update(Request $request, $id) {
        $request->validate([
            'namaMatkul' => 'required',
            'deskripsi' => 'required',
        ]);

        $mk = Matakuliah::findOrFail($id);
        $mk->update($request->only('namaMatkul', 'deskripsi'));

        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil diupdate!');
    }

    // Delete data
    public function destroy($id) {
        $mk = Matakuliah::findOrFail($id);
        $mk->delete();

        return redirect()->route('matakuliah.index')->with('success', 'Data berhasil dihapus!');
    }
}
