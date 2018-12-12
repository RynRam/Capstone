<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
	protected $fillable = ['reservations_id','date_invoice','amount_payment','percentage'];
     	 public function reservation()
	 {

	 	return $this->belongsTo(Reservations::class,'reservations_id');
	 }
}
