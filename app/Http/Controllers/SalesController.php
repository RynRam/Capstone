<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Inventory;
use Session;
use App\Payments;
use App\Audits;
use App\Caterings;
use App\Reservations;
class SalesController extends Controller
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
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
        $eventCategories=Caterings::all();
        $payments = Payments::all();

        return view('admin.sales.index',compact('eventCategories','payments','alert'));
    }
    public function report(Request $request)
    {   
        $from = $request->from;
        $to = $request->to;
        $category = $request->category;
        if($category != null){
            if($from != null){
                if($to != null){
                     $payments = Payments::where('category',$category)->whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();
                     $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
                     $eventCategories=Caterings::all();
                     return view('admin.sales.index',compact('eventCategories','payments','alert'));
                }else{
                    $payments = Payments::where('category',$category)->whereDate('created_at','>=',$from)->get();
                    $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
                    $eventCategories=Caterings::all();
                    return view('admin.sales.index',compact('eventCategories','payments','alert'));
                }
            }
            else{
                if($to != null){
                    $payments = Payments::where('category',$category)->whereDate('created_at','<=',$to)->get();
                    $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
                    $eventCategories=Caterings::all();
                    return view('admin.sales.index',compact('eventCategories','payments','alert'));
                }else{
                    $payments = Payments::where('category',$category)->get();
                    $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
                    $eventCategories=Caterings::all();
                    return view('admin.sales.index',compact('eventCategories','payments','alert'));
                }
            } 
        }
        else{
            if($from != null){
                if($to != null){
                    $payments = Payments::whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();
                    $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
                    $eventCategories=Caterings::all();
                    return view('admin.sales.index',compact('eventCategories','payments','alert'));
                }else{
                    $payments = Payments::whereDate('created_at','>=',$from)->get();
                    $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
                    $eventCategories=Caterings::all();
                    return view('admin.sales.index',compact('eventCategories','payments','alert')); 
                }
            }else{
                if($to != null){
                    $payments = Payments::whereDate('created_at','<=',$to)->get();
                    $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
                    $eventCategories=Caterings::all();
                    return view('admin.sales.index',compact('eventCategories','payments','alert'));
                }else{
                    $payments = Payments::all();
                    $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
                    $eventCategories=Caterings::all();
                    return view('admin.sales.index',compact('eventCategories','payments','alert'));
                }
            }
        }
   
    }

    
    public function pdf()
    {
    $from = Session::get('sales')['from'];
    $to = Session::get('sales')['to'];
    $pdf = \App::make('dompdf.wrapper');
    $dates = Payments::whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->get();
    $sales = Payments::whereDate('created_at','>=',$from)->whereDate('created_at','<=',$to)->sum('balance');
    $pdf->loadView('reports.SalesReport',compact('sales','from','to','dates'));
    return $pdf->stream();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
        return view('admin.sales.index',compact('alert'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::put('sales', [
            'from' => $request->from,
            'to' => $request->to
            ]);  
            return response()->redirectTo('admin/salespdf');
    }
    
    public function categorypdf()
    {


    $category = Session::get('sales_category')['category'];
    $pdf = \App::make('dompdf.wrapper');
    $amount =Payments::where('category',$category)->sum('balance');
    $sales = Payments::where('category',$category)->get();
    $pdf->loadView('reports.SalesCategoryReport',compact('sales','amount'));
    return $pdf->stream();
    }

    public function category(Request $request)
    {
        Session::put('sales_category', [
            'category' => $request->category,
            ]);  
            return response()->redirectTo('admin/salescategorypdf');
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
