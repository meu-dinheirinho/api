<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_wallet',
        'alias',
        'limit_value',
        'last_four_digits',
        'closing_date',
        'invoice_date',
        'favorite'
    ];
}
