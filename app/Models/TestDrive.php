<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestDrive extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
    'car_id',
    'sales_consultant_id',
    'name',
    'phone',
    'email',
    'booking_date',
    'booking_time',
    'status',
    ];
}