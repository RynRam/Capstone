<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caterings extends Model 
{	

	protected $fillable= ['name', 'categoryId'];

    public function category(){
    	return $this->belongsTo(EventCategories::class,'event_categories_id');
    }
    public function reservation(){
    	return $this->hasOne(Reservations::class,'package_id');
    }
}
