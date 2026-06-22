<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditProgram extends Model
{
    protected $fillable = [
        'credit_car_id',
        'leasing_id',
        'name',
        'otr_price',
        'is_active',
    ];

    public function creditCar()
    {
        return $this->belongsTo(CreditCar::class);
    }

    public function leasing()
    {
        return $this->belongsTo(Leasing::class);
    }

    public function installments()
    {
        return $this->hasMany(CreditInstallment::class);
    }
}