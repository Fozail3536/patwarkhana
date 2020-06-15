<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table='images';
    protected $primaryKey='image_id';

    protected $fillable = [
        'image_file_name', 'image_title', 'image_status', 'fk_id','image_type',
    ];
}
