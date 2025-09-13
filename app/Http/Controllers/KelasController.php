<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;


class KelasController extends Controller
{
    public function index() {
        $data = Kelas::all();
        return view('kelas.index', compact('data'));
    }

    public function store(Request $request) {
        Kelas::create($request->only('namaKelas', 'kapasitas'));
        return redirect()->back();
    }
}
