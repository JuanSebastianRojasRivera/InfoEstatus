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
        Schema::create('bluelogistics', function (Blueprint $table) {
            $table->id();
            $table->string('Consigment');
            $table->string('Recipient')->nullable();
            $table->string('Origin_City')->nullable();
            $table->string('Destination_City')->nullable();
            $table->string('Parts')->nullable();
            $table->string('Weight')->nullable();
            $table->string('Kilos_Volume')->nullable();
            $table->string('Declared_Value')->nullable();
            $table->string('Freight_Value')->nullable();
            $table->string('Cost_Handling')->nullable();
            $table->string('Total_value')->nullable();
            $table->string('Customer_Division')->nullable();
            $table->string('Special_Service')->nullable();
            $table->string('Nit')->nullable();
            $table->string('Invoice_Id')->nullable();
            $table->string('Expedition')->nullable();
            $table->string('Client_Document')->nullable();
            $table->string('Date_Desp')->nullable();
            $table->string('Observations')->nullable();
            $table->string('Status_Guide')->nullable();
            $table->string('Deliver_date')->nullable();
            $table->string('Payment_Form')->nullable();
            $table->string('Closing')->nullable();
            $table->string('Router_Liquidator')->nullable();
            $table->string('Commercial')->nullable();
            $table->string('New_Consignment')->nullable();
            $table->string('Last_Date_Causal')->nullable();
            $table->string('Recipient_Address')->nullable();
            $table->string('Kilos_Collected')->nullable();
            $table->string('Service')->nullable();
            $table->string('Recipent_Phone')->nullable();
            $table->string('Conveyor')->nullable();
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
