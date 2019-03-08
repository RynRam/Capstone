<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warehouses;
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
                
        $warehouses = Warehouses::all();
        return view('admin.inventory.warehouse.index',compact('warehouses'));
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
        return redirect('/admin/warehouse');
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
               $warehouseId = Warehouses::find($id);
               return view('admin.inventory.warehouse.edit',compact('warehouseId'));
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
        $this->validate($request,[
        'name' => 'required',
        ]);
        $warehouses->name =  $request->name;
        $warehouses->save();
        return redirect('/admin/warehouse');
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
