<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'name',
        'city',
        'address',
        'phone',
        'maps_url',
        'image',
        'is_active',
        'sort_order',
    ];
}