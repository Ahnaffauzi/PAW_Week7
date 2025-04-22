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
        Schema::create('galaxies', function (Blueprint $table) {
            $table->id();
            $table->string('nama_galaksi');
            $table->string('nama_blackhole');
            $table->bigInteger('jumlah_bintang');
            $table->float('jarak_dari_bumi');
            $table->string('tipe_galaksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galaxies');
    }
};
