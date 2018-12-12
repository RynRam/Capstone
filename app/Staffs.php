<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
      protected $fillable = ['firstname','lastname','is_assign','is_active'];
}
