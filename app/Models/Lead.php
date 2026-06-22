<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use SoftDeletes;

protected $fillable = [
    'car_id',
    'sales_consultant_id',
    'name',
    'phone',
    'email',
    'city',
    'message',
    'source',
    'status',
];
}
