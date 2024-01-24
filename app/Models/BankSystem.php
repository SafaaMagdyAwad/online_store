<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankSystem extends Model
{
    use HasFactory;
    protected $fillable = [
        'card_number',
        'client_name',
        'password',
        'pranch',
        'balance',
        
    ];
}
