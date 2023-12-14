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
        Schema::create('servientrega', function (Blueprint $table) {

            $table->string('State');	
            $table-> string('Grounds_for_Mass_Annulment');
            $table->string('Consigment');	
            $table->string('Date_Desp');	
            $table->string ('Type_of_service');	
            $table->string ('Shipping_Mpdate'); 
            $table->string('Doc_Remi');	
            $table->string('Amount');	
            $table->string('Trip_Type');	
            $table->string('Delivery_Time');	
            $table->string('Vlr_Decl');
            $table-> string('Way_to_Pay');	
            $table-> string('Conveyance');
            $table->string('Total_Weight');	
            $table-> string('Total_Volume');	 
            $table->string('Freight_Value');	
            $table->string('Freight_Sobre_Value');	
            $table->string('Liquidated_Value_Identification');
            $table->string('Identification');	
            $table->string('Reference');
            $table-> string('Recipient_Address');	
            $table->string('Postal_Code');	
            $table-> string('Addressee');	
            $table->string('Recipent_Tel');	
            $table->string('Destination');
            $table->string('Destination_Department'); 	
            $table->string('Email');	
            $table->string('Cell_Phone_Number');
            $table->string('Origin');
            $table-> string('Department_Sender');	
            $table->string('Sender');	
            $table->string('Sender_Id');	
            $table->string('From_Address');	
            $table->string('Senders_Postal_Code');	
            $table->string('Sender_Phone');
            $table->string('Custom_Field1');	
            $table->string('Custom_Field2');	
            $table-> string('Observations');	
            $table-> string('Guide_Type');	
            $table-> string('Shipping_Envelope');	
            $table-> string('Security_Bag');	
            $table-> string('Customer_Division');	
            $table->string ('Collection');
            $table->string ('Total_Value_to_Collect');	
            $table->string('Bill');
            $table-> string('Shipping_Status');	
            $table-> string('Shipment_Date');	
            $table->string('Stauts_Guide');	
            $table-> string('Date_of_Delivery');	
            $table->string('Envelope_Box_Number');	
            $table-> string('Cost_Center_Name');	
            $table-> string('Digital_Return');
            $table-> string('Collection_Request_Number');	
            $table-> string('Scheduled_Date_by_User_Collection');	
            $table-> string('Scheduled_Time_by_User_Collection');	
            $table-> string('Collection_scheduling_message');	
            $table-> string('New_Scheduled_Collection Date');	
            $table-> string('New_Scheduled_Collection_Time');	
            $table-> string('Office_That_Prints');	
            $table-> string('Office_Print_Date');	
            $table-> string('ReverseGuidance_StatusDate');	
            $table-> string('If_Apply');	
            $table-> string('Destination_Dane');	
            $table->string('Transp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
    }
};

