<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guide_clients extends Model
{
    use HasFactory;

    protected $fillable = ['guide1','client1'];
}