<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    use HasFactory;
    protected $table = 'inventory';
    protected $primaryKey = 'inventory_id';
    protected $fillable = ['inventory_image', 'inventory_name', 'inventory_price', 'inventory_quantity'];
}
