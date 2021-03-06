<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManpowerRoles;
use App\Audits;
use App\Inventory;
use Auth;
class ManpowerRolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('hr');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = ManpowerRoles::all();
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
        return view('admin.manpower.roles.index',compact('roles','alert'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
        return view('admin.manpower.roles.create',compact('alert'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $roles = new ManpowerRoles;
        $this->validate($request,[
            'name' => 'required|unique:manpower_roles',
             
        ]);

        $roles->name = $request->name;

        $roles->save();

    //audits
    $data = array(
        "name" =>  $request->name
        );
        $audits = new Audits; 
        $audits->user = Auth::user()->name;
        $audits->event = 'created';
        $audits->audit_type = 'Role';
        $audits->new_values =  $data;
        $audits->old_values =  'No Data';
        $audits->save();
        //audits
        return response()->redirectTo('admin/manpowerroles');
    }

    public function updateStatus(Request $request,$id){
         $roles = ManpowerRoles::find($id);
        if($roles->is_active == true){
        $roles->is_active = false;
       
        $roles->save();
        return response()->redirectTo('/admin/manpowerroles');
        }
        else if($roles->is_active == false){
        $roles->is_active = true;
       
        $roles->save();
        return response()->redirectTo('/admin/manpowerroles');
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
