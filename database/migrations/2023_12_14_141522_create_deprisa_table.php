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
        Schema::create('deprisa', function (Blueprint $table) {
            $table->id();
            $table->string('Route');
            $table->string('Remittance');
            $table->string('Date_Desp');
            $table->string('Place');
            $table->string('Customer_Division');
            $table->string('Sender_address');
            $table->string('Sender_CPC');
            $table->string('Origin');
            $table->string('Recipient');
            $table->string('Consignee_Address');
            $table->string('CP_consignee');
            $table->string('Destination');
            $table->string('Date_recorded');
            $table->string('Departure_date');
            $table->string('Arrival_Date');
            $table->string('Delivery_Date');
            $table->string('Doc_Remi');
            $table->string('Quantity');
            $table->string('Weight');
            $table->string('Volume');
            $table->string('Incidence');
            $table->string('New');
            $table->string('Expansion_incidence');
            $table->string('Locator');
            $table->string('Remarks');
            $table->string('Remarks_1');
            $table->string('Reimbursement');
            $table->string('Freight');
            $table->string('Service_Type');
            $table->string('Guide_Status');
            $table->string('Receiver_Name');
            $table->string('NIT_Receiver');
            $table->string('Other_Receiver');
            $table->string('Paid');
            $table->string('Customs_Declared_Value');
            $table->string('Theoretical_Delivery_Date');
            $table->string('Transp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deprisa');
    }
};
