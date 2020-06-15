<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $table='developers';
    protected $primaryKey='developer_id';

    protected $fillable = [
        'user_id', 'developer_name','owner','established_date','associations','address','introduction','services','project_completed','developer_status',
    ];
}
