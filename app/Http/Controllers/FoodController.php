<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Packages;
use App\EventCategories;
use PDF;
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
          $food = Packages::all();
        return view('admin.food.index',compact('food'));
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
        $eventcategories = EventCategories::all();
        return view('admin.food.create',compact('eventcategories'));
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
        $filename = $request->file->getClientOriginalName();
        $request->file->storeAs('public/upload',$filename);
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
        return redirect('admin/food');              
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
        $packagesId = Packages::find($id)->category;

        $eventcategories = EventCategories::all(); 
        $food = Packages::find($id);
        return view('admin.food.edit',compact('food','eventcategories','packagesId'));
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
        $filename = $request->file->getClientOriginalName();
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
        return redirect('admin/food');      
               
        }else{
       $food = Packages::find($id);
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
   
         return redirect('/admin/food');
        }
    }


    public function updateStatus(Request $request,$id){
         $food = Packages::find($id);
    if($food->is_active == true){
        $food->is_active = false;
        $food->save();
        // session()->flash('flash_message_success','Successfully Updated');
        return redirect('/admin/food');
        }
    else if($food->is_active == false){
        $food->is_active = true;
        $food->save();
        // session()->flash('flash_message_success','Successfully Updated');
        return redirect('/admin/food');
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
       return redirect('/admin/food');
    }
}
