<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contents;
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
        $posts = Contents::all();
        return view('content.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             return view('content.create');    
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
            'info' => 'required',
            'author' => 'required',
            'file' => 'required',                
        ]);
         if($request->hasFile('file')){
        $filename = $request->file->getClientOriginalName();
        $request->file->storeAs('public/upload',$filename);
        $posts = new Contents;


        $posts->title = $request->title;
        $posts->info = $request->info;
        $posts->author = $request->author;
        $posts->file = $filename;

        $posts->save();

        return redirect('admin/post');
        

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
        $posts = Contents::find($id);
          return view('content.edit',compact('posts'));   
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
        $filename = $request->file->getClientOriginalName();
        $request->file->storeAs('public/upload',$filename);
        $posts = Contents::find($id);

        $posts = Contents::find($id);
        $this->validate($request,[
            'title' => 'required|unique:contents',
            'info' => 'required',
            'author' => 'required', 
          
        ]);

        $posts->title = $request->title;
        $posts->info = $request->info;
        $posts->author = $request->author;
        $posts->file = $filename;

        $posts->save();

        return redirect('admin/post');
        }else{
         $posts = Contents::find($id);
        $this->validate($request,[
            'title' => 'required',
            'info' => 'required',
            'active' => 'required',
            'author' => 'required',
            

        ]);
        $posts->title = $request->title;
        $posts->info = $request->info;
        $posts->author = $request->author;
        $posts->is_active = $request->active;
        $posts->save();

        return redirect('admin/post');
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
       return redirect('/admin/post');
    }
}
