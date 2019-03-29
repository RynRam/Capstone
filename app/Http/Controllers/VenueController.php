<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Venues;
use PDF;
use App\Audits;
// use App\User;
use App\Inventory;
use Auth;
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
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
        // $count = User::count();
        return view('admin.venue.index', compact('files','alert'));
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
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
        return view('admin.venue.create',compact('alert'));
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
        $file = $request->file('file');
        $filename = $request->file->getClientOriginalName();
        $destinationPath = public_path('/images');
        $file->move($destinationPath, $filename);
        // $request->file->storeAs('images', $filename, 'public_uploads');
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
        $file->contact = intval($request->contact);
        $file->contact_person = $request->contact_person;
        $file->price = intval($request->price);
        $file->file = $filename;
        $file->capacity =  intval($request->capacity);
        $file->save();
        //audits
            $data = array(
                "name" =>  $request->name,
                "address" => $request->address,
                "contact_person" => $request->contact_person,
                "contact" => $request->contact,
                "price" =>  intval($request->price),
                "capacity" => $request->capacity,
                "file" => $filename

        
                );
            $audits = new Audits; 
            $audits->user = Auth::user()->name;
            $audits->event = 'created';
            $audits->audit_type = 'Venue';
            $audits->new_values =  $data;
            $audits->old_values =  'No Data';
            $audits->save();
            //audits
        return response()->redirectTo('admin/venue');
        }
            $this->validate($request,[
            'name' => 'required|unique:venues',
            'address' => 'required',
            'contact' => 'required|max:14',
            'contact_person' => 'required',
            'price' => 'required',
        ]);

            $file->name = $request->name;
            $file->address = $request->address;
            $file->contact = intval($request->contact);
            $file->contact_person = $request->contact_person;
            $file->capacity =  intval($request->capacity);
            $file->price =  intval($request->price);
               $file->save();
            return response()->redirectTo('admin/venue');
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
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
       $files = Venues::find($id);
        // return $files;
        return view('admin.venue.edit',compact('files','alert'));
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
                $file = $request->file('file');
                $filename = $request->file->getClientOriginalName();
                $destinationPath = public_path('/images');
                $file->move($destinationPath, $filename);
   
                     //audits
                     $old_data = array(
                        "name" =>  $file->name,
                        "address" => $file->address,
                        "contact_person" => $file->contact_person,
                        "contact" => $file->contact,
                        "price" => $file->price,
                        "capacity" => $file->capacity,
                        "file" => $file->file
                        );
                    $data = array(
                        "name" =>  $request->name,
                        "address" => $request->address,
                        "contact_person" => $request->contact_person,
                        "contact" => intval($request->contact),
                        "price" => intval($request->price),
                        "capacity" => intval($request->capacity),
                        "file" => $filename
        
                
                        );
                    $audits = new Audits; 
                    $audits->user = Auth::user()->name;
                    $audits->event = 'updated';
                    $audits->audit_type = 'Venue';
                    $audits->new_values =  $data;
                    $audits->old_values =  $old_data;
                    $audits->save();
                    //audits
        $this->validate($request,[
            'name' => 'required|unique:venues',
            'address' => 'required',
            'contact' => 'required',
            'contact_person' => 'required',
            'price' => 'required',
        ]);

        $file->name = $request->name;
        $file->address = $request->address;
        $file->contact = intval($request->contact);
        $file->contact_person = $request->contact_person;
        $file->price = intval($request->price);
        $file->capacity =  intval($request->capacity);
        $file->file = $filename;
        $file->save();

        return response()->redirectTo('admin/venue');
           
       
        }else{
                        //audits
                        $old_data = array(
                            "name" =>  $file->name,
                            "address" => $file->address,
                            "contact_person" => $file->contact_person,
                            "contact" => $file->contact,
                            "price" => $file->price,
                            "capacity" => $file->capacity,
                            "file" => $file->file
                            );
                        $data = array(
                            "name" =>  $request->name,
                            "address" => $request->address,
                            "contact_person" => $request->contact_person,
                            "contact" => $request->contact,
                            "price" => $request->price,
                            "capacity" => $request->capacity,
                            "file" => $file->file
            
                    
                            );
                        $audits = new Audits; 
                        $audits->user = Auth::user()->name;
                        $audits->event = 'created';
                        $audits->audit_type = 'Venue';
                        $audits->new_values =  $data;
                        $audits->old_values =  $old_data;
                        $audits->save();
                                    //audits
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
            $file->price = intval($request->price);
            $file->capacity =  $request->capacity;
            $file->save();

         return response()->redirectTo('admin/venue');
         }
    }

    public function updateStatus(Request $request, $id){
         $file = Venues::find($id);
        if($file->is_active == true) {
            $file->is_active = false;
            $file->save();
            session()->flash('flash_message_success','Successfully Updated');
            return response()->redirectTo('/admin/venue');
        }else if($file->is_active == false ){
            $file->is_active = true;
            $file->save();
            session()->flash('flash_message_success','Successfully Updated');
           return response()->redirectTo('/admin/venue');
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
        return response()->redirect('/admin/venue');
    }
}
