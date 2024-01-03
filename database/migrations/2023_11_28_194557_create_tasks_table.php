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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('Guide');
            $table->text('Conveyor')->nullable();
            $table->string('Client')->nullable();
            $table->string('Elaboration_Date')->nullable();
            $table->string('Origin')->nullable();
            $table->string('Client_Documentation')->nullable();
            $table->string('Div')->nullable();
            $table->string('Addressee')->nullable();
            $table->string('Address')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Destination_City')->nullable();
            $table->string('Declared_Value')->nullable();
            $table->string('Parts')->nullable();
            $table->string('Shipment_Type')->nullable();
            $table->string('Type_Route')->nullable();
            $table->string('Delivery_Days')->nullable();
            $table->string('Scheduled_Date')->nullable();
            $table->string('Presentation_Date')->nullable();
            $table->string('Delivery_Appointments')->nullable();
            $table->string('Delivery_Status')->nullable();
            $table->string('Causal_Description')->nullable();
            $table->string('Causal_Amplification')->nullable();
            $table->string('Causal_Amplification2')->nullable();
            $table->string('Responsible')->nullable();
            $table->string('Time')->nullable();
            $table->string('Return_Status_Fulfilled')->nullable();
            $table->string('Return_Date_Fulfilled')->nullable();
            $table->string('Department_Of_Origin')->nullable();
            $table->string('Destination_Department')->nullable();
            $table->string('Weight')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
