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
        Schema::create('_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('Title');
            $table->string('TitleOfCourtesy');
            $table->date('BirthDate');
            $table->date('HireDate');
            $table->string('Address');
            $table->string('City');
            $table->string('Region');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_employees');
    }
};
