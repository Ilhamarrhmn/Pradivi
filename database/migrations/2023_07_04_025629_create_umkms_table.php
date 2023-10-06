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
            $table->string('namaumkm', 25);
            $table->string('namaproduk', 50);
            $table->integer('harga', 30);
            $table->string('kategori', 25);
            $table->integer('berat', 25);
            $table->string('fotoproduk');
            $table->text('deskripsi');
            $table->string('whatsapp', 50);
            $table->string('facebook', 50);
            $table->string('instagram', 50);
            $table->string('tokoonline', 50);
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
