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
        Schema::create('book_table', function (Blueprint $table) {
            $table->id();
            $table->string('book_name');
            $table->string('book_phone');
            $table->string('book_people');
            $table->string('book_tables');
            $table->string('book_when');
            $table->string('book_note');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_table');
    }
};
