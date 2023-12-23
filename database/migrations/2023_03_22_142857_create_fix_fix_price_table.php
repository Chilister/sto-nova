<?php

use App\Models\Fixes\Fix;
use App\Models\Fixes\Price;
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
        Schema::create('fix_fix_price', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Fix::class, 'fix_id');
            $table->foreignIdFor(Price::class, 'fix_price_id');
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
        Schema::dropIfExists('fix_fix_price');
    }
};
