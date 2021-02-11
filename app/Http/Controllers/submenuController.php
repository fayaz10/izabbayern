<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\Tags;
use App\Models\submenu;

class submenuController extends Controller
{
    public function __construct(){

        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

    $menu = menu::get();
    $tags = Tags::get();
        $submenu = submenu::orderBy('id','asc')->get();
        foreach($submenu as $key =>$val){
             if($title = menu::where(['id'=>$val->menu_id])->first()){
                 $submenu[$key]->menu_id = $title->title;
             }elseif($title = menu::first()){
                $submenu[$key]->menu_id = 'Releted to no Main Menus!';
             }
        }
        return view('adminViewPages.submenuFolder.index')->with('submenu',$submenu)
        ->with('menu',$menu)
        ->with('tags',$tags);

    }

    /**
     * Show the form for creating a new resource.
     *   $menu = menu::get();
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
            'de_title'=>'required',
            'fa_title'=>'required',
            'ps_title'=>'required',
            'en_title'=>'required',
            'urlLink'=>'nullable',
            'menu_id'=>'required',
            'status'=>'required'

        ]);
        $submenu = new submenu();
        $submenu->de_title=$request->input('de_title');
        $submenu->fa_title=$request->input('fa_title');
        $submenu->ps_title=$request->input('ps_title');
        $submenu->en_title=$request->input('en_title');

        $submenu->urlLink=$request->input('urlLink');
        $submenu->status=$request->input('status');
        $submenu->menu_id=$request->input('menu_id');
        $submenu->save();
        return redirect('admin/submenu')->with('success', 'submenu created successfully');
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
        $menu = menu::get();
        $submenu = submenu::find($id);      
        return view('adminViewPages.submenuFolder.edit')->with('submenu',$submenu)->with('menu',$menu);
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
            'en_title'=>'required',
            'de_title'=>'required',
            'ps_title'=>'required',
            'urlLink'=>'required',
            'menu_id'=>'required',
            'status'=>'required'

        ]);
        $submenu = submenu::find($id);
        $submenu->de_title=$request->input('de_title');
        $submenu->fa_title=$request->input('fa_title');
        $submenu->en_title=$request->input('en_title');
        $submenu->ps_title=$request->input('ps_title');
        
        $submenu->urlLink=$request->input('urlLink');
        $submenu->status=$request->input('status');
        $submenu->menu_id=$request->input('menu_id');
        $submenu->save();
        return redirect('admin/submenu')->with('success', 'submenu created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $submenu = submenu::find($id);
        $submenu->delete();
        return redirect('admin/submenu')->with('success', 'Submenu Deleted successfully');
    }
}
