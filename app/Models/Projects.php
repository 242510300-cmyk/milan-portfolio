<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_title',
        'project_type',
        'client_name',
        'role',
        'start_date',
        'end_date',
        'is_ongoing',
        'description',
        'technologies',
        'project_url',
        'github_url',
        'thumbnail'
    ];
}