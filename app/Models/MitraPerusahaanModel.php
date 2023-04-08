<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MitraPerusahaanModel extends Model
{
    use HasFactory;
    protected $table = 'mitra_perusahaan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
