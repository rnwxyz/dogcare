<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penyakits', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 10)->unique();
            $table->string('nama', 50);
            $table->string('sumber', 50);
            $table->timestamps();
        });

        DB::table('penyakits')->insert([
            ['created_at' => now(), 'updated_at' => now(), 'id' => 1, 'kode' => 'P1', 'nama' => 'Rabies', 'sumber' => 'Virus'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 2, 'kode' => 'P2', 'nama' => 'Hepatitis', 'sumber' => 'Virus'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 3, 'kode' => 'P3', 'nama' => 'Distemper', 'sumber' => 'Virus'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 4, 'kode' => 'P4', 'nama' => 'Canine Parvovirus', 'sumber' => 'Virus'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 5, 'kode' => 'P5', 'nama' => 'Papilomatosis', 'sumber' => 'Virus'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 6, 'kode' => 'P6', 'nama' => 'Herpesvirus', 'sumber' => 'Virus'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 7, 'kode' => 'P7', 'nama' => 'Leptospirosis', 'sumber' => 'Bakteri'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 8, 'kode' => 'P8', 'nama' => 'Dirofilaria immitis', 'sumber' => 'Bakteri'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 9, 'kode' => 'P9', 'nama' => 'Scabies', 'sumber' => 'Kutu'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 10, 'kode' => 'P10', 'nama' => 'Pruritus', 'sumber' => 'Bakteri'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyakits');
    }
};
