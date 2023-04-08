<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOrangtuaSiswaModel extends Model
{
    use HasFactory;
    protected $table = 'data_orangtua_siswa';
    protected $guarded = ['id'];
    public $timestamps = false;
}
