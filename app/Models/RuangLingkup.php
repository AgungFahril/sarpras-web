<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RuangLingkup extends Model
{
    protected $table = 'ruang_lingkup';

    protected $fillable = ['icon', 'label', 'urutan'];
}
