<?php

namespace App\Models\Cars;

use Illuminate\Database\Eloquent\Model;

class FuelType extends Model
{
    protected $table = 'fuel_types';

    protected $fillable = [
        'slug',
        'title'
    ];
}
