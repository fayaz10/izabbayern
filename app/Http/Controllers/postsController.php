<?php

namespace App\Http\Controllers;
use Cohensive\Embed\Facades\Embed;
use Illuminate\Http\Request;
use App\Models\Posts; 
use App\Models\Tags;
use App\Models\ImagePro;
use Image;
use Storage;
use Carbon\Carbon;
class postsController extends Controller
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
        $var = session('selectCatFormRoute');
        if ($var == true) {
            $posts  = Posts::where('category','=',"$var" )->orderBy('created_at', 'desc')->paginate(10);
        }else{
        $posts  = Posts::orderBy('created_at', 'desc')->paginate(10);
        }
        return view('adminViewPages.postsFolder.index')->with('posts',$posts);
    }

 

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
          $tags  = Tags::orderBy('created_at', 'desc')->get();
        return view('adminViewPages.postsFolder.create')->with('tags',$tags);
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
            'de_title'=>'required',
            'de_subtitle'=>'nullable',
            'de_description'=>'nullable',

            'ps_title'=>'required',
            'ps_subtitle'=>'nullable',
            'ps_scription'=>'nullable',

            'fa_title'=>'required',
            'fa_subtitle'=>'nullable',
            'fa_description'=>'nullable',

            'en_title'=>'required',
            'en_subtitle'=>'nullable',
            'en_description'=>'nullable',

            'status'=>'required',
            'timing'=>'nullable',
            'date'=>'nullable',

            'fa_location'=>'nullable',
            'ps_location'=>'nullable',
            'en_location'=>'nullable',
            'de_location'=>'nullable',

            'tag'=>'nullable',
            'image'=> 'nullable|image|mimes:jpg,jpeg,png,gif,bmp',
            'file'=> 'nullable|mimes:mp3,mp4,pdf',

            'de_speaker'=>'nullable',
            'ps_speaker'=>'nullable',
            'en_speaker'=>'nullable',
            'fa_speaker'=>'nullable'



        ]);
        // dd($request);
    //Hundale file upload
    if($request->hasFile('image')){
        // Get file name with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //File name to store
            $MP4_MP3_PDF_Image_FileNameToStore = $filename. '_'.time(). '.'.$extension;
            //upload file 
            $path = $request->file('image')->storeAs('public/MP4_MP3_PDF_Image_files',$MP4_MP3_PDF_Image_FileNameToStore);
        }
        else{
            $MP4_MP3_PDF_Image_FileNameToStore = 'noimage.jpg';
        }
        if($request->hasFile('file')){
            // Get file name with extension
                $filenameWithExt = $request->file('file')->getClientOriginalName();
                //Get just file name
                $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                //Get just extension
                $extension = $request->file('file')->getClientOriginalExtension();
                //File name to store
                $MP4_MP3_PDF_Image_FileNameToStore = $filename. '_'.time(). '.'.$extension;
                //upload file 
                $path = $request->file('file')->storeAs('public/MP4_MP3_PDF_Image_files',$MP4_MP3_PDF_Image_FileNameToStore);
            }
            else{
                $MP4_MP3_PDF_Image_FileNameToStore = 'noFile.jpg';
            }
            // =====================

        $posts = new posts();
        $posts->category=$request->input('category');
        $posts->header=$request->input('header');
        $posts->sub_header=$request->input('sub_header');
        $posts->post_type=$request->input('post_type');

        $posts->ps_title=$request->input('ps_title');
        $posts->ps_subtitle=$request->input('ps_subtitle');
        $posts->ps_description=$request->input('ps_description');

        $posts->fa_title=$request->input('fa_title');
        $posts->fa_subtitle=$request->input('fa_subtitle');
        $posts->fa_description=$request->input('fa_description');

        $posts->de_title=$request->input('de_title');
        $posts->de_subtitle=$request->input('de_subtitle');
        $posts->de_description=$request->input('de_description');

        $posts->en_title=$request->input('en_title');
        $posts->en_subtitle=$request->input('en_subtitle');
        $posts->en_description=$request->input('en_description');

        $posts->fa_speaker=$request->input('fa_speaker');
        $posts->ps_speaker=$request->input('ps_speaker');
        $posts->en_speaker=$request->input('en_speaker');
        $posts->de_speaker=$request->input('de_speaker');

        $posts->ps_location=$request->input('ps_location');
        $posts->en_location=$request->input('en_location');
        $posts->de_location=$request->input('de_location');
        $posts->fa_location=$request->input('fa_location');


        $posts->status=$request->input('status');
        $posts->timing=$request->input('timing');
        $posts->date=$request->input('date');
        $posts -> image = $MP4_MP3_PDF_Image_FileNameToStore;
        $posts -> file = $MP4_MP3_PDF_Image_FileNameToStore;
        $posts->save();
        $posts->Tags()->sync($request->tags,false);
        // dd($posts);
        return redirect('admin/posts')->with('success', 'posts created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = posts::find($id);      
        return view('adminViewPages.postsFolder.show')->with('posts',$posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = posts::find($id);      
        return view('adminViewPages.postsFolder.edit')->with('posts',$posts);
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
            'de_title'=>'required',
            'de_subtitle'=>'nullable',
            'de_description'=>'nullable',

            'ps_title'=>'required',
            'ps_subtitle'=>'nullable',
            'ps_scription'=>'nullable',

            'fa_title'=>'required',
            'fa_subtitle'=>'nullable',
            'fa_description'=>'nullable',

            'en_title'=>'required',
            'en_subtitle'=>'nullable',
            'en_description'=>'nullable',

            'status'=>'required',
            'timing'=>'nullable',
            'date'=>'nullable',

            'fa_location'=>'nullable',
            'ps_location'=>'nullable',
            'en_location'=>'nullable',
            'de_location'=>'nullable',

            'tag'=>'nullable',
            'image'=> 'nullable|image|mimes:jpg,jpeg,png,gif,bmp',
            'file'=> 'nullable|mimes:mp3,mp4,pdf',

            'de_speaker'=>'nullable',
            'ps_speaker'=>'nullable',
            'en_speaker'=>'nullable',
            'fa_speaker'=>'nullable'

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
            $Image_FileNameToStore = $filename. '_'.time(). '.'.$extension;
            //upload file 
            $path = $request->file('image')->storeAs('public/MP4_MP3_PDF_Image_files',$Image_FileNameToStore);
        }
        else{
            $Image_FileNameToStore = 'noimage.jpg';
        }
        if($request->hasFile('file')){
            // Get file name with extension
                $filenameWithExt = $request->file('file')->getClientOriginalName();
                //Get just file name
                $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
                //Get just extension
                $extension = $request->file('file')->getClientOriginalExtension();
                //File name to store
                $MP4_MP3_PDF_Image_FileNameToStore = $filename. '_'.time(). '.'.$extension;
                //upload file 
                $path = $request->file('file')->storeAs('public/MP4_MP3_PDF_Image_files',$MP4_MP3_PDF_Image_FileNameToStore);
            }
            else{
                $MP4_MP3_PDF_Image_FileNameToStore = 'noFile.jpg';
            }
            // =====================
        $posts = posts::find($id);
        $posts->category=$request->input('category');
        $posts->header=$request->input('header');
        $posts->sub_header=$request->input('sub_header');
        $posts->post_type=$request->input('post_type');

        $posts->ps_title=$request->input('ps_title');
        $posts->ps_subtitle=$request->input('ps_subtitle');
        $posts->ps_description=$request->input('ps_description');

        $posts->fa_title=$request->input('fa_title');
        $posts->fa_subtitle=$request->input('fa_subtitle');
        $posts->fa_description=$request->input('fa_description');

        $posts->de_title=$request->input('de_title');
        $posts->de_subtitle=$request->input('de_subtitle');
        $posts->de_description=$request->input('de_description');

        $posts->en_title=$request->input('en_title');
        $posts->en_subtitle=$request->input('en_subtitle');
        $posts->en_description=$request->input('en_description');

        $posts->fa_speaker=$request->input('fa_speaker');
        $posts->ps_speaker=$request->input('ps_speaker');
        $posts->en_speaker=$request->input('en_speaker');
        $posts->de_speaker=$request->input('de_speaker');

        $posts->ps_location=$request->input('ps_location');
        $posts->en_location=$request->input('en_location');
        $posts->de_location=$request->input('de_location');
        $posts->fa_location=$request->input('fa_location');
      
        $posts->status=$request->input('status');
        $posts->timing=$request->input('timing');
        $posts->date=$request->input('date');

        if($request->hasFile('image')){
            if($posts->image != 'noimage.jpg'){
                Storage::delete('public/MP4_MP3_PDF_Image_files/'.$posts->image);
                $posts -> image = $Image_FileNameToStore;
            }
        }
        if($request->hasFile('file')){
            if($posts->image != 'noFile.jpg'){
                Storage::delete('public/MP4_MP3_PDF_Image_files/'.$posts->file);
                $posts -> file = $MP4_MP3_PDF_Image_FileNameToStore;
            }    
        }    
        $posts->save();
        return redirect('admin/posts')->with('success', 'posts created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = posts::find($id);
        // return $posts;die;

        if($posts->image != 'noimage.jpg'){
            //delete image
            Storage::delete('public/MP4_MP3_PDF_Image_files/'.$posts->image);
        }
        if($posts->file != 'noFile.jpg'){
            //delete MP4_MP3_PDF_files
            Storage::delete('public/MP4_MP3_PDF_Image_files/'.$posts->file);
        }
        $posts->delete();
        return redirect('admin/posts')->with('success', 'posts Deleted successfully');
    }

    public function dashboard(){
        $imagePro = ImagePro::get();
        return view('adminViewPages.dashboard')->with('imagePro',$imagePro);
    }
}
