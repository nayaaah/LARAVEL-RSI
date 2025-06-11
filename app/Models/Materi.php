<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasUuids;
    protected $table ='Materi';

    protected $fillable = [
        'matakuliah_id', 
        'dosen_id',
        'pertemuan', 
        'pokok_bahasan',
        'file_materi', 
    ];

    public function matakuliah(){
        return $this->belongsTo(MataKuliah::class, 'matakuliah_id', 'id');
    }

    public function dosen_id(){
        return $this->belongsTo(User::class, 'dosen_id', 'id');
    }
}
