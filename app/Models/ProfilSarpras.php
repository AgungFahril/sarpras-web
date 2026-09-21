<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilSarpras extends Model
{
    protected $table = 'profil_sarpras';

    protected $fillable = ['profil_singkat', 'tujuan'];
}
