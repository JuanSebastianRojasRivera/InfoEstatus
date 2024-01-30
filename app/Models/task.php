<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;

    protected $fillable = [
        'Guide',
        'Conveyor',
        'Client',
        'Elaboration_Date',
        'Origin',
        'Client_Documentation',
        'Div',
        'Addressee',
        'Address',
        'Phone',
        'Destination_City',
        'Declared_Value',
        'Parts',
        'Shipment_Type',
        'Type_Route',
        'Delivery_Days',
        'Scheduled_Date',
        'Presentation_Date',
        'Delivery_Appointments',
        'Delivery_Status',
        'Causal_Description',
        'Causal_Amplification',
        'Causal_Amplification2',
        'Responsible',
        'Time',
        'Return_Status_Fulfilled',
        'Return_Date_Fulfilled',
        'Department_Of_Origin',
        'Destination_Department',
        'Weight',

    ];
}
