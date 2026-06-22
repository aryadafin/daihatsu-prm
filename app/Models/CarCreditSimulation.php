<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarCreditSimulation extends Model
{
    protected $fillable = [
        'car_id',
        'name',
        'otr_price',
        'is_active',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}