<?php

use App\Models\Fixes\Category;
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
        Schema::create('fix_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class, 'category_id');
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('description')->nullable();
            $table->integer('price')->default(0);
            $table->boolean('is_published')->default(1);
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
        Schema::dropIfExists('fix_prices');
    }
};
