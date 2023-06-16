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
        Schema::create('_order__details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ProductID');
            $table->decimal('UnitPrice');
            $table->integer('Quantity');
            $table->decimal('Discount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_order__details');
    }
};
