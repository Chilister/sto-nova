<?php

namespace App\Models\Customers;

use App\Models\Fixes\Fix;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $table = 'customers';

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number'
    ];

    public function getSelectTitleAttribute()
    {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name']. ' ' . $this->attributes['phone_number'];
    }
    public function getFullNameAttribute()
    {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }

    public function fixes()
    {
        return $this->hasMany(Fix::class, 'customer_id');
    }
}
