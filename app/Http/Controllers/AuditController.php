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
        // $reservation = Reservations::first();
        //  $ecategories = EventCategories::first();
        //  $inventory = Inventory::first();
        //  $audit = $inventory->audits;
        //  $reservations = $reservation->audits;
        //  $ecategories = $ecategories->audits;
        //  // return $audits;
        return view('admin.audit.index',compact('audit','reservations','ecategories'));
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
