<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservations;
use App\Payments;
class PaymentController extends Controller
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
        $payments = Payments::all();
        
        return view('admin.payment.index',compact('payments'));
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
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservations = Reservations::find($id);
        $payments = new Payments;
        $this->validate($request,[
            'reserveid' => 'required',
            'tender' => 'required',
            'terms' => 'required',   

        ]);
        
        $payments->reservations_id = $request->reserveid;
        $payments->amount_payment = $request->tender;
        $payments->percentage = $request->terms;
        $payments->change = $request->change;
        $payments->balance = $request->balance;
        $payments->save();
        return redirect('admin/payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $pdf = \App::make('dompdf.wrapper');
           $payments = Payments::find($id);
           $pdf->loadView('reports.PaymentReceipt',compact('payments'));
           return $pdf->stream();
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
        $total = $reservations->total;

        return view('admin.payment.edit',compact('reservations','total'));
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
