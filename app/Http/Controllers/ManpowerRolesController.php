<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManpowerRoles;
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
        return view('admin.manpower.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manpower.roles.create');
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

        return redirect('admin/manpowerroles');
    }

    public function updateStatus(Request $request,$id){
         $roles = ManpowerRoles::find($id);
        if($roles->is_active == true){
        $roles->is_active = false;
        $roles->save();
        return redirect('/admin/manpowerroles');
        }
        else if($roles->is_active == false){
        $roles->is_active = true;
        $roles->save();
        return redirect('/admin/manpowerroles');
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
