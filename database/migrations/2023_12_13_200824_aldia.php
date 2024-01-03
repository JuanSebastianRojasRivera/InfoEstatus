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
        Schema::create('aldias', function (Blueprint $table) {
            $table->id();
            $table->string('Remission');
            $table->string('Doc_Remission')->nullable();
            $table->string('Other_Document')->nullable();
            $table->string('Origin')->nullable();
            $table->string('Dane_Origin')->nullable();
            $table->string('Regional_Origin')->nullable();
            $table->string('Destination')->nullable();
            $table->string('Dane_Destination')->nullable();
            $table->string('Regional_Destination')->nullable();
            $table->string('Customer')->nullable();
            $table->string('Sender')->nullable();
            $table->string('Addressee')->nullable();
            $table->string('Tel_Addressee')->nullable();
            $table->string('Addressee_Address')->nullable();
            $table->string('Quantity')->nullable();
            $table->string('Weight')->nullable();
            $table->string('Date_Desp')->nullable();
            $table->string('Date_Comp')->nullable();
            $table->string('Status_Remittance')->nullable();
            $table->string('Event_Remiage')->nullable();
            $table->string('Status')->nullable();
            $table->string('Status_Guide')->nullable();
            $table->string('Shipment_First_Delivery')->nullable();
            $table->string('Second_Delivery_Shipment')->nullable();
            $table->string('Delivery_Event_Date')->nullable();
            $table->string('Delivery_Event_Time')->nullable();
            $table->string('Delivery_Date')->nullable();
            $table->string('Delivery_Time')->nullable();
            $table->string('Days')->nullable();
            $table->string('Measurement')->nullable();
            $table->string('Last_Date')->nullable();
            $table->string('Complied')->nullable();
            $table->string('Plate')->nullable();
            $table->string('New')->nullable();
            $table->string('Plate2')->nullable();
            $table->string('Responsible')->nullable();
            $table->string('Observation')->nullable();
            $table->string('Responsible2')->nullable();
            $table->string('Product')->nullable();
            $table->string('Service_Type')->nullable();
            $table->string('Customer_Division2')->nullable();
            $table->string('Responsibility_Distribution')->nullable();
            $table->string('Invoice')->nullable();
            $table->string('Responsibility_Distribution2')->nullable();
            $table->string('Invoice2')->nullable();
            $table->string('Invoice_Date')->nullable();
            $table->string('Vlr_Decl')->nullable();
            $table->string('Cost_Protection')->nullable();
            $table->string('Volume')->nullable();
            $table->string('Total_Coburged')->nullable();
            $table->string('Volume2')->nullable();
            $table->string('Work_Weight')->nullable();
            $table->string('Operation_Type')->nullable();
            $table->string('Remarks')->nullable();
            $table->string('Reexrtc')->nullable();
            $table->string('Transp')->nullable();
            $table->timestamps();
            
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
