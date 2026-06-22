<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CarFeature;
class CarFeature extends Model
{
    protected $fillable = [
        'car_id',
        'title',
        'description',
        'image',
        'sort_order',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}