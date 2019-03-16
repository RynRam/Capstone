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
        $stocks = Inventory::where('stock_on_hand', '<=', '80')->get();
        return view('admin.inventory.critical.index',compact('stocks'));
    }

    public function edit($id)
    {
        $stocks = Inventory::find($id);

        // // return $inventories;
        return view('admin.inventory.critical.index',compact('stocks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inventories = Inventory::find($id);

        $inventories->stock_on_hand = $inventories->stock_on_hand + $request->critical;
        $inventories->save();

        return response()->redirectTo('/admin/inventory-critical');
    }


}
