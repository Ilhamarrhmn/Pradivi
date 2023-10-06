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
            $table->string('namaacara', 50);
            $table->string('jenisacara', 25);
            $table->dateTime('tglmulai');
            $table->dateTime('tglselesai');
            $table->string('tempat', 25);
            $table->string('pelaksana', 25);
            $table->string('fotoproduk', 30);
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
