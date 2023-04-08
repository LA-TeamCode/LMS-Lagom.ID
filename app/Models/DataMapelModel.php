<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMapelModel extends Model
{
    use HasFactory;
    protected $table = 'data_mapel';
    protected $guarded = ['id'];
    public $timestamps = false;
}
