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
        Schema::create('gejalas', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 4)->unique();
            $table->string('deskripsi');
            $table->timestamps();
        });

        DB::table('gejalas')->insert([
            ['id' => 1,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G1', 'deskripsi' => 'bersembunyi di tempat sunyi'],
            ['id' => 2,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G2', 'deskripsi' => 'berlari kian kemari atau terlihat gelisah'],
            ['id' => 3,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G3', 'deskripsi' => 'cepat marah'],
            ['id' => 4,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G4', 'deskripsi' => 'mengeluarkan air liur'],
            ['id' => 5,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G5', 'deskripsi' => 'menolak makanan normal'],
            ['id' => 6,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G6', 'deskripsi' => 'takut terhadap air'],
            ['id' => 7,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G7', 'deskripsi' => 'terjadi pembengkakan hati'],
            ['id' => 8,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G8', 'deskripsi' => 'muntah-muntah'],
            ['id' => 9,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G9', 'deskripsi' => 'terjadi dehidrasi yang tinggi'],
            ['id' => 10,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G10', 'deskripsi' => 'demam'],
            ['id' => 11,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G11', 'deskripsi' => 'batuk'],
            ['id' => 12,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G12', 'deskripsi' => 'bagian perut melepuh dan bernanah'],
            ['id' => 13,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G13', 'deskripsi' => 'keluar cairan dari mata'],
            ['id' => 14,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G14', 'deskripsi' => 'sesak nafas'],
            ['id' => 15,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G15', 'deskripsi' => 'keluar cairan dari hidung'],
            ['id' => 16,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G16', 'deskripsi' => 'terjadi kelesuan'],
            ['id' => 17,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G17', 'deskripsi' => 'hilang nafsu makan'],
            ['id' => 18,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G18', 'deskripsi' => 'kotoran ada darah'],
            ['id' => 19,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G19', 'deskripsi' => 'anak anjing tidak mau menyusui'],
            ['id' => 20,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G20', 'deskripsi' => 'kotoran mengeluarkan bau khas'],
            ['id' => 21,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G21', 'deskripsi' => 'sering meraung-raung'],
            ['id' => 22,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G22', 'deskripsi' => 'adanya kutil di bagian mulut'],
            ['id' => 23,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G23', 'deskripsi' => 'nafas anjing bau'],
            ['id' => 24,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G24', 'deskripsi' => 'anjing sering menggaruk-garuk'],
            ['id' => 25,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G25', 'deskripsi' => 'pada permukaan kulit akan terlihat kutu berkelompok'],
            ['id' => 26,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G26', 'deskripsi' => 'kerontokan bulu anjing'],
            ['id' => 27,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G27', 'deskripsi' => 'kulit terlihat berkerak'],
            ['id' => 28,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G28', 'deskripsi' => 'sering menggigit daerah yang iritasi'],
            ['id' => 29,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G29', 'deskripsi' => 'sering menggeleng-gelengkan kepala'],
            ['id' => 30,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G30', 'deskripsi' => 'menggigil'],
            ['id' => 31,'created_at' => now(), 'updated_at' => now(), 'kode' => 'G31', 'deskripsi' => 'suhu badan tidak stabil'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gejalas');
    }
};
