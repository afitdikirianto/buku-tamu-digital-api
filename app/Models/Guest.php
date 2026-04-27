<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'name',
        'institution',
        'purpose',
        'visit_date',
        'status'
    ];
}
