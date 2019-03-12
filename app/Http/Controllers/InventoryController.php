<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Pinq\ITraversable, Pinq\Traversable;
use App\Inventory;
use App\Warehouses;
use App\InventoryCategories;
use PDF;
use Auth;
use App\Audits;
class InventoryController extends Controller
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
        $inventories = Inventory::all();
        $categories = InventoryCategories::all();
        $damages = Inventory::where('damage','>=','1')->get();
        $defects = Inventory::where('defect','>=','1')->get();
        return view('admin.inventory.index', compact('inventories','categories','damages','defects'));
    }
    public function pdf()
    {

    $pdf = \App::make('dompdf.wrapper');
     $inventories = Inventory::where('is_active', 1)->get();
    $pdf->loadView('reports.InventoryReport',compact('inventories'));
    return $pdf->stream();

    }  
    public function dmg()
    {

    $pdf = \App::make('dompdf.wrapper');
     $inventories = Inventory::where('damage','>=',1)->get();
    $pdf->loadView('reports.DamageReport',compact('inventories'));
    return $pdf->stream();

    } 
        public function dft()
    {

    $pdf = \App::make('dompdf.wrapper');
     $inventories = Inventory::where('defect','>=',1)->get();
    $pdf->loadView('reports.DefectReport',compact('inventories'));
    return $pdf->stream();

    }   
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
     $categories = InventoryCategories::all(); 
     $warehouses = Warehouses::all(); 
     return view('admin.inventory.create',compact('categories','warehouses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //|unique:inventories
        $inventories = new Inventory;
        $this->validate($request,[
            'item_code' => 'required|unique:inventories',
            'description' => 'required',
            'category' => 'required',   
            'warehouse' => 'required',        
            'quantity' => 'required',
            'price' => 'required',

        ]);
        $inventories->item_code = $request->item_code;
        $inventories->item_name = $request->description;
        $inventories->inventory_categories_id = $request->category;
        $inventories->warehouses_id = $request->warehouse ;
        $inventories->price = $request->price ;
        $inventories->stock_on_hand = $request->quantity;
        $inventories->save();

        //audits

        $data = array(
            "code" =>  $request->item_code,
            "description" => $request->description,
            "category" =>  $request->category,
            "warehouse" => $request->warehouse,
            "price" =>  $request->price,
            "stock" => $request->quantity,
            "damage"=> "0",
            "defect"=> "0"   
            );
        $audits = new Audits; 
        $audits->user = Auth::user()->name;
        $audits->event = 'created';
        $audits->audit_type = 'Inventory';
        $audits->new_values =  $data;
        $audits->save();
        //audits
       session()->flash('flash_message_success','Successfully Created');
        return response()->redirectTo('admin/inventory');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function show($id)
    {
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventories = Inventory::find($id);
        $categoryId = Inventory::find($id)->category;
        $warehouseId = Inventory::find($id)->warehouse;
        $categories = InventoryCategories::all();
        $warehouses = Warehouses::all();
        // return $inventories;
        return view('admin.inventory.edit',compact('inventories','categories','categoryId','warehouseId','warehouses'));

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
        
        //audits
        $old_data = array(
            "code" =>  $inventories->item_code,
            "description" => $inventories->description,
            "category" =>  $inventories->category,
            "warehouse" => $inventories->warehouse,
            "price" =>  $inventories->price,
            "stock" => $inventories->quantity,
            "damage"=> $inventories->damage,
            "defect"=> $inventories->defect  
            );
        $data = array(
            "code" =>  $request->item_code,
            "description" => $request->description,
            "category" =>  $request->category,
            "warehouse" => $request->warehouse,
            "price" =>  $request->price,
            "stock" => $request->quantity,
            "damage" => $request->damage + $inventories->damage,
            "defect" => $request->defect + $inventories->defect,
                
            );
        $audits = new Audits; 
        $audits->user = Auth::user()->name;
        $audits->event = 'updated';
        $audits->audit_type = 'Inventory';
        $audits->new_values =  $data;
        $audits->old_values =  $old_data;
        $audits->save();
        //audits

        $this->validate($request,[
            'item_code' => 'required',
            'description' => 'required',
            'category' => 'required',    
            'warehouse' => 'required',         
            'price' => 'required',
        ]);
        $inventories->item_code = $request->item_code;
        $inventories->item_name = $request->description;
        $inventories->inventory_categories_id = $request->category;
        $inventories->warehouses_id = $request->warehouse;
        $inventories->price = $request->price ;
        $inventories->damage = $request->damage + $inventories->damage;
        $inventories->defect = $request->defect + $inventories->defect;
        
        $inventories->stock_on_hand = $request->quantity + $inventories->stock_on_hand - ($request->damage + $request->defect); 

        $inventories->save();
        return response()->redirectTo('admin/inventory');
    }
        public function updateStatus(Request $request,$id){
         $inventories = Inventory::find($id);
    if($inventories->is_active == true){
        $inventories->is_active = false;
        $inventories->save();
        return response()->redirectTo('/admin/inventory');
        }
    else if($inventories->is_active == false){
        $inventories->is_active = true;
        $inventories->save();
        return response()->redirectTo('/admin/inventory');
        }
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventories = Inventory::find($id);
        $inventories->delete();
        session()->flash('flash_message_success','Successfully Deleted');
       return response()->redirectTo('/admin/inventory');
    }



}