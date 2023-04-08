<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswaPklModel extends Model
{
    use HasFactory;
    protected $table = 'data_siswa_pkl';
    protected $guarded = ['id'];
    public $timestamps = false;
}
