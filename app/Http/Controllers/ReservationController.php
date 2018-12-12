<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservations;
use App\Packages;
use Pinq\ITraversable, Pinq\Traversable;
use App\Payments;
class ReservationController extends Controller
{
         public function __construct()
    {
        $this->middleware('reservation');

       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $reservations = Reservations::all();
        
        foreach ($reservations as $reservation) {
            $id = $reservation->id;
             $reservation->category = Reservations::find($id)->category;
            $reservation->package = Reservations::find($id)->package;
            $reservation->venue = Reservations::find($id)->venue;

            $reservation->payment = Reservations::find($id)->payment;
            $reservation->total_paid = 0;
            foreach ($reservation->payment as $paid) {
                $reservation->total_paid += $paid->amount_payment;
                }
            
        }     
        // return $reservations;
        return view ('admin.reservation.index',compact('reservations'));
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
      $reservations = Reservations::find($id);
     
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
        $reservations = Reservations::find($id);
        $reservations->fname = $reservations->fname;
        $reservations->lname = $reservations->lname;
        $reservations->email = $reservations->email;
        $reservations->contact = $reservations->contact;
        $reservations->address = $reservations->address;

        $reservations->venuename = $reservations->venuename;
        $reservations->package_id = $reservations->package_id;
        $reservations->eventdate = $reservations->eventdate;
        $reservations->category_id = $reservations->category_id;
        $reservations->guest = $reservations->guest;
        $discount = $request->discount;
        $discounts = $reservations->total * ($discount / 100);
        $reservations->total = $reservations->total - $discounts;
        $reservations->save();      
        return redirect('/admin/reservation');  

    }
    
        public function updateStatus(Request $request, $id){
         $reservations = Reservations::find($id);
        if($reservations->is_approved == true) {
            $reservations->is_approved = false;
            $reservations->save();
            return redirect('/admin/reservation');
        }else if($reservations->is_approved == false ){
            $reservations->is_approved = true;
            $reservations->save();
           return redirect('/admin/reservation');
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

   
    }
}
