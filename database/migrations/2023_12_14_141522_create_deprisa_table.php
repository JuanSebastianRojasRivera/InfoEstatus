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
        Schema::create('deprisas', function (Blueprint $table) {
            $table->id();
            $table->string('Route')->nullable();
            $table->string('Remittance');
            $table->string('Date_Desp')->nullable();
            $table->string('Place')->nullable();
            $table->string('Customer_Division')->nullable();
            $table->string('Sender_address')->nullable();
            $table->string('Sender_CPC')->nullable();
            $table->string('Origin')->nullable();
            $table->string('Recipient')->nullable();
            $table->string('Consignee_Address')->nullable();
            $table->string('CP_consignee')->nullable();
            $table->string('Destination')->nullable();
            $table->string('Date_recorded')->nullable();
            $table->string('Departure_date')->nullable();
            $table->string('Arrival_Date')->nullable();
            $table->string('Delivery_Date')->nullable();
            $table->string('Doc_Remi')->nullable();
            $table->string('Quantity')->nullable();
            $table->string('Weight')->nullable();
            $table->string('Volume')->nullable();
            $table->string('Incidence')->nullable();
            $table->string('New')->nullable();
            $table->string('Expansion_incidence')->nullable();
            $table->string('Locator')->nullable();
            $table->string('Remarks')->nullable();
            $table->string('Remarks_1')->nullable();
            $table->string('Reimbursement')->nullable();
            $table->string('Freight')->nullable();
            $table->string('Service_Type')->nullable();
            $table->string('Guide_Status')->nullable();
            $table->string('Receiver_Name')->nullable();
            $table->string('NIT_Receiver')->nullable();
            $table->string('Other_Receiver')->nullable();
            $table->string('Paid')->nullable();
            $table->string('Customs_Declared_Value')->nullable();
            $table->string('Theoretical_Delivery_Date')->nullable();
            $table->string('Transp')->nullable();
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
