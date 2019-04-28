<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caterings;
use App\Contents;
use App\Venues;
use App\Customers;
use App\Packages;
use App\Reservations;
use App\Reserves;
use App\Discounts;
use App\EventCategories;
use App\Inventory;

class EditReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //admin/editreservation/{editreservation}/edit
        //admin/editreservation/{editreservation}

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $catering = Caterings::all();
        $package = Packages::where('is_active',1)->get();
        $venue = Venues::where('is_active',1)->get();
        

        $venueId = Venues::find($id);
        $packageId = Package::find($id);
        $categoryId = Caterings::find($id);
        $reserveId = Reservation::find($id);
 
    

        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();

        return view('admin.reservation.edit',compact('caterings','package','venue','alert','venueId','packageId','categoryId','reserveId'));
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
        return "yes";
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