<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    use HasFactory;
    protected $table = 'purchase';
    protected $primaryKey = 'purchase_id';
    protected $fillable = ['inventory_id', 'purchase_quantity', 'transaction_id'];
}
