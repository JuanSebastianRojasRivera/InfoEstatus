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
        Schema::create('solisticas', function (Blueprint $table) {
            $table->id();
            $table->string('Remittance');
            $table->string('Nit_Rremittant')->nullable();
            $table->string('Tariff_Code')->nullable();
            $table->string('Customer_Division')->nullable();
            $table->string('Doc_Remi')->nullable();
            $table->string('Dane_Origin')->nullable();
            $table->string('City_Orig(Spa)')->nullable();
            $table->string('Dane_Destination')->nullable();
            $table->string('City_Dest(Spa)')->nullable();
            $table->string('Distribution_Zone')->nullable();
            $table->string('Destination_Code')->nullable();
            $table->string('Nit_Or_Cc_Target')->nullable();
            $table->string('Addressee')->nullable();
            $table->string('Consignee_Address')->nullable();
            $table->string('Dry_Load_Cases')->nullable();
            $table->string('Cold_Chain_Boxes')->nullable();
            $table->string('Quantity')->nullable();
            $table->string('Kilos_Dry_Load')->nullable();
            $table->string('Kilos_Cold_Chain_Kilos')->nullable();
            $table->string('Total_Kilos')->nullable();
            $table->string('Exp_Date')->nullable();
            $table->string('Time_Of_Processing')->nullable();
            $table->string('Delivery_Date')->nullable();
            $table->string('Delivery_Time')->nullable();
            $table->string('Time')->nullable();
            $table->string('Cause')->nullable();
            $table->string('New')->nullable();
            $table->string('Cause_Manager_Of_The_Cause')->nullable();
            $table->string('Internal_Cause_Manager_Of_The_Cause')->nullable();
            $table->string('Status')->nullable();
            $table->string('Status_Guide')->nullable();
            $table->string('Remarks')->nullable();
            $table->string('Executive_Note')->nullable();
            $table->string('Response_From_New_Notices')->nullable();
            $table->string('Delivery_Doc')->nullable();
            $table->string('Solids_Invoice_No')->nullable();
            $table->string('Document_No_2')->nullable();
            $table->string('Document_No_3')->nullable();
            $table->string('Document_No_4')->nullable();
            $table->string('Return_Index')->nullable();
            $table->string('Shipping_Invoice_Index')->nullable();
            $table->string('Promised_Delivery_Date')->nullable();
            $table->string('Basic_Service_Promise_of_Service')->nullable();
            $table->string('Service_Type')->nullable();
            $table->string('Purchase_Order')->nullable();
            $table->string('Digitization')->nullable();
            $table->string('Fulfillment_Indicator')->nullable();
            $table->string('Cause_Queue_No_1')->nullable();
            $table->string('Queue_Of_Appeal_No_2')->nullable();
            $table->string('Cause_Queue_No_3')->nullable();
            $table->string('Queue_Of_Appeal_Nr_4')->nullable();
            $table->string('Appointment_Dispatch')->nullable();
            $table->string('First_Appointment_Date')->nullable();
            $table->string('Appointment_Note')->nullable();
            $table->string('Transp')->nullable();
            $table->string('Origin')->nullable();
            $table->string('Destination')->nullable();
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
