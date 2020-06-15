<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review_Result extends Model
{
    protected $table='review_results';
    protected $primaryKey='review_result_id';

    protected $fillable = [
        'review_index_id', 'review_id', 'review_result',
    ];
}
