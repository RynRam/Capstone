<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
use Illuminate\Support\Facades\Auth;
class CustomerProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('customerprofileauth')->except('logout');
    }
    public function edit($id)
    {
       $customer = Customer::find($id);
       return view('front.profile',compact('customer')); 
        
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
        $customer = Customer::find($id);
        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'contact' => 'required|size:11',
            'address' => 'required',
        ]);
        
            $customer->lname = $request->lname;
            $customer->fname = $request->fname;
            $customer->contact = $request->contact;
            $customer->address = $request->address;
            $customer->email = $request->email;
            $customer->facebook = $request->facebook;
            $customer->twitter = $request->twitter;
            $customer->gplus = $request->gplus;
            $customer->password = bcrypt($request->password);
            $customer->save();
        return redirect("/");
    }


}
