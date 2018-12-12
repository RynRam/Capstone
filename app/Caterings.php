<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
class Caterings extends Model implements Auditable
{	
	use \OwenIt\Auditing\Auditable;
	protected $fillable= ['name', 'categoryId'];

    public function category(){
    	return $this->belongsTo(EventCategories::class,'event_categories_id');
    }
    public function reservation(){
    	return $this->hasOne(Reservations::class,'package_id');
    }
}
