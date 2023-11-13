<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotion extends Model
{
    protected $table = 'promotion';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'description', 'time_start', 'time_end'];
}
