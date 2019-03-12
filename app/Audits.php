<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audits extends Model
{
    protected $fillable= ['user', 'event','audit_type','oldvalues','newvalues'];
    protected $casts = [
        'oldvalues' => 'array',
        'newvalues' => 'array',
    ];

    protected $table = 'audits';
}
