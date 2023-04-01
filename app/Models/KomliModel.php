<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomliModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_komli';
    protected $table = 'komli_data';
    protected $guarded = ['id_komli'];
    public $timestamps = false;
}
