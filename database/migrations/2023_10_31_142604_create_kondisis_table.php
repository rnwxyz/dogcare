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
        Schema::create('kondisis', function (Blueprint $table) {
            $table->id();
            $table->string('kondisi');
            $table->decimal('nilai', 3, 2); // The 'decimal' column with 1 decimal place
            $table->timestamps();
        });

        // Insert data
        DB::table('kondisis')->insert([
            ['id' => 1, 'created_at' => now(), 'updated_at' => now(),'kondisi' => 'Tidak Tahu', 'nilai' => 0.0],
            ['id' => 2, 'created_at' => now(), 'updated_at' => now(),'kondisi' => 'Tidak Yakin', 'nilai' => 0.2],
            ['id' => 3, 'created_at' => now(), 'updated_at' => now(),'kondisi' => 'Mungkin', 'nilai' => 0.4],
            ['id' => 4, 'created_at' => now(), 'updated_at' => now(),'kondisi' => 'Kemungkinan Besar', 'nilai' => 0.6],
            ['id' => 5, 'created_at' => now(), 'updated_at' => now(),'kondisi' => 'Hampir Pasti', 'nilai' => 0.8],
            ['id' => 6, 'created_at' => now(), 'updated_at' => now(),'kondisi' => 'Pasti', 'nilai' => 1.0],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kondisis');
    }
};
