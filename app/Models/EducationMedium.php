<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationMedium extends Model
{
    protected $table = 'education_mediums';
    protected $fillable = ['school_id', 'branch_id', 'name'];
}
