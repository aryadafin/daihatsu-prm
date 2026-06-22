<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditInstallment extends Model
{
    protected $fillable = [
        'credit_program_id',
        'dp_percent',
        'tenor',
        'installment',
    ];

    public function creditProgram()
    {
        return $this->belongsTo(CreditProgram::class);
    }
}