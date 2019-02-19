<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
class Packages extends Model 
{
	
     public function reservation(){
    	return $this->hasOne(Reservations::class,'package_id');
    }
        public function category(){
    	return $this->belongsTo(EventCategories::class,'event_categories_id');
    }
}
