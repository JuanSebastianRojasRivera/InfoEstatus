<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aldia extends Model
{
    use HasFactory;

    protected $fillable = [
        'Dane_Destination Regional_Destination',
            'Customer',
            'Sender',
            'Addressee',
            'Recipient_Phone',
            'Recipient_Address',
            'Amount',
            'Weight',
            'After_Date',
            'Comp_Date',
            'Statusremesa',
            'event_Remittance',
            'State',
            'status_Guide',
            'Consignment_First_Delivery',
            'Remittance_Second_Delivery',
            'Remittance_Event_Date',
            'Remittance_Event_Time',
            'Date of delivery',
            'Delivery_Time',
            'Days',
            'Measurement',
            'Last appointment',
            'Compliment',
            'Plate_Novelty',
            'Plate2',
            'Responsible',
            'Observation',
            'Responsible2_Product',
            'Service_Type',
            'DIvision_Client2',
            'Responsibility_Distribution',
            'Bill',
            'Responsibility_Distribution2',
            'Invoice2',
            'Invoice date',
            'Vlr_Decl',
            'Cost_Protection',
            'Volume',
            'Total charged',
            'Volume2',
            'Weight_Charged',
            'Operation type',
            'Observations',
            'Reexrtc',
            'Transp'
    ];

}
