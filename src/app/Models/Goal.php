<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'final_date',
        'estimated_value',
        'current_value',
        'icon'
    ];
}
