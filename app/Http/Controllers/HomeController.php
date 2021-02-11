<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Models\multilang;
use App\Models\Posts;
use Image;
use Storage;
use App\Models\imagePro;
class HomeController extends Controller
{

    public function imageProStore(Request $request){
        
           
    

            $this->validate($request,[
                'fa_title'=>'required',
                'ps_title'=>'required',
                'de_title'=>'required',
                'en_title'=>'required',
                'image'=> 'nullable|image|mimes:jpg,jpeg,png,gif,bmp',
            ]);


               if($request->hasFile('image')){
                // Get file name with extension
                    $image = $request->file('image')->getClientOriginalName();
                    //Get just file name
                    $filename = pathinfo($image,PATHINFO_FILENAME);
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
                    $MP4_MP3_PDF_Image_FileNameToStoreFile = $filename. '_'.time(). '.'.$extension;
                    //upload file 
                    $path = $request->file('file')->storeAs('public/MP4_MP3_PDF_Image_files',$MP4_MP3_PDF_Image_FileNameToStoreFile);
                }
                else{
                    $MP4_MP3_PDF_Image_FileNameToStoreFile = 'noimage.jpg';
                }

                $posts = new posts();
                $posts->fa_title=$request->input('fa_title');
                $posts->ps_title=$request->input('ps_title');
                $posts->en_title=$request->input('en_title');
                $posts->de_title=$request->input('de_title');
                $posts -> image = $MP4_MP3_PDF_Image_FileNameToStore;
                $posts -> file = $MP4_MP3_PDF_Image_FileNameToStoreFile;
                $posts->save();
                 return redirect()->back()->with('success', 'posts created successfully');
                
    }


   
}
