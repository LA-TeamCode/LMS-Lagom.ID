<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffGuruModel extends Model
{
    use HasFactory;
    protected $table = 'staff_guru';
    protected $guarded = ['id'];
    public $timestamps = false;
}
