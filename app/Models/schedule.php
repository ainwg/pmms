<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $table = 'schedule';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'student_id', 'day', 'time', 'time_id'];
}
