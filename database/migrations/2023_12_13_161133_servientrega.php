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
        Schema::create('servientregas', function (Blueprint $table) {
            $table->id();
            $table->string('State')->nullable();	
            $table-> string('Grounds_for_Mass_Annulment')->nullable();
            $table->string('Consigment');	
            $table->string('Date_Desp')->nullable();	
            $table->string ('Type_of_service')->nullable();	
            $table->string ('Shipping_Mpdate')->nullable(); 
            $table->string('Doc_Remi')->nullable();	
            $table->string('Amount')->nullable();	
            $table->string('Trip_Type')->nullable();	
            $table->string('Delivery_Time')->nullable();	
            $table->string('Vlr_Decl')->nullable();
            $table-> string('Way_to_Pay')->nullable();	
            $table-> string('Conveyance')->nullable();
            $table->string('Total_Weight')->nullable();	
            $table-> string('Total_Volume')->nullable();	 
            $table->string('Freight_Value')->nullable();	
            $table->string('Freight_Sobre_Value')->nullable();	
            $table->string('Liquidated_Value_Identification')->nullable();
            $table->string('Identification')->nullable();	
            $table->string('Reference')->nullable();
            $table-> string('Recipient_Address')->nullable();	
            $table->string('Postal_Code')->nullable();	
            $table-> string('Addressee')->nullable();	
            $table->string('Recipent_Tel')->nullable();	
            $table->string('Destination')->nullable();
            $table->string('Destination_Department')->nullable(); 	
            $table->string('Email')->nullable();	
            $table->string('Cell_Phone_Number')->nullable();
            $table->string('Origin')->nullable();
            $table-> string('Department_Sender')->nullable();	
            $table->string('Sender')->nullable();	
            $table->string('Sender_Id')->nullable();	
            $table->string('From_Address')->nullable();	
            $table->string('Senders_Postal_Code')->nullable();	
            $table->string('Sender_Phone')->nullable();
            $table->string('Custom_Field1')->nullable();	
            $table->string('Custom_Field2')->nullable();	
            $table-> string('Observations')->nullable();	
            $table-> string('Guide_Type')->nullable();	
            $table-> string('Shipping_Envelope')->nullable();	
            $table-> string('Security_Bag')->nullable();	
            $table-> string('Customer_Division')->nullable();	
            $table->string ('Collection')->nullable();
            $table->string ('Total_Value_to_Collect')->nullable();	
            $table->string('Bill')->nullable();
            $table-> string('Shipping_Status')->nullable();	
            $table-> string('Shipment_Date')->nullable();	
            $table->string('Stauts_Guide')->nullable();	
            $table-> string('Date_of_Delivery')->nullable();	
            $table->string('Envelope_Box_Number')->nullable();	
            $table-> string('Cost_Center_Name')->nullable();	
            $table-> string('Digital_Return')->nullable();
            $table-> string('Collection_Request_Number')->nullable();	
            $table-> string('Scheduled_Date_by_User_Collection')->nullable();	
            $table-> string('Scheduled_Time_by_User_Collection')->nullable();	
            $table-> string('Collection_scheduling_message')->nullable();	
            $table-> string('New_Scheduled_Collection Date')->nullable();	
            $table-> string('New_Scheduled_Collection_Time')->nullable();	
            $table-> string('Office_That_Prints')->nullable();	
            $table-> string('Office_Print_Date')->nullable();	
            $table-> string('ReverseGuidance_StatusDate')->nullable();	
            $table-> string('If_Apply')->nullable();	
            $table-> string('Destination_Dane')->nullable();	
            $table->string('Transp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        

    }

};

