<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoAkhirSiswaModel extends Model
{
    use HasFactory;

    protected $table = 'foto_akhir_siswa';
    protected $guarded = ['id'];
    public $timestamps = false;
}
