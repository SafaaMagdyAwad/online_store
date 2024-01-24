<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
        'num_parts',
        'total_price',
        'user_name',
        'product_name',
        'prand',
    ];
}
