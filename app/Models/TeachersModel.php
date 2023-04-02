<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachersModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_teacher';
    protected $table = 'teachers';
    protected $guarded = ['id_teacher'];
    public $timestamps = false;
}
