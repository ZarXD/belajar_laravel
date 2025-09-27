<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index() {
        $data = Dosen::all();
        return view('dosen.index', compact('data'));
    }

    public function store(Request $request) {
        Dosen::create($request->only('nid', 'nama'));
        return redirect()->back();
    }
}
