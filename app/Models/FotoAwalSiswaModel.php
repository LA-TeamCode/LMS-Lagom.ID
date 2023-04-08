<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoAwalSiswaModel extends Model
{
    use HasFactory;
    protected $table = 'foto_awal_siswa';
    protected $guarded = ['id'];
    public $timestamps = false;
}
