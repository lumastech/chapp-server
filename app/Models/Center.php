<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'type',
        'lat',
        'lng',
        'status',
        'address',
        'coordinates',
    ];

    function user() {
        return belongsTo(User::class, 'user_id');
    }

    public function images() {
        return $this->hasMany(Image::class, 'ref_id')->where('type', 'center');
    }
    public function files() {
        return $this->hasMany(Image::class, 'ref_id')->where('type', 'center');
    }
}
