<?php

namespace App\Models\Cars;

use Illuminate\Database\Eloquent\Model;

class DriveType extends Model
{

    protected $table = 'drive_types';

    protected $fillable = [
        'slug',
        'title'
    ];
}
