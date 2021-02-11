<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\videos;
use Image;
use Storage;
use App\Models\submenu;
class videosController extends Controller
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
        // $submenus  = submenu::get();
        $videos  = videos::get();
        // $videos = json_decode(json_encode($videos));

        foreach($videos as $key =>$val){
            $title = submenu::where(['id'=>$val->class])->first();
            // $videos[$key]->class = $title->title;
        }
            // echo "<pre>"; print_r($videos);die;

        return view('adminViewPages.videosFolder.index')->with('videos',$videos);
    }

    public function downloadmp4($file){

        // return 'hi';die;
        return response()->download('storage/MP4_files/'.$file);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $submenus  = submenu::get();
        $videos  = videos::get();
        return view('adminViewPages.videosFolder.create')->with('submenus',$submenus);
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
            'fa_title'=>'required',
            'fa_subtitle'=>'required',
            'fa_description'=>'required',
            'fa_speaker'=>'nullable',
            'title'=>'required',
            'category'=>'required',
            'subtitle'=>'required',
            'description'=>'required',
            'status'=>'required',
            'speaker'=>'nullable',
            'file'=>'required',
            'class'=>'required',
            'image'=> 'required|image'

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
            $path = $request->file('image')->storeAs('public/cover_image',$fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
        if($request->hasFile('file')){
            // Get file name with extension
                $filenameWithExt = $request->file('file')->getClientOriginalName();
                //Get just file name
                $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                //Get just extension
                $extension = $request->file('file')->getClientOriginalExtension();
                //File name to store
                $mp4FileNameToStore = $filename. '_'.time(). '.'.$extension;
                //upload file 
                $path = $request->file('file')->storeAs('public/MP4_files',$mp4FileNameToStore);
            }
            else{
                $mp4FileNameToStore = 'nofile.mp4';
            }
            // =====================
        $videos = new videos();
        $videos->category=$request->input('category');
        $videos->fa_title=$request->input('fa_title');
        $videos->fa_subtitle=$request->input('fa_subtitle');
        $videos->fa_description=$request->input('fa_description');
        $videos->fa_speaker=$request->input('fa_speaker');
        $videos->title=$request->input('title');
        $videos->subtitle=$request->input('subtitle');
        $videos->status=$request->input('status');
        $videos->speaker=$request->input('speaker');
        $videos->class=$request->input('class');
        $videos->description=$request->input('description');
        $videos -> file = $mp4FileNameToStore;
        $videos -> image = $fileNameToStore;
        $videos->save();
        return redirect('admin/videos')->with('success', 'videos created successfully');
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

        // return $id;die;
        $videos = videos::find($id);   
        $submenu = submenu::get(); 
        return view('adminViewPages.videosFolder.edit')->with('videos',$videos)->with('submenu',$submenu);
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
            'fa_title'=>'required',
            'fa_subtitle'=>'required',
            'fa_description'=>'required',
            'fa_speaker'=>'required',
            'title'=>'required',
            'subtitle'=>'required',
            'description'=>'required',
            'status'=>'required',
            'class'=>'required'
            

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
            $path = $request->file('image')->storeAs('public/cover_image',$fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }

        if($request->hasFile('file')){
            // Get file name with extension
                $filenameWithExt = $request->file('file')->getClientOriginalName();
                //Get just file name
                $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                //Get just extension
                $extension = $request->file('file')->getClientOriginalExtension();
                //File name to store
                $mp4FileNameToStore = $filename. '_'.time(). '.'.$extension;
                //upload file 
                $path = $request->file('file')->storeAs('public/MP4_files',$mp4FileNameToStore);
            }
            else{
                $mp4FileNameToStore = 'nofile.mp4';
            }
            // =====================
        $videos = videos::find($id);
        // $videos->header=$request->input('header');
        $videos->category=$request->input('category');
        $videos->fa_title=$request->input('fa_title');
        $videos->fa_subtitle=$request->input('fa_subtitle');
        $videos->fa_description=$request->input('fa_description');
        $videos->fa_speaker=$request->input('fa_speaker');
        $videos->title=$request->input('title');
        $videos->subtitle=$request->input('subtitle');
        $videos->status=$request->input('status');
        $videos->speaker=$request->input('speaker');
        $videos->class=$request->input('class');
        $videos->description=$request->input('description');

        if($request->hasFile('image')){
            Storage::delete('public/cover_image/'.$videos->image);
            $videos -> image = $fileNameToStore;
            }
        if($request->hasFile('file')){
            Storage::delete('public/MP4_files/'.$videos->file);
            $videos -> file = $mp4FileNameToStore;
            }
            
        $videos->save();
        return redirect('admin/videos')->with('success', 'videos Updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $videos = videos::find($id);
        // return $videos;die;

        if($videos->image != 'noimage.jpg'){
            //delete image
            Storage::delete('public/cover_image/'.$videos->image);
        }
        if($videos->file != 'nofil.mp4'){
            //delete file
            Storage::delete('public/MP4_files/'.$videos->file);
        }
        $videos->delete();
        return redirect('admin/videos')->with('success', 'videos Deleted successfully');
    }
}

