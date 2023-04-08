<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBeasiswaSiswaModel extends Model
{
    use HasFactory;
    protected $table = 'data_beasiswa_siswa';
    protected $guarded = ['id'];
    public $timestamps = false;
}
