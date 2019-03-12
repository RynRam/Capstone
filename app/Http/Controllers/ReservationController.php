<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservations;
use App\Customer;
use App\Packages;
use App\Audits;
use App\Venues;
use App\Caterings;

use Pinq\ITraversable, Pinq\Traversable;
use App\Payments;
use Session;

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
            $reservation->customer = Reservations::find($id)->customer;
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
        Session::put('reservations', [
            'from' => $request->from,
            'to' => $request->to
            ]);  
            return response()->redirectTo('admin/reservationpdf');
    }

    public function pdf()
    {
    $from = Session::get('reservations')['from'];
    $to = Session::get('reservations')['to'];
    $pdf = \App::make('dompdf.wrapper');
    $dates = Reservations::whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();
    $sales = Reservations::whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to);
    $pdf->loadView('reports.ReservationsReport',compact('sales','from','to','dates'));
    return $pdf->stream();
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
        $reservations->venues_id = $reservations->venues_id;
        $reservations->package_id = $reservations->package_id;
        $reservations->eventdate = $reservations->eventdate;
        $reservations->category_id = $reservations->category_id;
        $reservations->guest = $reservations->guest;
        $discount = $request->discount;
        $discounts = $reservations->total * ($discount / 100);
        $reservations->total = $reservations->total - $discounts;
        $reservations->save();      
        return response()->redirectTo('/admin/reservation');  

    }
    
        public function updateStatus(Request $request, $id){
         $reservations = Reservations::find($id);
        if($reservations->is_approved == true) {
            $reservations->is_approved = false;
            $reservations->save();
            return response()->redirectTo('/admin/reservation');
        }else if($reservations->is_approved == false ){
            $reservations->is_approved = true;
            $reservations->save();
           return response()->redirectTo('/admin/reservation');
        }
    }

    public function eventdatepdf()
    {


    $edate = Session::get('reservations_eventdate')['eventdate'];
    $pdf = \App::make('dompdf.wrapper');
    $eventdates = Reservations::where('eventdate',$edate)->get();
    $pdf->loadView('reports.ReservationsEventReport',compact('eventdates','amount'));
    return $pdf->stream();
    }

    public function eventdate(Request $request)
    {
        Session::put('reservations_eventdate', [
            'eventdate' => $request->eventdate,
            ]);  
            return response()->redirectTo('admin/reservationseventdatepdf');
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
