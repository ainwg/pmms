<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'student_id','course_name', 'phone_num', 'email'];
}
