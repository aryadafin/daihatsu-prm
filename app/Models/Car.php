<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Filament\Resources\Cars\RelationManagers\FeaturesRelationManager;
use App\Models\CarFeature;
use App\Models\CarCreditSimulation;

class Car extends Model
{
    use SoftDeletes;

    protected $fillable = [
    'car_category_id',
    
    'name',
    'slug',
    'price',
    'thumbnail',
    'hero_image',
    'youtube_url',
    'description',
    'specification',
    'engine',
    'fuel_type',
    'transmission',
    'seat_capacity',
    'sort_order',
    'is_active',
    'meta_title',
    'meta_description',
];

   public function category()
{
    return $this->belongsTo(CarCategory::class, 'car_category_id');
}

    public function images()
    {
        return $this->hasMany(ImageCar::class);
    }
    public function getRouteKeyName(): string
{
    return 'slug';
}
public function features()
{
    return $this->hasMany(CarFeature::class)
        ->orderBy('sort_order');
}
public function creditPrograms()
{
    return $this->hasMany(CreditProgram::class);
}
public function creditSimulations()
{
    return $this->hasMany(CarCreditSimulation::class);
}

}