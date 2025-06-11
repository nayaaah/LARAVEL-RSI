<?php

namespace App\Http\Controllers;

USE App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        // akses model Jadwal
        $jadwal = Jadwal::all();  // select * from fakultas
        // dd($jadwal);
        return view('jadwal.index', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jadwal.create', compact('jadwal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi input form
        $input = $request->validate([
            'tahun_akademik' => 'required',
            'kode_smt' => 'required',
            'kelas' => 'required',
            'sesi_id' => 'required',
            'mata_kuliah_id' => 'required',
            'dosen_id' => 'required'
        ]);

        // simpan ke tabel fakultas
        Jadwal::create($input);

        // redirect ke route fakultas.index
        return redirect()->route('jadwal.index')
                         ->with('success', 'Jadwal berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal $jadwal)
    {
        //
    }
}