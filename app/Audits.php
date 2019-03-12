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
    public function setOptionsAttribute($old_values,$new_values)
{
    $this->attributes['old_values'] = json_encode($old_values);
    $this->attributes['new_values'] = json_encode($old_values);

}

    protected $table = 'audits';
}
