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
        Schema::create('riwayat', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('id_penyakit')->foreign('id_penyakit')->references('id')->on('penyakits')->onDelete('cascade');
            $table->string('nama_anjing');
            $table->integer('persentase');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat');
    }
};
