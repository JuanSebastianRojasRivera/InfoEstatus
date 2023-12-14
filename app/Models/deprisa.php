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
        'Sender_address',
        'Sender_CPC',
        'Origin',
        'Recipient',
        'Consignee_Address',
        'CP_consignee',
        'Destination',
        'Date_recorded',
        'Departure_date',
        'Arrival_Date',
        'Delivery_Date',
        'Doc_Remi',
        'Quantity',
        'Weight',
        'Volume',
        'Incidence',
        'New',
        'Expansion_incidence',
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
        'Transp'

    ];
}
