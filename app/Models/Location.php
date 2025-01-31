<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'status',
        'address_1',
        'address_2',
        'address_3',
        'postcode',
        'city',
        'state',
        'country',
    ];
}
