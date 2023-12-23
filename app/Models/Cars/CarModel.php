<?php

namespace App\Models\Cars;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{

    protected $table = 'models';

    protected $fillable = [
        'brand_id',
        'slug',
        'title',
        'priority'
    ];

    public function scopeByBrand(Builder $query, $brand)
    {
        return $query->where('brand_id', $brand);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
