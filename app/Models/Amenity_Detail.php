<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amenity_Detail extends Model
{
    protected $table='amenity_details';
    protected $primaryKey='amenity_detail_id';
    protected $fillable = [
        'property_id', 'amenity_id', 'amenity_detail',
    ];
}
