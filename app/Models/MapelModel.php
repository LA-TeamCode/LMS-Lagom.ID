<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapelModel extends Model
{
    use HasFactory;
    protected $table = 'mata_pelajaran';
    protected $guarded = ['id'];
    public $timestamps = false;
}
