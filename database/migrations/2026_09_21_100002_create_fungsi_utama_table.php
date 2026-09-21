<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fungsi_utama', function (Blueprint $table) {
            $table->id();
            $table->string('icon', 10);       // emoji, misal 👨‍💼
            $table->string('judul', 100);
            $table->text('deskripsi');
            $table->string('warna', 20)->default('blue'); // blue-card, green-card, orange-card, purple-card
            $table->integer('urutan')->default(0);
            $table->timestamps();
        });

        DB::table('fungsi_utama')->insert([
            [
                'icon' => '👨‍💼', 'judul' => 'KOORDINASI', 'warna' => 'blue',
                'deskripsi' => 'Mengoordinasikan perencanaan, pelaksanaan, dan penyelesaian permasalahan sarana prasarana dengan OPD dan instansi terkait di wilayah kerja.',
                'urutan' => 1, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'icon' => '📊', 'judul' => 'FASILITASI', 'warna' => 'green',
                'deskripsi' => 'Memfasilitasi program/kegiatan pembangunan sarana prasarana agar berjalan efektif, tepat sasaran, dan sesuai kebutuhan wilayah.',
                'urutan' => 2, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'icon' => '👷', 'judul' => 'PEMANTAUAN', 'warna' => 'orange',
                'deskripsi' => 'Melakukan monitoring lapangan terhadap progres fisik, keuangan, dan kendala pelaksanaan pembangunan sarana prasarana.',
                'urutan' => 3, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'icon' => '📈', 'judul' => 'EVALUASI', 'warna' => 'purple',
                'deskripsi' => 'Mengevaluasi hasil pelaksanaan program/kegiatan sebagai dasar rekomendasi perbaikan dan pengambilan keputusan.',
                'urutan' => 4, 'created_at' => now(), 'updated_at' => now(),
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('fungsi_utama');
    }
};
