<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Packages;
use App\Audits;
use App\EventCategories;
use PDF;
use Auth;
use App\Inventory;
class FoodController extends Controller
{
         public function __construct()
    {
        $this->middleware('admin');

       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
          $food = Packages::all();
        return view('admin.food.index',compact('food','alert'));
    }

    public function pdf()
    {

    $pdf = \App::make('dompdf.wrapper');
     $foods = Packages::where('is_active',1)->take(12)->get();
    $pdf->loadView('reports.PackageReport',compact('foods'));
    return $pdf->stream();

    }  


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
        $eventcategories = EventCategories::all();
        return view('admin.food.create',compact('eventcategories','alert'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
           $this->validate($request,[
            'name' => 'required|unique:packages',
            'inclusion' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'file' => 'required',
        ]);
     
        if($request->hasFile('file')){
            $file = $request->file('file');
            $filename = $request->file->getClientOriginalName();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $filename);
        $food = new Packages;
            $this->validate($request,[
            'name' => 'required|unique:packages',
            'inclusion' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'file' => 'required',
        ]);
        $food->name = $request->name;
        $food->inclusion = $request->inclusion;
        $food->price = $request->price;
        $food->event_categories_id = $request->category;
        $food->file = $filename;
        $food->save();

        //audits

        $data = array(
            "name" =>  $request->name,
            "inclusion" => $request->inclusion,
            "price" => $request->price,
            "category" => $request->category,
            "file" => $filename,
    
            );
        $audits = new Audits; 
        $audits->user = Auth::user()->name;
        $audits->event = 'created';
        $audits->audit_type = 'Package';
        $audits->new_values =  $data;
        $audits->old_values =  'No Data';
        $audits->save();
            //audits
        return response()->redirectTo('admin/food');              
        }
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
        $packagesId = Packages::find($id)->category;

        $eventcategories = EventCategories::all(); 
        $food = Packages::find($id);
        return view('admin.food.edit',compact('food','eventcategories','packagesId','alert'));
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
         $food = Packages::find($id);

        
        if($request->hasFile('file')){
                $file = $request->file('file');
        $filename = $request->file->getClientOriginalName();
        $destinationPath = public_path('/images');
        $file->move($destinationPath, $filename);
                //audits
                $old_data = array(
                    "name" =>  $food->name,
                    "inclusion" => $food->inclusion,
                    "price" => $food->price,
                    "category" => $food->category,
                    "file" => $food->file
                    );
                $data = array(
                    "name" =>  $request->name,
                    "inclusion" => $request->inclusion,
                    "price" => $request->price,
                    "category" => $request->category,
                    "file" => $filename
            
                    );
                $audits = new Audits; 
                $audits->user = Auth::user()->name;
                $audits->event = 'updated';
                $audits->audit_type = 'Package';
                $audits->new_values =  $data;
                $audits->old_values =  $old_data;
                $audits->save();
                //audits
        $request->file->storeAs('public/upload',$filename);
            $this->validate($request,[
            'name' => 'required',
            'inclusion' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'file' => 'required',
        ]);
        $food->name = $request->name;
        $food->inclusion = $request->inclusion;
        $food->price = $request->price;
        $food->event_categories_id = $request->category;
        $food->file = $filename;
        $food->save();

        
        return response()->redirectTo('admin/food');      
               
        }else{
       $food = Packages::find($id);
           //audits
           $old_data = array(
            "name" =>  $food->name,
            "inclusion" => $food->inclusion,
            "price" => $food->price,
            "category" => $food->category,
            "file" => $food->file
            );
        $data = array(
            "name" =>  $request->name,
            "inclusion" => $request->inclusion,
            "price" => $request->price,
            "category" => $request->category,
            "file" => $food->file
    
            );
        $audits = new Audits; 
        $audits->user = Auth::user()->name;
        $audits->event = 'updated';
        $audits->audit_type = 'Package';
        $audits->new_values =  $data;
        $audits->old_values =  $old_data;
        $audits->save();
        //audits
            $this->validate($request,[
            'name' => 'required',
            'category' => 'required',
            'inclusion' => 'required',
            'price' => 'required|numeric',
        ]);
        $food->name = $request->name;
        $food->inclusion = $request->inclusion;
        $food->event_categories_id = $request->category;
        $food->price = $request->price;
        $food->save();
        
         return response()->redirectTo('/admin/food');
        }
    }


    public function updateStatus(Request $request,$id){
         $food = Packages::find($id);
    if($food->is_active == true){
        $food->is_active = false;
        $food->save();
        // session()->flash('flash_message_success','Successfully Updated');
        return response()->redirectTo('/admin/food');
        }
    else if($food->is_active == false){
        $food->is_active = true;
        $food->save();
        // session()->flash('flash_message_success','Successfully Updated');
        return response()->redirectTo('/admin/food');
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
        $food = Packages::find($id);
        $food->delete();
        session()->flash('flash_message_success','Successfully Deleted');
       return response()->redirectTo('/admin/food');
    }
}
