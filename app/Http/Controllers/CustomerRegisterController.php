<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Customer;
use Mail;
use App\Mail\Verifyemail;
use Session;
use Sichikawa\LaravelSendgridDriver\SendGrid;

class CustomerRegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('customerauth')->except('logout');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.account');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.account');
    }
    public function verifyFirst(Customer $customer){
        return view("email.VerifyEmailFirst");
    }

    public function verifyDone(Customer $customer){
        
    }
    use SendGrid;
    public function sendEmail($customer){
  
        Mail::to($customer["email"])->send(new Verifyemail($customer));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer;
        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|unique:customers',
            'contact' => 'required|size:11',
            'address' => 'required',
        ]);
        
            $customer->lname = $request->lname;
            $customer->fname = $request->fname;
            $customer->contact = $request->contact;
            $customer->address = $request->address;
            $customer->email = strtolower($request->email);
            $customer->facebook = $request->facebook;
            $customer->twitter = $request->twitter;
            $customer->gplus = $request->gplus;
            $customer->is_verified = 0;
            $customer->verification_token = Str::random(40);
            $customer->password = bcrypt($request->password);
            $customer->save();
        
        $insertedCustomer = Customer::findOrFail($customer->id);
        $this->sendEmail($insertedCustomer);
        Session::flash('status','Please verify your email before logging in.');
        return response()->redirectTo('/customer-login');
    
       
    }
    public function sendEmailDone($email, $verification_token)
    {
        $customer = Customer::where(['email'=>$email,'verification_token'=>$verification_token])->first();
        if($customer){
            Customer::where(['email'=>$email,'verification_token'=>$verification_token])->update(['is_verified'=>'1','verification_token'=>NULL]);
            return response()->redirectTo('/customer-login');
        }else{
            'user not found';
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
        //
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
        //
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
