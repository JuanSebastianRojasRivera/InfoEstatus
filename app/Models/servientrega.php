<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servientrega extends Model
{
    use HasFactory;

    protected $fillable = [        
        'State',	
        'Grounds_for_Mass_Annulment',
        'Consigment',	
        'Date_Desp',	
        'Type_of_service',	
        'Shipping_Mpdate', 
        'Doc_Remi',	
        'Amount',	
        'Trip_Type',	
        'Delivery_Time',	
        'Vlr_Decl',
        'Way_to_Pay',	
        'Conveyance',
        'Total_Weight',	
        'Total_Volume',	 
        'Freight_Value',	
        'Freight_Sobre_Value',	
        'Liquidated_Value_Identification',
        'Identification',	
        'Reference',
        'Recipient_Address',	
        'Postal_Code',	
        'Addressee',	
        'Recipent_Tel',	
        'Destination',
        'Destination_Department', 	
        'Email',	
        'Cell_Phone_Number',
        'Origin',
        'Department_Sender',	
        'Sender',	
        'Sender_Id',	
        'From_Address',	
        'Senders_Postal_Code',	
        'Sender_Phone',
        'Custom_Field1',	
        'Custom_Field2',	
        'Observations',	
        'Guide_Type',	
        'Shipping_Envelope',	
        'Security_Bag',	
        'Customer_Division',	
        'Collection',
        'Total_Value_to_Collect',	
        'Bill',
        'Shipping_Status',	
        'Shipment_Date',	
        'Stauts_Guide',	
        'Date_of_Delivery',	
        'Envelope_Box_Number',	
        'Cost_Center_Name',	
        'Digital_Return',
        'Collection_Request_Number',	
        'Scheduled_Date_by_User_Collection',	
        'Scheduled_Time_by_User_Collection',	
        'Collection_scheduling_message',	
        'New_Scheduled_Collection Date',	
        'New_Scheduled_Collection_Time',	
        'Office_That_Prints',	
        'Office_Print_Date',	
        'ReverseGuidance_StatusDate',	
        'If_Apply',	
        'Destination_Dane',	
        'Transp'
    ];
}
