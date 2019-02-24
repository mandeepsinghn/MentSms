<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //
    protected $table = 'branches';
    protected $fillable = ['school_id', 'name', 'logo', 'tagline', 'address', 'city', 'state', 'post_code', 'country_id', 'phone', 'email', 'website', 'fax', 'status'];
}
