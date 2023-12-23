<?php

namespace App\Models\Calendar;

use App\Models\Customers\Car;
use App\Models\Customers\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';

    protected $fillable = [
        'phone_number',
        'car_id',
        'reserve_begin',
        'reserve_end',
        'description',
    ];

    protected $dates = [
        'reserve_begin',
        'reserve_end'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'phone_number', 'phone_number');
    }
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}
