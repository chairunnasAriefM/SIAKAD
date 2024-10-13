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

        Schema::create('dosen', function (Blueprint $table) {
            $table->string('nip', 10)->primary();
            $table->string('nama_dosen', 35);
            $table->char('jenis_kelamin', 1);
            $table->string('alamat', 100);
            $table->string('email', 30);
            $table->string('telepon', 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
