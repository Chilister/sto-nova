<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Customers\Customer::class, 'customer_id');
            $table->foreignIdFor(\App\Models\Customers\Car::class, 'car_id');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fixes');
    }
};
