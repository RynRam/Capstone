<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedbacks;
use PDF;
use Auth;
class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback = Feedbacks::all();
        return view('admin.feedback.index',compact('feedback'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
    public function pdf()
    {

    $pdf = \App::make('dompdf.wrapper');
     $feedback = Feedbacks::orderBy('is_active','desc')->get();
    $pdf->loadView('reports.FeedbackReport',compact('feedback'));
    return $pdf->stream();

    }  
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

    public function updateStatus(Request $request,$id){
        $feedback = Feedbacks::find($id);
   if($feedback->is_active == true){
       $feedback->is_active = false;
       $feedback->save();
       // session()->flash('flash_message_success','Successfully Updated');
       return response()->redirectTo('/admin/feedback');
       }
   else if($feedback->is_active == false){
       $feedback->is_active = true;
       $feedback->save();
       // session()->flash('flash_message_success','Successfully Updated');
       return response()->redirectTo('/admin/feedback');
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
