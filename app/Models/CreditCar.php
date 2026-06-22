<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditCar extends Model
{
    protected $fillable = [
        'name',
        'is_active',
    ];

    public function programs()
    {
        return $this->hasMany(CreditProgram::class);
    }
}