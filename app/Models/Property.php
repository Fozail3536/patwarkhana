<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table='properties';
    protected $primaryKey='property_id';

    protected $fillable = [
        'property_name', 'category_id','category_name','property_area','property_video','property_launch_date','property_address','city_id','city_name','property_location','property_description','developer_id','price_plane_id','user_id','property_rating','innovation_detail','property_status',
    ];
}
