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
        $table->string('Consigment');
$table->string('Recipient');
$table->string('Origin_City');
$table->string('Destination_City');
$table->string('Parts');
$table->string('Weight');
$table->string('Kilos_Volume');
$table->string('Declared_Value');
$table->string('Freight_Value');
$table->string('Cost_Handling');
$table->string('Total_value');
$table->string('Customer_Division');
$table->string('Special_Service');
$table->string('Nit');
$table->string('Invoice_Id');
$table->string('Expedition');
$table->string('Client_Document');
$table->string('Date_Desp');
$table->string('Observations');
$table->string('Status_Guide');
$table->string('Deliver_date');
$table->string('Payment_Form');
$table->string('Closing');
$table->string('Router_Liquidator');
$table->string('Commercial');
$table->string('New_Consignment');
$table->string('Last_Date_Causal');
$table->string('Recipient_Address');
$table->string('Kilos_Collected');
$table->string('Service');
$table->string('Recipent_Phone');
$table->string('Conveyor');
 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
