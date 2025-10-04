<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    // Get data
    public function index() {
        $data = Dosen::all();
        return view('dosen.index', compact('data'));
    }

    // Store data
    public function store(Request $request) {
        Dosen::create($request->only('nid', 'nama'));
        return redirect()->back();
    }

    // Edit data
    public function edit($id) {
        $dsn = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dsn'));
    }

    // Update data
    public function update(Request $request, $id) {
        $request->validate([
            'nid' => 'required',
            'nama' => 'required',
        ]);

        $dsn = Dosen::findOrFail($id);
        $dsn->update($request->only('nid', 'nama'));

        return redirect()->route('dosen.index')->with('success', 'Data berhasil diupdate!');
    }

    // Delete data
    public function destroy($id) {
        $dsn = Dosen::findOrFail($id);
        $dsn->delete();

        return redirect()->route('dosen.index')->with('success', 'Data berhasil dihapus!');
    }
}
