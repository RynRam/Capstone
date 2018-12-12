<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
class Reservations extends Model implements Auditable
{     
	use \OwenIt\Auditing\Auditable; 
	protected $fillable = ['fname','lname','email','contact','address','venuename','package_id','eventdate','category_id','total','guest'];
	 public function package()
	 {
	 	return $this->belongsTo(Packages::class);
	 }

 	 public function category()
	 {
	 	return $this->belongsTo(Caterings::class);
	 }
       public function payment(){
    	return $this->hasMany(Payments::class);
    }
}


