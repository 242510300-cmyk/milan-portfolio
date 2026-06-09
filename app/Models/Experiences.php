<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'position_title',
        'organization_name',
        'start_date',
        'end_date',
        'is_current',
        'description'
    ];
}