<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discounts;
class DiscountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discounts = Discounts::all();
        return view('admin.discount.index',compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.discount.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                $discounts = new Discounts;
        $this->validate($request,[
            'name' => 'required|unique:discounts',
            'description' => 'required',
            'discount' => 'required',   

        ]);
        $discounts->name = $request->name;
        $discounts->description = $request->description;
        $discounts->discount = $request->discount;
        $discounts->save();

        return redirect('admin/discount');
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
        $discounts = Discounts::find($id);
           return view('admin.discount.edit',compact('discounts'));
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
       $discounts = Discounts::find($id);
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'discount' => 'required',   

        ]);
        $discounts->name = $request->name;
        $discounts->description = $request->description;
        $discounts->discount = $request->discount;
        $discounts->save();

        return redirect('admin/discount');
    }

    public function updateStatus(Request $request,$id){
         $discounts = Discounts::find($id);
    if($discounts->is_active == true){
        $discounts->is_active = false;
        $discounts->save();
        // session()->flash('flash_message_success','Successfully Updated');
        return redirect('/admin/discount');
        }
    else if($discounts->is_active == false){
        $discounts->is_active = true;
        $discounts->save();
        // session()->flash('flash_message_success','Successfully Updated');
        return redirect('/admin/discount');
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
