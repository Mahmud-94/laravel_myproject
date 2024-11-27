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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('ptype', 100);
            $table->string('bedroom', 50);
            $table->string('bathroom', 20);
            $table->string('balcony', 20);
            $table->string('kitchen', 20);
            $table->string('size', 20);
            $table->string('price', 20);
            $table->string('location', 50);


            $table->string('photo')->nullable();

            $table->enum('status', ['avaiable', 'not_avaiable'])->default('not_avaiable');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
