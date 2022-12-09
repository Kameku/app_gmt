<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compliment extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'manifest',
        'client',
        'plate',
        'identity_card',
        'compliment_date',
        'payment_date',
        'observations',
    ];
}
