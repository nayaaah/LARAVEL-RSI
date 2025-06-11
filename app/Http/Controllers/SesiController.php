<?php

namespace App\Http\Controllers;

use App\Models\Sesi;
use Illuminate\Http\Request;

class SesiController extends Controller
{
    public function index()
    {
        // akses model Sesi
        $sesi = Sesi::all();  // select * from sesi
        // dd($sesi);
        return view('sesi.index', compact('sesi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sesi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi input form
        $input = $request->validate([
            'id' => 'required|unique:sesi',
            'nama' => 'required',
        ]);

        // simpan ke tabel sesi
        Sesi::create($input);

        // redirect ke route sesi.index
        return redirect()->route('sesi.index')
                         ->with('success', 'Sesi berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sesi $sesi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sesi $sesi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sesi $sesi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sesi $sesi)
    {
        //
    }
}