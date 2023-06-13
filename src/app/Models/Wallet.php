<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'account_type',
        'institution',
        'name',
        'description',
        'current_value',
        'favorite',
        'ignore_on_final_value',
        'color'
    ];
}
