<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCategories extends Model
{
		

        public function caterings(){
    	return $this->hasMany(Caterings::class);
    }
            public function packages(){
    	return $this->hasMany(Packages::class);
    }

}
