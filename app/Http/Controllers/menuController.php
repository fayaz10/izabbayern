<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
class menuController extends Controller
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
        $menu = menu::orderBy('id','desc')->get();
        return view('adminViewPages.menuFolder.index')->with('menu',$menu);
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
            'fa_title'=>'required',
            'ps_title'=>'required',
            'de_title'=>'required',
            'en_title'=>'required',
            'urlLink'=>'required',
            'status'=>'required'

        ]);
        $menu = new menu();
        $menu->fa_title=$request->input('fa_title');
        $menu->ps_title=$request->input('ps_title');
        $menu->en_title=$request->input('en_title');
        $menu->de_title=$request->input('de_title');

        $menu->urlLink=$request->input('urlLink');
        $menu->status=$request->input('status');
        $menu->save();
        return redirect('admin/menu')->with('success', 'Menu created successfully');

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
        $menu = menu::find($id);      
        return view('adminViewPages.menuFolder.edit')->with('menu',$menu);
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
            'ps_title'=>'required',
            'de_title'=>'required',
            'en_title'=>'required',
            'urlLink'=>'required',
            'status'=>'required'

        ]);
        $menu =  menu::find($id);
        $menu->fa_title=$request->input('fa_title');
        $menu->ps_title=$request->input('ps_title');
        $menu->en_title=$request->input('en_title');
        $menu->de_title=$request->input('de_title');

        $menu->urlLink=$request->input('urlLink');
        $menu->status=$request->input('status');
        $menu->save();
        return redirect('admin/menu')->with('success', 'Menu Updated successfully');

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $menu = menu::find($id);
      $menu->delete();
      return redirect('admin/menu')->with('success', 'Menu Deleted successfully');

    }
}
