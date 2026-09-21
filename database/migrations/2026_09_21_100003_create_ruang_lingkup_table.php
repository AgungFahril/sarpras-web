<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ruang_lingkup', function (Blueprint $table) {
            $table->id();
            $table->string('icon', 10);   // emoji
            $table->string('label', 100); // boleh pakai <br> untuk 2 baris
            $table->integer('urutan')->default(0);
            $table->timestamps();
        });

        DB::table('ruang_lingkup')->insert([
            ['icon' => '🛣️', 'label' => 'Jalan &<br>Jembatan', 'urutan' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['icon' => '🌿', 'label' => 'Lingkungan<br>Hidup', 'urutan' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['icon' => '🌳', 'label' => 'Kehutanan', 'urutan' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['icon' => '⚡', 'label' => 'ESDM', 'urutan' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['icon' => '💧', 'label' => 'Sumber Daya<br>Air', 'urutan' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['icon' => '🚌', 'label' => 'Transportasi', 'urutan' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['icon' => '🏢', 'label' => 'Prasarana<br>Lainnya', 'urutan' => 7, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('ruang_lingkup');
    }
};
