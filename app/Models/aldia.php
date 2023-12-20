<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aldia extends Model
{
    use HasFactory;

    protected $fillable = [
        'Remission',
        'Doc_Remission',
        'Other_Document',
        'Origin',
        'Dane_Origin',
        'Regional_Origin',
        'Destination',
        'Dane_Destination',
        'Regional_Destination',
        'Customer',
        'Sender',
        'Addressee',
        'Tel_Addressee',
        'Addressee_Address',
        'Quantity',
        'Weight',
        'Date_Desp',
        'Date_Comp',
        'Status_Remittance',
        'Event_Remiage',
        'Status',
        'Status_Guide',
        'Shipment_First_Delivery',
        'Second_Delivery_Shipment',
        'Delivery_Event_Date',
        'Delivery_Event_Time',
        'Delivery_Date',
        'Delivery_Time',
        'Days',
        'Measurement',
        'Last_Date',
        'Complied',
        'Plate',
        'New',
        'Plate2',
        'Responsible',
        'Observation',
        'Responsible2',
        'Product',
        'Service_Type',
        'Customer_Division2',
        'Responsibility_Distribution',
        'Invoice',
        'Responsibility_Distribution2',
        'Invoice2',
        'Invoice_Date',
        'Vlr_Decl',
        'Cost_Protection',
        'Volume',
        'Total_Coburged',
        'Volume2',
        'Work_Weight',
        'Operation_Type',
        'Remarks',
        'Reexrtc',
        'Transp',
        
    ];

}
