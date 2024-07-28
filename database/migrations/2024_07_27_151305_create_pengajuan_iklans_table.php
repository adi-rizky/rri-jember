<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengajuan_iklans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nama_lengkap');
            $table->string('nama_usaha');
            $table->string('nomor_telepon');
            $table->string('paket_iklan'); 
            $table->string('kategori_iklan'); 
            $table->string('harga');
            $table->string('unggah_materi')->nullable();
            $table->string('bukti_pembayaran')->nullable();
            $table->text('catatan_tambahan')->nullable();
            $table->enum('status', ['belum di proses', 'sedang di proses', 'sudah selesai'])->default('belum di proses');
            $table->timestamps();
        });
    }

    // protected $attributes = [
    //     'status' => 'belum bayar', // Nilai default untuk status
    // ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_iklans');
    }
};
