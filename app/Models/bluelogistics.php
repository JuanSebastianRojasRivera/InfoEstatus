<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bluelogistics extends Model
{
    use HasFactory;
    protected $fillable = [
        'Consigment',
        'Recipient',
        'Origin_City',
        'Destination_City',
        'Parts',
        'Weight',
        'Kilos_Volume',
        'Declared_Value',
        'Freight_Value',
        'Cost_Handling',
        'Total_value',
        'Customer_Division',
        'Special_Service',
        'Nit',
        'Invoice_Id',
        'Expedition',
        'Client_Document',
        'Date_Desp',
        'Observations',
        'Status_Guide',
        'Deliver_date',
        'Payment_Form',
        'Closing',
        'Router_Liquidator',
        'Commercial',
        'New_Consignment',
        'Last_Date_Causal',
        'Recipient_Address',
        'Kilos_Collected',
        'Service',
        'Recipent_Phone',
        'Conveyor'
    ];
}
