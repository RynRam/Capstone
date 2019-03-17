<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;
class CriticalStockController extends Controller
{
    public function __construct()
    {
        $this->middleware('logistic');

       
    }
    public function index()
    {
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
        $stocks = Inventory::where('stock_on_hand', '<=', '80')->get();
        return view('admin.inventory.critical.index',compact('stocks','alert'));
    }

    public function edit($id)
    {
        $stocks = Inventory::find($id);

        // // // return $inventories;
        // return view('admin.inventory.critical.index',compact('stocks'));
    }

    public function update(Request $request, $id)
    {
        $inventories = Inventory::find($id);

        $inventories->stock_on_hand = $inventories->stock_on_hand + $request->stock;
        $inventories->save();

        return response()->redirectTo('/admin/inventory-critical');
    }


}
