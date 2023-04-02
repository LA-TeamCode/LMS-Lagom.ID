<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurusanModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_jurusan';
    protected $table = 'jurusan';
    protected $guarded = ['id_jurusan'];
    public $timestamps = false;
}
