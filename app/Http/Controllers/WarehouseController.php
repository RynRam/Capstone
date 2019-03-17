<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warehouses;
use App\Audits;
use Auth;
use App\Inventory;
class WarehouseController extends Controller
{

             public function __construct()
    {
        $this->middleware('logistic');

       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
        $warehouses = Warehouses::all();
        return view('admin.inventory.warehouse.index',compact('warehouses','alert'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $warehouses = new Warehouses;
        $this->validate($request,[
        'name' => 'required|unique:warehouses',
        ]);
        $warehouses->name =  $request->name;
        $warehouses->save();
        //audits
        $data = array(
            "name" =>  $request->name,
            );
        $audits = new Audits; 
        $audits->user = Auth::user()->name;
        $audits->event = 'created';
        $audits->audit_type = 'Warehouse';
        $audits->new_values=  $data;
        $audits->old_values=  'No Data';

        $audits->save();
        //audits
        return response()->redirectTo('/admin/warehouse');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
 * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
        $warehouseId = Warehouses::find($id);
        return view('admin.inventory.warehouse.edit',compact('warehouseId','alert'));
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
        $warehouses = Warehouses::find($id);
                     //audits
        $old_data = array(
        "name" =>  $warehouses->name
        
        );
        $data = array(
            "name" =>  $request->name
            );
        $audits = new Audits; 
        $audits->user = Auth::user()->name;
        $audits->event = 'updated';
        $audits->audit_type = 'Warehouse';
        $audits->new_values=  $data;
        $audits->old_values=  $old_data;
        $audits->save();
        
        //audits
        $this->validate($request,[
        'name' => 'required',
        ]);
        $warehouses->name =  $request->name;
        $warehouses->save();
   
        return response()->redirectTo('/admin/warehouse');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
