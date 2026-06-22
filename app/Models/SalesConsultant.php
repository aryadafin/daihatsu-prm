<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesConsultant extends Model
{
    use SoftDeletes;

protected $fillable = [
    'branch_id',
    'name',
    'phone',
    'whatsapp',
    'email',
    'photo',
    'position',
    'instagram',
    'facebook',
    'tiktok',
    'is_active',
];
}
