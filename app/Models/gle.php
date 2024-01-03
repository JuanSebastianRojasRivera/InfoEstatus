<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gle extends Model
{
    use HasFactory;

    protected $fillable = [
        'Remittance',
        'Transp',
        'New',
        'Customer_Division',
        'Date_Desp',
        'Origin',
        'Doc_Remi',
        'Addressee',
        'Destination',
        'Quantity',
        'Vlr_Decl ',
        'Service_Type',
        'Guide_State',
        'Responsible',
        'Customer_Service_Value',
        'Weight',
        'Arrival_Time',
        'Departure_Time',
        'Remarks',

    ];
}
