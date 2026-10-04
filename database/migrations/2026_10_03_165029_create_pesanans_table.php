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
    // Dibuat mandiri tanpa foreign key/relasi sesuai syarat Pak Ravi
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nota_pesanan');
            $table->string('nama_bunga_dipesan');
            $table->integer('jumlah_beli');
            $table->integer('total_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
