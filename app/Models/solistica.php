<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solistica extends Model
{
    use HasFactory;

    protected $fillable = [
        'Remittance',
        'Nit_Rremittant',
        'Tariff_Code',
        'Customer_Division',
        'Doc_Remi',
        'Dane_Origin',
        'City_Orig(Spa)',
        'Dane_Destination',
        'City_Dest(Spa)',
        'Distribution_Zone',
        'Destination_Code',
        'Nit_or_Cc_Target',
        'Addressee',
        'Consignee_Address',
        'Dry_Load_Cases',
        'Cold_Chain_Boxes',
        'Quantity',
        'Kilos_Dry_Load',
        'Kilos_Cold_Chain_Kilos',
        'Total_Kilos',
        'Exp_Date',
        'Time_of_Processing',
        'Delivery_Date',
        'Delivery_Time',
        'Time',
        'New_Cause',
        'Cause_Manager_Of_The_Cause',
        'Internal_Cause_Manager_Of_The_Cause',
        'Status',
        'Status_Guide',
        'Remarks',
        'Executive_Note',
        'Response_From_New_Notices',
        'Delivery_Doc',
        'Solids_Invoice_No',
        'Document_No_2',
        'Document_No_3',
        'Document_No_4',
        'Return_Index',
        'Shipping_Invoice_Index',
        'Promised_Delivery_Date',
        'Basic_Service_Promise_of_Service',
        'Service_Type',
        'Purchase_Order',
        'Digitization',
        'Fulfillment_Indicator',
        'Cause_Queue_No_1',
        'Queue_of_Appeal_No_2',
        'Cause_Queue_No_3',
        'Queue_Of_Appeal_Nr_4',
        'Appointment_Dispatch',
        'First_Appointment_Date',
        'Appointment_Note',
        'Transp',
        'Origin',
        'Destination'

    ];
}
