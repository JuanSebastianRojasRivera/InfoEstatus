<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Holiday
 *
 * @property $id
 * @property $year
 * @property $date
 * @property $detail
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Holiday extends Model
{
    
    static $rules = [
		'year' => 'required',
		'date' => 'required',
		'detail' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['year','date','detail'];



}
