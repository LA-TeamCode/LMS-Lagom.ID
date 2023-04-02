<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataEntryMapel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'data_entry_model';
    protected $guarded  = ['id'];
    public $timestamps = false;
}
