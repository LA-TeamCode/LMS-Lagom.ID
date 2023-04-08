<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkstrakulikulerModel extends Model
{
    use HasFactory;
    protected $table = 'data_ekstrakulikuler';
    protected $guarded = ['id'];
    public $timestamps = false;
}
