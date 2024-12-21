<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specifications extends Model
{
    use HasFactory;
    protected $fillable = [
        'identification_number',
        'plat_number',
        'model',
        'color',
        'car_name',
        'car_fuel_type',
        'promise_number',
        'profit',
        'loss',
        'seller',
        'mobile_seller',
        'buyer',
        'mobile_buyer',
        'cylinder_type',
        'gear_type',
        'description',
        'price_car',
        'gearbox_type',
        'created_post',
    ];
}
