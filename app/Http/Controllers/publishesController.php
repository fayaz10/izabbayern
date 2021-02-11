<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publishes;
use Image;
use Storage;
use App\Models\submenu;
class publishesController extends Controller
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
        $publishes  = publishes::get();
        // $publishes = json_decode(json_encode($publishes));

        foreach($publishes as $key =>$val){
            $title = submenu::where(['id'=>$val->class])->first();
            // $publishes[$key]->class = $title->title;
        }
            // echo "<pre>"; print_r($publishes);die;

        return view('adminViewPages.publishesFolder.index')->with('publishes',$publishes);
    }

    public function downloadpublishespdf($file){

        return response()->download('storage/PDF_files/'.$file);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $submenus  = submenu::get();
        $publishes  = publishes::get();
        return view('adminViewPages.publishesFolder.create')->with('submenus',$submenus);
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
            'category'=>'required',
            'fa_description'=>'required',
            'title'=>'required',
            'description'=>'required',
            'status'=>'required',
            'author'=>'nullable',
            'file'=>'nullable',
            'class'=>'required',
            'image'=> 'nullable|image'

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
                $pdfFileNameToStore = $filename. '_'.time(). '.'.$extension;
                //upload file 
                $path = $request->file('file')->storeAs('public/PDF_files',$pdfFileNameToStore);
            }
            else{
                $pdfFileNameToStore = 'nofile.pdf';
            }
            // =====================
        $publishes = new publishes();
        $publishes->header=$request->input('header');
        $publishes->fa_title=$request->input('fa_title');
        $publishes->category=$request->input('category');
        $publishes->fa_description=$request->input('fa_description');
        $publishes->fa_author=$request->input('fa_author');
        $publishes->title=$request->input('title');
        $publishes->status=$request->input('status');
        $publishes->author=$request->input('author');
        $publishes->class=$request->input('class');
        $publishes->description=$request->input('description');
        $publishes -> file = $pdfFileNameToStore;
        $publishes -> image = $fileNameToStore;
        $publishes->save();
        return redirect('admin/publishes')->with('success', 'publishes created successfully');
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
        $publishes = publishes::find($id);   
        $submenu = submenu::get(); 
        return view('adminViewPages.publishesFolder.edit')->with('publishes',$publishes)->with('submenu',$submenu);
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
            'title'=>'required',
            'category'=>'required',
            'description'=>'required',
            'fa_title'=>'required',
            'fa_description'=>'required',
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
                $pdfFileNameToStore = $filename. '_'.time(). '.'.$extension;
                //upload file 
                $path = $request->file('file')->storeAs('public/PDF_files',$pdfFileNameToStore);
            }
            else{
                $pdfFileNameToStore = 'nofile.pdf';
            }
            // =====================
        $publishes = publishes::find($id);
        $publishes->header=$request->input('header');
        $publishes->fa_title=$request->input('fa_title');
        $publishes->category=$request->input('category');
        $publishes->fa_description=$request->input('fa_description');
        $publishes->fa_author=$request->input('fa_author');
        $publishes->title=$request->input('title');
        $publishes->status=$request->input('status');
        $publishes->author=$request->input('author');
        $publishes->class=$request->input('class');
        $publishes->description=$request->input('description');

        if($request->hasFile('image')){
            Storage::delete('public/cover_image/'.$publishes->image);
            $publishes -> image = $fileNameToStore;
            }
        if($request->hasFile('file')){
            Storage::delete('public/PDF_files/'.$publishes->file);
            $publishes -> file = $pdfFileNameToStore;
            }
            
        $publishes->save();
        return redirect('admin/publishes')->with('success', 'publishes Updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publishes = publishes::find($id);
        // return $publishes;die;

        if($publishes->image != 'noimage.jpg'){
            //delete image
            Storage::delete('public/cover_image/'.$publishes->image);
        }
        if($publishes->file != 'nofil.pdf'){
            //delete file
            Storage::delete('public/PDF_files/'.$publishes->file);
        }
        $publishes->delete();
        return redirect('admin/publishes')->with('success', 'publishes Deleted successfully');
    }
}

