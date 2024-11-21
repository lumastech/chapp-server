<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crime extends Model
{
    use HasFactory;

    protected $filable = [
        'name',
        'type',
        'phone',
        'area',
        'details',
        'status',
        'lat',
        'lng'
    ];
}
