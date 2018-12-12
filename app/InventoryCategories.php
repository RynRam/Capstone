<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
class InventoryCategories extends Model implements Auditable
{
    	use \OwenIt\Auditing\Auditable;
    protected $fillable = ['category','description'];
  
    public function inventory(){
   	
   		return $this->hasOne(Inventory::class,'inventory_categories_id');
   }
}
