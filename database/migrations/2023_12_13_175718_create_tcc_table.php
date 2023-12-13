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
            $table->string('Date_Disp');
            $table->string('Doc_Remi');
            $table->string('Origin');
            $table->string('Destination');
            $table->string('Service_Type');
            $table->string('Client_Division');
            $table->string('Location _Sender');
            $table->string('Recipient');
            $table->string('Destination_Headquarters');
            $table->string('Phone_Telephone_Addressee');
            $table->string('Addressee_Address');
            $table->string('Quantity');
            $table->string('Packages');
            $table->string('Packages2');
            $table->string('Actual_Weight');
            $table->string('Weight_Volume');
            $table->string('Vlr_Decl');
            $table->string('Guide_Status');
            $table->string('Estimated_Date');
            $table->string('Delivery_Days');
            $table->string('Delivery_Date');
            $table->string('Novelty');
            $table->string('New_New3');
            $table->string('Remarks');
            $table->string('Dane_City_Origin_City');
            $table->string('Dane_Destination_City');
            $table->string('Transp');
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
