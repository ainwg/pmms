<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    protected $table = 'attendance';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'student_id', 'image', ];
}
