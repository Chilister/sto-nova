<?php

use App\Models\Cars\Brand;
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
        Schema::create('models', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Brand::class, 'brand_id');
            $table->string('slug');
            $table->string('title');
            $table->unsignedInteger('priority');
            $table->timestamps();
            $table->unique(['brand_id', 'slug']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models');
    }
};
