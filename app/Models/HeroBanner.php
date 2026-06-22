<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class HeroBanner extends Model
{
    protected $fillable = [
        'title',
        'desktop_image',
        'mobile_image',
        'sort_order',
        'button_link',
        'is_active',
    ];
}