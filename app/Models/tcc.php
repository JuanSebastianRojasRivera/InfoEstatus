<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tcc extends Model
{
    use HasFactory;

   


    protected $fillable = [
        'Remittance',
        'Date_Disp',
        'Doc_Remi',
        'Origin',
        'Destination',
        'Service_Type',
        'Client_Division',
        'Location _Sender',
        'Recipient',
        'Destination_Headquarters',
        'Phone_Telephone_Addressee',
        'Addressee_Address',
        'Quantity',
        'Packages',
        'Packages2',
        'Actual_Weight',
        'Weight_Volume',
        'Vlr_Decl',
        'Guide_Status',
        'Estimated_Date',
        'Delivery_Days',
        'Delivery_Date',
        'New',
        'New3',
        'Remarks',
        'Dane_City_Origin_City',
        'Dane_Destination_City',
        'Transp',

    ];
}
