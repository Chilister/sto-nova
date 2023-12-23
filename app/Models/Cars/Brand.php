<?php

namespace App\Models\Cars;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    protected $table = 'brands';

    protected $fillable = [
        'slug',
        'title',
        'priority'
    ];
}
