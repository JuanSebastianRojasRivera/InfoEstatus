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
        Schema::create('tcc', function (Blueprint $table) {
            $table->id();
            $table->string('Remittance');
            $table->string('Date_Disp')->nullable();
            $table->string('Doc_Remi')->nullable();
            $table->string('Origin')->nullable();
            $table->string('Destination')->nullable();
            $table->string('Service_Type')->nullable();
            $table->string('Client_Division')->nullable();
            $table->string('Location _Sender')->nullable();
            $table->string('Recipient')->nullable();
            $table->string('Destination_Headquarters')->nullable();
            $table->string('Phone_Telephone_Addressee')->nullable();
            $table->string('Addressee_Address')->nullable();
            $table->string('Quantity')->nullable();
            $table->string('Packages')->nullable();
            $table->string('Packages2')->nullable();
            $table->string('Actual_Weight')->nullable();
            $table->string('Weight_Volume')->nullable();
            $table->string('Vlr_Decl')->nullable();
            $table->string('Guide_Status')->nullable();
            $table->string('Estimated_Date')->nullable();
            $table->string('Delivery_Days')->nullable();
            $table->string('Delivery_Date')->nullable();
            $table->string('Novelty')->nullable();
            $table->string('New_New3')->nullable();
            $table->string('Remarks')->nullable();
            $table->string('Dane_City_Origin_City')->nullable();
            $table->string('Dane_Destination_City')->nullable();
            $table->string('Transp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tcc');
    }
};
