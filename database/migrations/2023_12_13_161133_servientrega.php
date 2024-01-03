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
            $table->string('Grounds_For_Mass_Annulment')->nullable();
            $table->string('Consigment');
            $table->string('Date_Desp')->nullable();
            $table->string('Type_Of_Service')->nullable();
            $table->string('Shipping_Mpdate')->nullable();
            $table->string('Doc_Remi')->nullable();
            $table->string('Amount',2)->nullable();
            $table->string('Trip_Type',20)->nullable();
            $table->string('Delivery_Time',20)->nullable();
            $table->string('Vlr_Decl',20)->nullable();
            $table->string('Way_To_Pay',20)->nullable();
            $table->string('Conveyance',20)->nullable();
            $table->string('Total_Weight',20)->nullable();
            $table->string('Total_Volume',20)->nullable();
            $table->string('Freight_Value',20)->nullable();
            $table->string('Freight_Sobre_Value',20)->nullable();
            $table->string('Liquidated_Value_Identification',20)->nullable();
            $table->string('Identification',20)->nullable();
            $table->string('Reference')->nullable();
            $table->string('Recipient_Address')->nullable();
            $table->string('Postal_Code')->nullable();
            $table->string('Addressee')->nullable();
            $table->string('Recipent_Tel')->nullable();
            $table->string('Destination')->nullable();
            $table->string('Destination_Department')->nullable();
            $table->string('Email')->nullable();
            $table->string('Cell_Phone_Number')->nullable();
            $table->string('Origin')->nullable();
            $table->string('Department_Sender')->nullable();
            $table->string('Sender')->nullable();
            $table->string('Sender_Id')->nullable();
            $table->string('From_Address')->nullable();
            $table->string('Senders_Postal_Code')->nullable();
            $table->string('Sender_Phone')->nullable();
            $table->string('Custom_Field1')->nullable();
            $table->string('Custom_Field2')->nullable();
            $table->string('Observations')->nullable();
            $table->string('Guide_Type')->nullable();
            $table->string('Shipping_Envelope')->nullable();
            $table->string('Security_Bag')->nullable();
            $table->string('Seal')->nullable();
            $table->string('Customer_Division')->nullable();
            $table->string('Collection')->nullable();
            $table->string('Total_Value_To_Collect')->nullable();
            $table->string('Bill')->nullable();
            $table->string('Shipping_Status')->nullable();
            $table->string('Shipment_Date')->nullable();
            $table->string('Stauts_Guide')->nullable();
            $table->string('Date_Of_Delivery')->nullable();
            $table->string('Envelope_Box_Number')->nullable();
            $table->string('Cost_Center_Name')->nullable();
            $table->string('Digital_Return')->nullable();
            $table->string('Collection_Request_Number')->nullable();
            $table->string('Scheduled_Date_By_User_Collection')->nullable();
            $table->string('Scheduled_Time_By_User_Collection')->nullable();
            $table->string('Collection_Scheduling_Message')->nullable();
            $table->string('New_Scheduled_CollectionDate')->nullable();
            $table->string('New_Scheduled_Collection_Time')->nullable();
            $table->string('Office_That_Prints')->nullable();
            $table->string('Office_Print_Date')->nullable();
            $table->string('Inverse_Guide_Status')->nullable();
            $table->string('Close_Inverse_Guide_Status')->nullable();
            $table->string('Original_Declared_Value')->nullable();
            $table->string('If_Apply')->nullable();
            $table->string('Destination_Dane')->nullable();
            $table->string('Transp',1)->nullable();          
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

