<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramKegiatan extends Model
{
    protected $table = 'program_kegiatan';

    protected $fillable = [
        'nama_program', 'bidang', 'wilayah', 'status', 'progres', 'keterangan',
    ];
}
