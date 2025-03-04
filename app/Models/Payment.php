<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'cardholder_name',
        'card_number',
        'security_code',
        'expiry_date',
        'cvv',
        'billing_address',
        'note',
        'card_type',
    ];
}