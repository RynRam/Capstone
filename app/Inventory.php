<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
class Inventory extends Model
{
		
   protected $fillable = ['item_code','item_name','price','inventory_categories_id','stock_on_hand'];
  
   public function user(){
   	
   		return $this->belongsTo(User::class);
   }

      public function category(){
   	
   		return $this->belongsTo(InventoryCategories::class,'inventory_categories_id');
   }

      public function warehouse(){
      
         return $this->belongsTo(Warehouses::class,'warehouses_id');
   }


   
}
