<?php

namespace App\Models\Cars;

use Illuminate\Database\Eloquent\Model;

class GearboxType extends Model
{

    protected $table = 'gearbox_types';

    protected $fillable = [
        'slug',
        'title'
    ];
}
