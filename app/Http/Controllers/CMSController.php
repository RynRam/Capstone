<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contents;
use App\Audits;
use Auth;
use App\Inventory;
class CMSController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
       
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
        $posts = Contents::all();
        return view('content.index',compact('posts','alert'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
             return view('content.create',compact('alert'));    
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request,[
            'title' => 'required',
            'info' => 'required|min:3|max:191',
            'author' => 'required',
            'file' => 'required',                
        ]);
         if($request->hasFile('file')){
            $file = $request->file('file');
            $filename = $request->file->getClientOriginalName();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $filename);
        $posts = new Contents;


        $posts->title = $request->title;
        $posts->info = $request->info;
        $posts->author = $request->author;
        $posts->file = $filename;

        $posts->save();
        
        //audits
        $data = array(
        "title" =>  $request->title,
        "info" => $request->info,
        "author" =>  $request->author,
        "file" => $request->filename

        );
        $audits = new Audits; 
        $audits->user = Auth::user()->name;
        $audits->event = 'created';
        $audits->audit_type = 'Post';
        $audits->new_values =  $data;
        $audits->old_values =  'No Data';
        $audits->save();
        //audits
        

        return response()->redirectTo('/admin/post');
        

        }
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
        $alert =Inventory::where('stock_on_hand', '<=', '80')->count();
        $posts = Contents::find($id);
          return view('content.edit',compact('posts','alert'));   
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

         if($request->hasFile('file')){
        $file = $request->file('file');
        $filename = $request->file->getClientOriginalName();
        $destinationPath = public_path('/images');
        $file->move($destinationPath, $filename);
        $posts = Contents::find($id);

            //audits
            $old_data = array(
                "title" =>  $posts->title,
                "info" => $posts->info,
                "author" =>  $posts->author,
                "file" => $posts->file
        
                );
            $data = array(
                "title" =>  $request->title,
                "info" => $request->info,
                "author" =>  $request->author,
                "file" => $request->filename
        
                );
            $audits = new Audits; 
            $audits->user = Auth::user()->name;
            $audits->event = 'updated';
            $audits->audit_type = 'Post';
            $audits->new_values =  $data;
            $audits->old_values =  $old_data;
            $audits->save();
                //audits

        $posts = Contents::find($id);
        $this->validate($request,[
            'title' => 'required',
            'info' => 'required',
            'author' => 'required', 
          
        ]);

        $posts->title = $request->title;
        $posts->info = $request->info;
        $posts->author = $request->author;
        $posts->file = $filename;

        $posts->save();

        return response->redirectTo('/admin/post');
        }else{
         $posts = Contents::find($id);

        //audits
        $old_data = array(
            "title" =>  $posts->title,
            "info" => $posts->info,
            "author" =>  $posts->author,
            "file" => $post->file  
    
            );
        $data = array(
        "title" =>  $request->title,
        "info" => $request->info,
        "author" =>  $request->author,
        "file" => $post->file

        );
        $audits = new Audits; 
        $audits->user = Auth::user()->name;
        $audits->event = 'updated';
        $audits->audit_type = 'Post';
        $audits->new_values =  $data;
        $audits->old_values =  $old_data;
        $audits->save();
            //audits
        
            $this->validate($request,[
            'title' => 'required',
            'info' => 'required|min:3|max:191',
            'active' => 'required',
            'author' => 'required',
            

        ]);
        $posts->title = $request->title;
        $posts->info = $request->info;
        $posts->author = $request->author;
        $posts->is_active = $request->active;
        $posts->save();

        return response->redirectTo('/admin/post');
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
      $posts = Contents::find($id);
        $posts->delete();
       return response->redirectTo('/admin/post');
    }
}
