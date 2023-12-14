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
        Schema::create('bill_status', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('bill_phone');
            $table->text('bill_address');
            $table->string('bill_when');
            $table->string('bill_method');
            $table->integer('bill_discount');
            $table->integer('bill_delivery');
            $table->integer('bill_total');
            $table->string('bill_paid');
            $table->tinyInteger('bill_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_status');
    }
};
