<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tags  ;
use App\Models\Posts  ;
class tagsController extends Controller
{
        public function __construct(){
    
            $this->middleware('auth')->except('show_tag','show_tag_details');
    
        } 
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */

         public function show_tag_details($id){

           $posts = Posts::find($id);
           $main_posts = Posts::get();
           return view('userViewPages.show_services')->with('main_posts',$main_posts)->with('posts',$posts);
            
         }
         public function show_tag(Tags $tag){
            $tags = Tags::find($tag);
            $posts = $tag->posts;
            return view('userViewPages.posts')->with('posts',$posts)->with('tags',$tags);
         }
         
        public function index()
        {
            $tags = tags::orderBy('id','desc')->get();
            return view('adminViewPages.tagsFolder.index')->with('tags',$tags);
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
            $this->validate($request,[
                'de_name'=>'required',
                'fa_name'=>'required',
                'ps_name'=>'required',
                'en_name'=>'required',
            ]);
            $tags = new Tags();
            $tags->en_name=$request->input('en_name');
            $tags->fa_name=$request->input('fa_name');
            $tags->ps_name=$request->input('ps_name');
            $tags->de_name=$request->input('de_name');
            $tags->save();
            return redirect('admin/tags')->with('success', 'tags created successfully');
    
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
            // return 'Hi';
            $tags = Tags::find($id);      
            return view('adminViewPages.tagsFolder.edit')->with('tags',$tags);
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
                'de_name'=>'required',
                'fa_name'=>'required',
                'ps_name'=>'required',
                'en_name'=>'required',
               
    
            ]);
            $tags =  Tags::find($id);
            $tags->en_name=$request->input('en_name');
            $tags->fa_name=$request->input('fa_name');
            $tags->ps_name=$request->input('ps_name');
            $tags->de_name=$request->input('de_name');
            $tags->save();
            return redirect('admin/tags')->with('success', 'tags Updated successfully');
    
        }
        
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
          $tags = Tags::find($id);
          $tags->delete();
          return redirect('admin/tags')->with('success', 'tags Deleted successfully');
    
        }



    }
    