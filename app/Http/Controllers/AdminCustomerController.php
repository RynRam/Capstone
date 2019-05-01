<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Inventory;
use Session;
class AdminCustomerController extends Controller
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
        $customers=  Customer::all();
        return view('admin.customer.index',compact('customers','alert'));
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
        Session::put('dates', [
            'from' => $request->from,
            'to' => $request->to
            ]);  
            return response()->redirectTo('admin/customerspdf');
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
    public function pdf()
    {
    $from = Session::get('dates')['from'];
    $to = Session::get('dates')['to'];
    $pdf = \App::make('dompdf.wrapper');
    $dates = Customer::whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();
    $pdf->loadView('reports.CustomerReport',compact('from','to','dates'))->setPaper('a4', 'landscape');

    return $pdf->stream();
    }
}
    