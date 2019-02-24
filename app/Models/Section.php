<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    protected $fillable = ['school_id', 'branch_id', 'standard_id', 'stream_id', 'medium_id', 'session_id', 'name', 'status'];
}
