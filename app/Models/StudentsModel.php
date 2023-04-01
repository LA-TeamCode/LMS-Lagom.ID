<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_student';
    protected $table = 'data_students';
    protected $guarded = ['id_student'];
    public $timestamps = false;
}
