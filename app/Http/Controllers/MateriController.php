<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        // akses model materi
        $materi = Materi::all(); //select * from materi
        // dd($materi);
        return view('materi.index', compact('materi'));
    }

    public function create()
    {
        return view('materi.create');
    }

    public function store(Request $request)
    {
        //validasi input form
        $input = $request->validate([
            'matakuliah_id' => 'required',
            'dosen_id' => 'required',
            'pertemuan' => 'required',
            'pokok_bahasan' => 'required',
            'file_materi' => 'required',
        ]);

        //simpan ke tabel materi
        Materi::create($input);

        //redirect ke route materi.index
        return redirect()->route('materi.index')
                         ->with('success', 'Materi berhasil disimpan');
    }

    public function show(Materi $materi)
    {

    }

    public function edit(Materi $materi)
    {

    }

    public function update(Request $request, Materi $materi)
    {

    }

    public function destroy(Materi $materi)
    {
        
    }
}
