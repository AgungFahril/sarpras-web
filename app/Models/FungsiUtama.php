<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FungsiUtama extends Model
{
    protected $table = 'fungsi_utama';

    protected $fillable = ['icon', 'judul', 'deskripsi', 'warna', 'urutan'];
}
