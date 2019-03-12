<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staffs;
use App\ManpowerRoles;
use PDF;
use App\Reservations;
use App\Audits;
use Auth;
class ManpowerController extends Controller
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
    {   date_default_timezone_set('Asia/Manila');
        $todaydate = date("Y-m-d");
        $reservationsIncoming = Reservations::whereDate('eventdate', '>=', $todaydate)->where('is_approved',1)->first();
        $reservationsIncoming2 = Reservations::whereDate('eventdate', '>=', $todaydate)->where('is_approved',1)->skip(1)->first();
        
        $staffs = Staffs::all();
        $assign1 = Staffs::where('is_assign','Assign 1')->where('is_active',1)->get();
        $assign2 = Staffs::where('is_assign','Assign 2')->where('is_active',1)->get();
        return view ('admin.manpower.index',compact('staffs','assign1','assign2','reservationsIncoming','reservationsIncoming2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function pdf()
    {

    $pdf = \App::make('dompdf.wrapper');
    $assign1 = Staffs::where('is_assign','Assign 1')->where('is_active',1)->get();
    $pdf->loadView('reports.Reservation1Report',compact('assign1'));
    return $pdf->stream();

    }  
        public function pdfreserve()
    {

    $pdf = \App::make('dompdf.wrapper');
    $assign2 = Staffs::where('is_assign','Assign 2')->where('is_active',1)->get();
    $pdf->loadView('reports.Reservation2Report',compact('assign2'));
    return $pdf->stream();

    }  
    public function create()
    {
        $roles = ManpowerRoles::where('is_active',1)->get();
         return view('admin.manpower.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $staffs = new Staffs; 
            $this->validate($request,[
            'firstname' => 'required|unique:staffs',
            'lastname' => 'required',
            'assign' => 'required',
            'role' => 'required',
            ]);
            $staffs->firstname =  $request->firstname;
            $staffs->lastname = $request->lastname;
            $staffs->roles = $request->role;
            $staffs->is_assign = $request->assign;
            $staffs->save();

            
            //audits
            $data = array(
                "fname" =>  $request->firstname,
                "lname" => $request->lastname,
                "assign" =>  $request->assign,
                "role" => $request->role   
                );
            $audits = new Audits; 
            $audits->user = Auth::user()->name;
            $audits->event = 'created';
            $audits->audit_type = 'Staff';
            $audits->new_values =  $data;
            $audits->save();
            //audits
            
           return response()->redirectTo('/admin/manpower');
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
        $roles = ManpowerRoles::where('is_active',1)->get();
        $staffs = Staffs::find($id);
     return view('admin.manpower.edit',compact('staffs','roles'));
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
         $staffs = Staffs::find($id); 
        //audits
        $old_data = array(
            "fname" =>  $staffs->firstname,
            "lname" => $staffs->lastname,
            "assign" =>  $staffs->assign,
            "role" => $staffs->role   
            );
        $data = array(
        "fname" =>  $request->firstname,
        "lname" => $request->lastname,
        "assign" =>  $request->assign,
        "role" => $request->role   
        );
        $audits = new Audits; 
        $audits->user = Auth::user()->name;
        $audits->event = 'updated';
        $audits->audit_type = 'Staff';
        $audits->new_values =  $data;
        $audits->old_values =  $old_data;
        $audits->save();
        //audits
        $this->validate($request,[
        'firstname' => 'required',
        'lastname' => 'required',
        'assign' => 'required',
        'role' => 'required',
        ]);
        $staffs->firstname =  $request->firstname;
        $staffs->lastname = $request->lastname;
        $staffs->roles = $request->role;
        $staffs->is_assign = $request->assign;
        $staffs->save();
       return response()->redirectTo('/admin/manpower');
    }

    public function updateStatus(Request $request,$id){
         $staffs = Staffs::find($id);
        if($staffs->is_active == true){
        $staffs->is_active = false;
        $staffs->save();
       return response()->redirectTo('/admin/manpower');
        }
        else if($staffs->is_active == false){
        $staffs->is_active = true;
        $staffs->save();
       return response()->redirectTo('/admin/manpower');
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
