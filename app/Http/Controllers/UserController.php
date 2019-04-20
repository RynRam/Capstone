<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audits;
use App\User;
use Auth;
use Session;
use App\Inventory;
class UserController extends Controller
{
         public function __construct()
    {
        $this->middleware('account');

       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
        return view('admin.usersManagement.index', compact('users','alert'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
        return view('admin.usersManagement.create',compact('alert'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User;

        $this->validate($request,[
           'name' => 'required|string|max:255',
           'email' => 'required|string|email|max:255|unique:users',
           'password' => 'required|string|min:6|confirmed',
           'role' => 'required|in:admin,reservation,sales,inventory,manpower,venue,account,audit', 
        ]);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->role_id = $request->role;
        $users->password = bcrypt($request->password);
        $users->save();

        //audits
        $data = array(
            "name" =>  $request->name,
            "email" => $request->email,
            "role" =>  $request->role
            );
        $audits = new Audits; 
        $audits->user = Auth::user()->name;
        $audits->event = 'created';
        $audits->audit_type = 'User Account';
        $audits->new_values =  $data;
        $audits->old_values =  ' ';
        $audits->save();
        //audits
        Session::flash('status','Account Created!');
        
        return response()->redirectTo('/admin/user');
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
       $users = User::find($id);
       $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
       
        return view('admin.usersManagement.edit',compact('users','alert'));
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
       $users = new User;


        //audits
        $old_data = array(
        "name" =>  $users->name,
        "email" => $users->email,
        "role" =>  $users->role
        );
        $data = array(
        "name" =>  $request->name,
        "email" => $request->email,
        "role" =>  $request->role
        );
        $audits = new Audits; 
        $audits->user = Auth::user()->name;
        $audits->event = 'updated';
        $audits->audit_type = 'User Account';
        $audits->new_values =  $data;
        $audits->old_values =  $old_data;
        $audits->save();
        //audits
        $this->validate($request,[
           'name' => 'required|string|max:255',
           'email' => 'required|string|email|max:255',
           'password' => 'required|string|min:6|confirmed',
           'role' => 'required|in:admin,reservation,sales,logistics,hr,venue,account,audit', 
        ]);
        $users->name = $request->name;
        $users->email = strtolower($request->email);
        $users->role_id = $request->role;
        $users->password = bcrypt($request->password);
        $users->save();
        return response()->redirectTo('/admin');
    }

    public function updateStatus(Request $request,$id){
         $user = User::find($id);
        if($user->is_active == true){
        $user->is_active = false;
        $user->save();
        session()->flash('flash_message_success','Successfully Updated');
        return response()->redirectTo('/admin/user');
        }
        else if($user->is_active == false){
        $user->is_active = true;
        $user->save();
        session()->flash('flash_message_success','Successfully Updated');
        return response()->redirectTo('/admin/user');
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
       //  $users = User::find($id);
       //  $users->delete();
       //  session()->flash('flash_message_success','Successfully Deleted');
       // return response()->redirectTo('/admin/user');
    }
}
