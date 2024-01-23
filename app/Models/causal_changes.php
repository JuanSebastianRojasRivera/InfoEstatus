<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class causal_changes extends Model
{
    use HasFactory;

    protected $fillable = ['causal_operators','causal_status','responsible','operator'];
}