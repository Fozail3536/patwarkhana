<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table='reviews';
    protected $primaryKey='review_id';

    protected $fillable = [
        'review_date', 'property_id','user_id','review_description','review_video','location_score','location_detail','development_score','development_detail','marketRate_score','marketRate_detail','reputation_score','reputation_detail','innovation_score','innovation_detail','overall_score','review_status',
    ];
}
