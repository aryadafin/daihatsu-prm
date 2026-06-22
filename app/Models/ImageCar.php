<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageCar extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
    'car_id',
    'image',
    'sort_order',];
    public function car()
{
    return $this->belongsTo(Car::class);
}
}
