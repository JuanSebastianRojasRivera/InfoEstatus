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
        Schema::create('aldia', function (Blueprint $table) {
            $table->string('Consignment');
            $table->string('Doc_Remission');
            $table->string('Otherdocument');
            $table->string('Origin');
            $table->string('Dane_Origin Regional_Origin');
            $table->string('DESTINATION');
            $table->string('Dane_Destination Regional_Destination');
            $table->string('Customer');
            $table->string('Sender');
            $table->string('Addressee');
            $table->string('Recipient_Phone');
            $table->string('Recipient_Address');
            $table->string('Amount');
            $table->string('Weight');
            $table->string('After_Date');
            $table->string('Comp_Date');
            $table->string('Statusremesa');
            $table->string('event_Remittance');
            $table->string('State');
            $table->string('status_Guide');
            $table->string('Consignment_First_Delivery');
            $table->string('Remittance_Second_Delivery');
            $table->string('Remittance_Event_Date');
            $table->string('Remittance_Event_Time');
            $table->string('Date of delivery');
            $table->string('Delivery_Time');
            $table->string('Days');
            $table->string('Measurement');
            $table->string('Last appointment');
            $table->string('Compliment');
            $table->string('Plate_Novelty');
            $table->string('Plate2');
            $table->string('Responsible');
            $table->string('Observation');
            $table->string('Responsible2_Product');
            $table->string('Service_Type');
            $table->string('DIvision_Client2');
            $table->string('Responsibility_Distribution');
            $table->string('Bill');
            $table->string('Responsibility_Distribution2');
            $table->string('Invoice2');
            $table->string('Invoice date');
            $table->string('Vlr_Decl');
            $table->string('Cost_Protection');
            $table->string('Volume');
            $table->string('Total charged');
            $table->string('Volume2');
            $table->string('Weight_Charged');
            $table->string('Operation type');
            $table->string('Observations');
            $table->string('Reexrtc');
            $table->string('Transp');
            
            
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
