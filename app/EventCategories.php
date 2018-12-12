<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
class EventCategories extends Model implements Auditable
{
		use \OwenIt\Auditing\Auditable;

        public function caterings(){
    	return $this->hasMany(Caterings::class);
    }
            public function packages(){
    	return $this->hasMany(Packages::class);
    }

}
