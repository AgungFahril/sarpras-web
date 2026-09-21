<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('program_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_program', 150);
            $table->string('bidang', 50);   // Jalan & Jembatan, Lingkungan Hidup, dst
            $table->string('wilayah', 50);  // Kabupaten/Kota
            $table->enum('status', ['Perencanaan', 'Berjalan', 'Selesai'])->default('Perencanaan');
            $table->unsignedTinyInteger('progres')->default(0); // 0-100
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });

        // Data dummy
        DB::table('program_kegiatan')->insert([
            [
                'nama_program' => 'Pembangunan Jembatan Sungai Brantas',
                'bidang' => 'Jalan & Jembatan',
                'wilayah' => 'Kabupaten Malang',
                'status' => 'Berjalan',
                'progres' => 65,
                'keterangan' => 'Progres sesuai jadwal, menunggu pengecoran tahap akhir.',
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'nama_program' => 'Normalisasi Saluran Irigasi',
                'bidang' => 'Sumber Daya Air',
                'wilayah' => 'Kabupaten Pasuruan',
                'status' => 'Berjalan',
                'progres' => 40,
                'keterangan' => 'Terkendala cuaca, perlu koordinasi ulang jadwal.',
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'nama_program' => 'Rehabilitasi Hutan Lindung',
                'bidang' => 'Kehutanan',
                'wilayah' => 'Kota Batu',
                'status' => 'Perencanaan',
                'progres' => 10,
                'keterangan' => 'Menunggu persetujuan anggaran dari provinsi.',
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'nama_program' => 'Pemasangan PJU Tenaga Surya',
                'bidang' => 'ESDM',
                'wilayah' => 'Kota Pasuruan',
                'status' => 'Selesai',
                'progres' => 100,
                'keterangan' => 'Sudah serah terima ke pemerintah daerah.',
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'nama_program' => 'Peningkatan Jalur Angkutan Umum',
                'bidang' => 'Transportasi',
                'wilayah' => 'Kota Malang',
                'status' => 'Berjalan',
                'progres' => 55,
                'keterangan' => null,
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'nama_program' => 'Penghijauan Kawasan Perkotaan',
                'bidang' => 'Lingkungan Hidup',
                'wilayah' => 'Kabupaten Malang',
                'status' => 'Selesai',
                'progres' => 100,
                'keterangan' => 'Ditanam 500 pohon di 5 titik.',
                'created_at' => now(), 'updated_at' => now(),
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('program_kegiatan');
    }
};
