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
        Schema::create('gles', function (Blueprint $table) {
            $table->id();
            $table->string('Remittance');
            $table->string('Transp')->nullable();
            $table->string('New')->nullable();
            $table->string('Customer_Division')->nullable();
            $table->string('Date_Desp')->nullable();
            $table->string('Origin')->nullable();
            $table->string('Doc_Remi')->nullable();
            $table->string('Addressee')->nullable();
            $table->string('Destination')->nullable();
            $table->string('Quantity')->nullable();
            $table->string('Vlr_Decl')->nullable();
            $table->string('Service_Type')->nullable();
            $table->string('Guide_State')->nullable();
            $table->string('Responsible')->nullable();
            $table->string('Customer_Service_Value')->nullable();;
            $table->string('Weight')->nullable();
            $table->string('Arrival_Time')->nullable();
            $table->string('Departure_Time')->nullable();
            $table->string('Remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gles');
    }
};
