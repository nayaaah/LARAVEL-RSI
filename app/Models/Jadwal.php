<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasUuids;
    protected $table ='Jadwal';

    protected $fillable = [
        'tahun_akademik',
        'kode_smt',
        'kelas',
        'sesi_id',
        'matakuliah_id',
        'dosen_id'
    ];

    public function sesi(){
        return $this->belongsTo(Sesi::class, 'sesi_id', 'id');
    }

    public function mata_kuliah(){
        return $this->belongsTo(Mata_Kuliah::class, 'matakuliah_id', 'id');
    }

    public function dosen(){
        return $this->belongsTo(User::class, 'dosen_id', 'id');
    }
}