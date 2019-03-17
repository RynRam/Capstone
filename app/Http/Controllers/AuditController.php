<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audits;
use App\Venues;
use App\Reservations;
use App\Inventory;
use App\EventCategories;
class AuditController extends Controller
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
         $alert = Inventory::where('stock_on_hand', '<=', '80')->count();
        $audits=Audits::all();
        $category= Audits::where('audit_type','Category')->get();
        $cms= Audits::where('audit_type','Post')->get();
        $discount= Audits::where('audit_type','Discount')->get();
        $package= Audits::where('audit_type','Package')->get();
        $inventorycategory= Audits::where('audit_type','Inventory Category')->get();
        $inventory= Audits::where('audit_type','Inventory')->get();
        $manpower= Audits::where('audit_type','Staff')->get();
        $roles= Audits::where('audit_type','Role')->get();
        $payment= Audits::where('audit_type','Payment')->get();
        $user= Audits::where('audit_type','User Account')->get();
        $venue= Audits::where('audit_type','Venue')->get();
        $warehouse= Audits::where('audit_type','Warehouse')->get();
        return view('admin.audit.index',compact('category','cms','discount','package','inventorycategory','inventory','manpower','roles','payment','user','venue','warehouse','audits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
