<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationStream extends Model
{
    //
    protected $table = 'education_streams';
    protected $fillable = ['school_id', 'branch_id', 'name', 'status'];
}
