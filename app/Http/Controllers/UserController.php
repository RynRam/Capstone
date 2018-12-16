<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
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
        
        return view('admin.usersManagement.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usersManagement.create');
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
        Session::flash('status','Account Created!');
        return redirect()->back();
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
       
        return view('admin.usersManagement.edit',compact('users'));
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

        $this->validate($request,[
           'name' => 'required|string|max:255',
           'email' => 'required|string|email|max:255',
           'password' => 'required|string|min:6|confirmed',
           'role' => 'required|in:admin,reservation,sales,logistics,hr,venue,account,audit', 
        ]);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->role_id = $request->role;
        $users->password = bcrypt($request->password);
        $users->save();
        return redirect('/admin');
    }

    public function updateStatus(Request $request,$id){
         $user = User::find($id);
        if($user->is_active == true){
        $user->is_active = false;
        $user->save();
        session()->flash('flash_message_success','Successfully Updated');
        return redirect('/admin/user');
        }
        else if($user->is_active == false){
        $user->is_active = true;
        $user->save();
        session()->flash('flash_message_success','Successfully Updated');
        return redirect('/admin/user');
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
       // return redirect('/admin/user');
    }
}
