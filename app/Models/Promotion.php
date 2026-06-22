<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use SoftDeletes;

protected $fillable = [
    'title',
    'slug',
    'thumbnail',
    'description',
    'start_date',
    'end_date',
    'is_active',
];
}
