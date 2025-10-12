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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable(); // Optional user ID for the creator
            $table->string('judul'); //Agenda Rapat 
            $table->string('qrcode')->unique()->nullable();
            $table->string('tempat_kegiatan'); //Ruangan
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->integer('radius')->nullable();
            $table->date('tgl_kegiatan');
            $table->time('jam_mulai');
            $table->text('deskripsi_kegiatan'); //deskripsi rapat
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
