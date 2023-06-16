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
        Schema::create('_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ProductName');
            $table->string('SupplierID');
            $table->string('CategoryID');
            $table->string('QuantityPerUnit');
            $table->integer('UnitPrice');
            $table->integer('UnitsInStock');
            $table->float('UnitsOnOrder');
            $table->integer('ReorderLevel');
            $table->text('Discontinued');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_products');
    }
};
