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
        Schema::create('solistica', function (Blueprint $table) {
            $table->id();
            $table->string('Remittance');
            $table->string('Nit_Rremittant');
            $table->string('Tariff_Code');
            $table->string('Customer_Division');
            $table->string('Doc_Remi');
            $table->string('Dane_Origin');
            $table->string('City_Orig(Spa)');
            $table->string('Dane_Destination');
            $table->string('City_Dest(Spa)');
            $table->string('Distribution_Zone');
            $table->string('Destination_Code');
            $table->string('Nit_or_Cc_Target');
            $table->string('Addressee');
            $table->string('Consignee_Address');
            $table->string('Dry_Load_Cases');
            $table->string('Cold_Chain_Boxes');
            $table->string('Quantity');
            $table->string('Kilos_Dry_Load');
            $table->string('Kilos_Cold_Chain_Kilos');
            $table->string('Total_Kilos');
            $table->string('Exp_Date');
            $table->string('Time_of_Processing');
            $table->string('Delivery_Date');
            $table->string('Delivery_Time');
            $table->string('Time');
            $table->string('New_Cause');
            $table->string('Cause_Manager_Of_The_Cause');
            $table->string('Internal_Cause_Manager_Of_The_Cause');
            $table->string('Status');
            $table->string('Status_Guide');
            $table->string('Remarks');
            $table->string('Executive_Note');
            $table->string('Response_From_New_Notices');
            $table->string('Delivery_Doc');
            $table->string('Solids_Invoice_No');
            $table->string('Document_No_2');
            $table->string('Document_No_3');
            $table->string('Document_No_4');
            $table->string('Return_Index');
            $table->string('Shipping_Invoice_Index');
            $table->string('Promised_Delivery_Date');
            $table->string('Basic_Service_Promise_of_Service');
            $table->string('Service_Type');
            $table->string('Purchase_Order');
            $table->string('Digitization');
            $table->string('Fulfillment_Indicator');
            $table->string('Cause_Queue_No_1');
            $table->string('Queue_of_Appeal_No_2');
            $table->string('Cause_Queue_No_3');
            $table->string('Queue_Of_Appeal_Nr_4');
            $table->string('Appointment_Dispatch');
            $table->string('First_Appointment_Date');
            $table->string('Appointment_Note');
            $table->string('Transp');
            $table->string('Origin');
            $table->string('Destination');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solistica');
    }
};
