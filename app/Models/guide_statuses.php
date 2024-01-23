<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guide_statuses extends Model
{
    use HasFactory;

    protected $fillable = ['state_guide','state_gle','agile1'];
}