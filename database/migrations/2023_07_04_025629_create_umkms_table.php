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
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('namaumkm');
            $table->string('namaproduk');
            $table->integer('harga');
            $table->string('kategori');
            $table->integer('berat');
            $table->string('fotoproduk');
            $table->text('deskripsi');
            $table->string('whatsapp');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('tokoonline');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
