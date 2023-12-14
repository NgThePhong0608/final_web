<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('food_name');
            $table->string('food_star');
            $table->string('food_vote');
            $table->string('food_price');
            $table->string('food_discount');
            $table->string('food_desc');
            $table->string('food_status');
            $table->string('food_type');
            $table->string('food_category');
            $table->string('food_src');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
