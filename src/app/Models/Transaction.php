<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_wallet',
        'id_type_transaction',
        'id_category',
        'id_recurrence',
        'name',
        'value',
        'automatic_payment',
        'observations'
    ];
}
