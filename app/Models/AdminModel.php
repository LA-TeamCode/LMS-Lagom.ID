<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminModel extends Authenticatable
{
    use HasFactory;
    protected $table = 'admin_users';
    protected $guarded = ['id'];
}
