<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
  /**
     * The attributes that are mass assignable.
     *
     * @var array string>
     */
    protected $fillable = [
        'name',
        'min',
        'max',
        'type',
        'currency',
        'duration',
        'commission',
       
    ];

}
