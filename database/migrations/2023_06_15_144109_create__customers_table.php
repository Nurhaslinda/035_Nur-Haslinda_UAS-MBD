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
        Schema::create('_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CompanyName');
            $table->string('ContactName');
            $table->string('CompanTitle');
            $table->string('Address');
            $table->string('City');
            $table->string('Region');
            $table->string('PostalCode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_customers');
    }
};
