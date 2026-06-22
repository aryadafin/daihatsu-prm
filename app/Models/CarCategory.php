<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarCategory extends Model
{
    use SoftDeletes;

protected $fillable = [
    'name',
    'slug',
    'icon',
];
public function cars()
{
    return $this->hasMany(Car::class);
}
}

