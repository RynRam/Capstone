<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caterings;
use App\EventCategories;

class CategoryController extends Controller
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
         
        
         // dd($eventcategories->caterings->event_categories_id);
         //  return view('admin.category.index');  
         $caterings = Caterings::all();
          $eventcategories = EventCategories::all();
         // return $eventcategories;
        return view('admin.category.index',compact('caterings','eventcategories'));


              }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        
        $caterings = Caterings::all();      
        $eventcategories = EventCategories::all();

        return view('admin.category.create',compact('caterings','eventcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $caterings = new Caterings; 
            $this->validate($request,[
            'name' => 'required|unique:caterings',
            ]);
            $caterings->name =  $request->name;
            $caterings->event_categories_id = $request->category;

            $caterings->save();
            return redirect('/admin/category');
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
        $caterings = Caterings::find($id);
        $categoryId = Caterings::find($id)->category;
 
        $eventcategories = EventCategories::all(); 

  

        return view('admin.category.edit',compact('caterings','eventcategories','categoryId'));
        // return 'hello';
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
// return $request->all();
        $caterings = Caterings::find($id); 
        $this->validate($request,[
        'name' => 'required',
        ]);
        $caterings->event_categories_id = $request->category;
        $caterings->name =  $request->name;
        $caterings->save();
        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catering = Caterings::find($id);
        $catering->delete();
       return redirect('/admin/category');
    }
}








