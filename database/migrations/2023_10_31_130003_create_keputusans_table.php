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
        Schema::create('keputusans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_gejala')->foreign('id_gejala')->references('id')->on('gejalas')->onDelete('cascade');
            $table->bigInteger('id_penyakit')->foreign('id_penyakit')->references('id')->on('penyakits')->onDelete('cascade');;
            $table->decimal('nilai_cf', 4, 2);
            $table->timestamps();
        });

        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(1, 1, 1, 0.8)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(2, 2, 1, 0.8)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(3, 3, 1, 0.9)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(4, 4, 1, 0.9)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(5, 5, 1, 0.7)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(6, 6, 1, 0.9)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(7, 7, 2, 0.9)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(8, 8, 2, 0.3)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(9, 9, 2, 0.4)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(10, 10, 2, 0.4)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(11, 8, 3, 0.3)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(12, 10, 3, 0.4)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(13, 11, 3, 0.6)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(14, 12, 3, 0.8)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(15, 13, 3, 0.8)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(16, 14, 3, 0.8)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(17, 8, 4, 0.3)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(18, 9, 4, 0.4)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(19, 10, 4, 0.4)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(20, 15, 4, 0.2)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(21, 17, 4, 0.4)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(22, 18, 4, 0.0)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(23, 19, 4, 0.8)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(24, 8, 5, 0.3)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(25, 15, 5, 0.2)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(26, 20, 5, 0.8)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(27, 21, 5, 0.8)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(28, 22, 6, 0.9)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(29, 23, 6, 0.9)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(30, 8, 7, 0.3)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(31, 9, 7, 0.4)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(32, 10, 7, 0.4)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(33, 15, 7, 0.2)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(34, 30, 7, 0.8)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(35, 11, 8, 0.3)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(36, 15, 8, 0.2)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(37, 16, 8, 0.4)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(38, 17, 8, 0.4)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(39, 31, 8, 0.8)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(40, 24, 9, 0.4)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(41, 25, 9, 0.8)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(42, 26, 9, 0.8)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(43, 27, 9, 0.8)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(44, 24, 10, 0.4)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(45, 28, 10, 0.7)");
        DB::statement("INSERT INTO keputusans (id, id_gejala, id_penyakit, nilai_cf) VALUES(46, 29, 10, 0.7)");
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keputusans');
    }
};
