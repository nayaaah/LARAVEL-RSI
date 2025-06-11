<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('materis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('matakuliah_id');
            $table->unsignedBigInteger('dosen_id');
            $table->integer('pertemuan');
            $table->string('pokok_bahasan');
            $table->string('file_materi');
            $table->foreign('matakuliah_id')->references('id')->on('mata_kuliah')->onDelete('cascade');
            $table->foreign('dosen_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};
