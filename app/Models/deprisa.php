<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deprisa extends Model
{
    use HasFactory;

    protected $fillable = [
        'Route',
        'Remittance',
        'Date_Desp',
        'Place',
        'Customer_Division',
        'Sender_Address',
        'Sender_CPC',
        'Origin',
        'Recipient',
        'Consignee_Address',
        'CP_Consignee',
        'Destination',
        'Date_Recorded',
        'Departure_Date',
        'Arrival_Date',
        'Delivery_Date',
        'Doc_Remi',
        'Quantity',
        'Weight',
        'Volume',
        'Incidence',
        'New',
        'Expansion_Incidence',
        'Locator',
        'Remarks',
        'Remarks_1',
        'Reimbursement',
        'Freight',
        'Service_Type',
        'Guide_Status',
        'Receiver_Name',
        'NIT_Receiver',
        'Other_Receiver',
        'Paid',
        'Customs_Declared_Value',
        'Theoretical_Delivery_Date',
        'Transp',


    ];
}
