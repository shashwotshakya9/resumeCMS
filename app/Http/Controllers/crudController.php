<?php

namespace App\Http\Controllers;

use App\Models\tbl_introduction;
use App\Models\tbl_aboutme;
use Illuminate\Http\Request;

use DB;
use Session;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
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
        // $data = DB::table('tbl_introduction')->get();
        // return view ('backend.index',['data'=>$data]);
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

    public function insertData(Request $request){
        $data = $request->all();
        print_r($data);
        $intro= new tbl_introduction;
        $intro->intro = request('intro');
        $intro->email = request('email');
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/', $filename);
            $intro->image=$filename;
        } else{
            return $request;
            $intro->image= '';
        } 
        $intro->save();
        
        // $aboutme= new tbl_aboutme;
        // $aboutme->aboutme=request('atitle');
        // $aboutme->aboutme=request('adescription');
        // $aboutme->aboutme=request('acontenttitle');
        // $aboutme->aboutme=request('acontentdescription');
        // if ($request->hasfile('aimage')){
        //     $file = $request->file('aimage');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename=time() . '.' . $extension;
        //     $file->move('uploads/', $filename);
        //     $aboutme->aimage=$filename;
        // } else{
        //     return $request;
        //     $aboutme->aimage= '';
        // }
        //     $aboutme->save();        
    	

            Session::flash('message','Data inserted successfully!!!');
            return redirect()->back();
    }

    // public function insertAboutme(Request $request){
   
        
        
        
    // }

   
    // private function upload($image){
    //     $name = $image->getClientOriginalName();
    //     $newName = date('ymdgis').$name;
    //     $image->move(public_path().'/Uploads',$newName);
    //     return $newName;
    //   }
    }
