<?php

use App\Models\Cars\Brand;
use App\Models\Cars\BrandModel;
use App\Models\Cars\DriveType;
use App\Models\Cars\FuelType;
use App\Models\Cars\GearboxType;
use App\Models\Customers\Customer;
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
        Schema::create('customer_cars', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customer::class, 'customer_id');
            $table->foreignIdFor(Brand::class, 'brand_id');
            $table->foreignIdFor(BrandModel::class, 'model_id');
            $table->foreignIdFor(FuelType::class, 'fuel_type_id')->nullable();
            $table->foreignIdFor(DriveType::class, 'drive_type_id')->nullable();
            $table->foreignIdFor(GearboxType::class, 'gearbox_type_id')->nullable();
            $table->unsignedInteger('engine_capacity')->nullable();
            $table->unsignedInteger('year')->nullable();
            $table->string('vin_number')->nullable();
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
        Schema::dropIfExists('customer_cars');
    }
};
