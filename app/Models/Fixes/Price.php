<?php

namespace App\Models\Fixes;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{

    protected $table = 'fix_prices';

    protected $fillable = [
        'category_id',
        'slug',
        'title',
        'description',
        'price',
        'is_published'
    ];

    protected $casts = [
        'is_published' => 'boolean'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getSelectTitleAttribute()
    {
        return $this->attributes['title'] . ' ' . $this->attributes['price'];
    }
}
