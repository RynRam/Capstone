<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Venues;
use PDF;
// use App\User;

class VenueController extends Controller
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
         $files = Venues::all();
        // $countVenue = Venues::count();
        // $count = User::count();
        return view('admin.venue.index', compact('files'));
    }

    public function pdf()
    {
    $pdf = \App::make('dompdf.wrapper');
     $venues = Venues::where('is_active',1)->get();
    $pdf->loadView('reports.VenueReport',compact('venues'));
    return $pdf->stream();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.venue.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        if($request->hasFile('file')){
        $filename = $request->file->getClientOriginalName();
        $request->file->storeAs('public/upload',$filename);
        $file = new Venues;
        $this->validate($request,[
            'name' => 'required|unique:venues',
            'address' => 'required',
            'contact' => 'required|max:14',
            'contact_person' => 'required',
            'price' => 'required',
        ]);

        $file->name = $request->name;
        $file->address = $request->address;
        $file->contact = $request->contact;
        $file->contact_person = $request->contact_person;
        $file->price = $request->price;
        $file->file = $filename;
        $file->capacity =  $request->capacity;
        $file->save();
        return redirect('admin/venue');
        }
            $this->validate($request,[
            'name' => 'required|unique:venues',
            'address' => 'required',
            'contact' => 'required|min:14',
            'contact_person' => 'required',
            'price' => 'required',
        ]);

            $file->name = $request->name;
            $file->address = $request->address;
            $file->contact = $request->contact;
            $file->contact_person = $request->contact_person;
            $file->capacity =  $request->capacity;
            $file->price = $request->price;
               $file->save();
         return redirect('admin/venue');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $url = Storage::url('stylegenie.jpg');
        // return "<img src='".$url."' />";
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $files = Venues::find($id);
        // return $files;
        return view('admin.venue.edit',compact('files'));
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
            $file = Venues::find($id);
            if($request->hasFile('file')){
        $filename = $request->file->getClientOriginalName();
        $request->file->storeAs('public/upload',$filename);
        $this->validate($request,[
            'name' => 'required|unique:venues',
            'address' => 'required',
            'contact' => 'required|min:14',
            'contact_person' => 'required',
            'price' => 'required',
        ]);

        $file->name = $request->name;
        $file->address = $request->address;
        $file->contact = $request->contact;
        $file->contact_person = $request->contact_person;
        $file->price = $request->price;
        $file->capacity =  $request->capacity;
        $file->file = $filename;
        $file->save();
        return redirect('admin/venue');
           
       
        }else{
            $this->validate($request,[
            'name' => 'required|unique:venues',
            'address' => 'required',
            'contact' => 'required|min:14',
            'contact_person' => 'required',
            'price' => 'required',
        ]);

            $file->name = $request->name;
            $file->address = $request->address;
            $file->contact = $request->contact;
            $file->contact_person = $request->contact_person;
            $file->price = $request->price;
            $file->capacity =  $request->capacity;
            $file->save();
         return redirect('admin/venue');
         }
    }

    public function updateStatus(Request $request, $id){
         $file = Venues::find($id);
        if($file->is_active == true) {
            $file->is_active = false;
            $file->save();
            session()->flash('flash_message_success','Successfully Updated');
            return redirect('/admin/venue');
        }else if($file->is_active == false ){
            $file->is_active = true;
            $file->save();
            session()->flash('flash_message_success','Successfully Updated');
           return redirect('/admin/venue');
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
         $files = Venues::find($id);
        $files->delete();
        session()->flash('flash_message_success','Successfully Deleted');
       return redirect('/admin/venue');
    }
}
