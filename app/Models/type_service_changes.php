<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_service_changes extends Model
{
    use HasFactory;

    protected $fillable = ['typeofservice','servicegle','agile'];
}