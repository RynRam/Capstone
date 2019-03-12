<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audits extends Model
{
    protected $fillable= ['user', 'event','audit_type','old_values','new_values'];
    protected $casts = [
        'old_values' => 'array',
        'new_values' => 'array',
    ];
}
