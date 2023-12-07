<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    use HasFactory;

    protected $fillable = ['guide', 'conveyor','client','elaboration_date','origin',
    'client_documentation','viv','addressee','address','phone','destination_city',
    'declared_value','parts','shipment_type','type_route','delivery_days',
    'scheduled_date','presentation_date','delivery_appointments','delivery_status',
    'causal_description','causal_amplification','causal_amplification2',
    'responsible','time','return_status_fulfilled','return_date_fulfilled', 
    'department_of_origin','destination_department','weight',];
}
