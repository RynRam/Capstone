<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
class Venues extends Model 
{

    public function reservation(){
    	return $this->hasOne(Reservations::class);
    }
}
