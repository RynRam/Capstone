<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouses extends Model
{
    protected $fillable = ['name'];
        public function inventory(){
   	
   		return $this->hasOne(Inventory::class,'warehouses_id');
   }
}
