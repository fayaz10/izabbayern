<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\team;
use Image;
use Storage;
class teamController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team  = team::get();
        return view('adminViewPages.teamFolder.index')->with('team',$team);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminViewPages.teamFolder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // return dd($request);die;
        $this->validate($request,[
            'header'=>'required',
            'fa_name'=>'required',
            'fa_subname'=>'required',
            'fa_description'=>'required',

            'ps_name'=>'required',
            'ps_subname'=>'required',
            'ps_description'=>'required',

            'de_name'=>'required',
            'de_subname'=>'required',
            'de_description'=>'required',

            'en_name'=>'required',
            'en_subname'=>'required',
            'en_description'=>'required',

            'status'=>'required',
            'email'=>'required',
            'facebook'=>'required',
            'phone'=>'required',
            'image'=> 'nullable|image|mimes:jpg,jpeg,png,gif,bmp',

        ]);
    //Hundale file upload
    if($request->hasFile('image')){
        // Get file name with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $filename. '_'.time(). '.'.$extension;
            //upload file 
            $path = $request->file('image')->storeAs('public/MP4_MP3_PDF_Image_files',$fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
            // =====================
        $team = new team();
        $team->header=$request->input('header');
        $team->category=$request->input('category');

        $team->fa_name=$request->input('fa_name');
        $team->fa_subname=$request->input('fa_subname');
        $team->fa_description=$request->input('fa_description');

        $team->ps_name=$request->input('ps_name');
        $team->ps_subname=$request->input('ps_subname');
        $team->ps_description=$request->input('ps_description');

        $team->de_name=$request->input('de_name');
        $team->de_subname=$request->input('de_subname');
        $team->de_description=$request->input('de_description');

        $team->en_name=$request->input('en_name');
        $team->en_subname=$request->input('en_subname');
        $team->en_description=$request->input('en_description');
        
        $team->status=$request->input('status');
        $team->facebook=$request->input('facebook');
        $team->phone=$request->input('phone');
        $team->email=$request->input('email');
        $team -> image = $fileNameToStore;
        $team->save();
        return redirect('admin/team')->with('success', 'team created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = team::find($id);       
        return view('adminViewPages.teamFolder.show')->with('team',$team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $team = team::find($id);      
        return view('adminViewPages.teamFolder.edit')->with('team',$team);
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
        $this->validate($request,[
            'header'=>'required',
            'fa_name'=>'required',
            'fa_subname'=>'required',
            'fa_description'=>'required',

            'ps_name'=>'required',
            'ps_subname'=>'required',
            'ps_description'=>'required',

            'de_name'=>'required',
            'de_subname'=>'required',
            'de_description'=>'required',

            'en_name'=>'required',
            'en_subname'=>'required',
            'en_description'=>'required',

            'status'=>'required',
            'email'=>'required',
            'facebook'=>'required',
            'phone'=>'required',
            'image'=> 'nullable|image|mimes:jpg,jpeg,png,gif,bmp',
            

        ]);
    //Hundale file upload
    if($request->hasFile('image')){
        // Get file name with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $filename. '_'.time(). '.'.$extension;
            //upload file 
            $path = $request->file('image')->storeAs('public/MP4_MP3_PDF_Image_files',$fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
            // =====================
        $team = team::find($id);
        $team->header=$request->input('header');
        $team->category=$request->input('category');

        $team->fa_name=$request->input('fa_name');
        $team->fa_subname=$request->input('fa_subname');
        $team->fa_description=$request->input('fa_description');

        $team->ps_name=$request->input('ps_name');
        $team->ps_subname=$request->input('ps_subname');
        $team->ps_description=$request->input('ps_description');

        $team->de_name=$request->input('de_name');
        $team->de_subname=$request->input('de_subname');
        $team->de_description=$request->input('de_description');

        $team->en_name=$request->input('en_name');
        $team->en_subname=$request->input('en_subname');
        $team->en_description=$request->input('en_description');

        $team->status=$request->input('status');
        $team->facebook=$request->input('facebook');
        $team->phone=$request->input('phone');
        $team->email=$request->input('email');

        if($request->hasFile('image')){
        $team -> image = $fileNameToStore;
        }
        $team->save();
        return redirect('admin/team')->with('success', 'team Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = team::find($id);
        // return $team;die;

        if($team->image != 'noimage.jpg'){
            //delete image
            Storage::delete('public/MP4_MP3_PDF_Image_files/'.$team->image);
        }
        $team->delete();
        return redirect('admin/team')->with('success', 'team Deleted successfully');
    }
}
