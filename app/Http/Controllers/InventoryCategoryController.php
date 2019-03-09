<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InventoryCategories;
class InventoryCategoryController extends Controller
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
        
        $categories = InventoryCategories::all();
        return view('admin.inventory.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inventory.category.create');  
  }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $categories = new InventoryCategories; 

        $this->validate($request,[
            'category' => 'required|unique:inventory_categories',
            'description' => 'required',

        ]);
         
        $categories->category = $request->category ;
        $categories->description = $request->description;
        $categories->save();
        return response()->redirectTo('admin/inventory-category');  
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
      $category = InventoryCategories::find($id);
    
        return view('admin.inventory.category.edit',compact('category'));
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
        $categories = InventoryCategories::find($id); 

        $this->validate($request,[
            'category' => 'required',
            'description' => 'required',

        ]);
         
        $categories->category = $request->category ;
        $categories->description = $request->description;
        $categories->save();
        return response()->redirectTo('admin/inventory-category');  

    }
        public function updateStatus(Request $request,$id){
         $categories = InventoryCategories::find($id);
    if($categories->is_active == true){
        $categories->is_active = false;
        $categories->save();
        session()->flash('flash_message_success','Successfully Updated');
        return response()->redirectTo('/admin/inventory-category');
        }
    else if($categories->is_active == false){
        $categories->is_active = true;
        $categories->save();
        session()->flash('flash_message_success','Successfully Updated');
        return response()->redirectTo('/admin/inventory-category');
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
        //
    }
}
