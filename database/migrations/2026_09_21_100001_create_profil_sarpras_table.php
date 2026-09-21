<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profil_sarpras', function (Blueprint $table) {
            $table->id();
            $table->text('profil_singkat');
            $table->text('tujuan');
            $table->timestamps();
        });

        // Isi 1 baris default supaya halaman tidak kosong sebelum diedit admin
        DB::table('profil_sarpras')->insert([
            'profil_singkat' => 'Sub Bidang Sarana dan Prasarana I merupakan bagian dari Badan Koordinasi Wilayah (Bakorwil) III Malang, Pemerintah Provinsi Jawa Timur, yang bertugas mengoordinasikan, memfasilitasi, memantau, dan mengevaluasi pelaksanaan pembangunan sarana prasarana di 7 Kabupaten/Kota wilayah kerja: Kota Malang, Kabupaten Malang, Kota Pasuruan, Kabupaten Pasuruan, Tuban, Lamongan, Gresik, dan Bangkalan.',
            'tujuan' => 'Mewujudkan koordinasi yang efektif, fasilitasi yang responsif, pemantauan yang akurat, dan evaluasi yang objektif untuk pembangunan sarana prasarana yang berkualitas dan berkelanjutan di wilayah kerja Bakorwil III Malang.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('profil_sarpras');
    }
};
