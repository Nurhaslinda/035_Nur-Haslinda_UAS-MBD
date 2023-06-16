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
        Schema::create('_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CustomerID');
            $table->string('EmployeeID');
            $table->date('OrderDate');
            $table->date('RequiredDate');
            $table->date('ShippedDate');
            $table->integer('ShipVia');
            $table->float('Freight');
            $table->string('ShipName');
            $table->string('ShipAddress');
            $table->string('ShipCity');
            $table->string('ShipRegion');
            $table->string('ShipPostalCode');
            $table->string('ShipCountry');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_orders');
    }
};
