<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review_Index extends Model
{
    protected $table='review_indexes';
    protected $primaryKey='review_index_id';

    protected $fillable = [
        'review_index_title', 'parent_index_id','index_category_title','index_category_id','minimum_score','maximum_score','max_index_descriptor','index_type',
    ];
}
