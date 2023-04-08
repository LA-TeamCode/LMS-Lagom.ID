<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPrestasiSiswaModel extends Model
{
    use HasFactory;
    protected $table = 'data_prestasi_siswa';
    protected $guarded = ['id'];
    public $timestamps = false;
}
