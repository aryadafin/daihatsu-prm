<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leasing extends Model
{
    protected $fillable = [
        'name',
        'is_active',
    ];

    public function creditPrograms()
{
    return $this->hasMany(CreditProgram::class);
}
    
}