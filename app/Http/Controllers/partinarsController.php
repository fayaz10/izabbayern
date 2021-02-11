<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\partinars;
class partinarsController extends Controller
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
        $partinars = partinars::orderBy('id','desc')->get();
        return view('adminViewPages.partinarsFolder.index')->with('partinars',$partinars);
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
            'en_title'=>'required',
            'de_title'=>'required',
            'ps_title'=>'required',
            'fa_title'=>'required',
            'urlLink'=>'required',
            'status'=>'required'

        ]);
        $partinars = new partinars();
        $partinars->ps_title=$request->input('ps_title');
        $partinars->fa_title=$request->input('fa_title');
        $partinars->de_title=$request->input('de_title');
        $partinars->en_title=$request->input('en_title');

        $partinars->urlLink=$request->input('urlLink');
        $partinars->status=$request->input('status');
        $partinars->save();
        return redirect('admin/partinars')->with('success', 'partinar created successfully');

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
        $partinars = partinars::find($id);      
        return view('adminViewPages.partinarsFolder.edit')->with('partinars',$partinars);
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
            'en_title'=>'required',
            'de_title'=>'required',
            'ps_title'=>'required',
            'fa_title'=>'required',
            'urlLink'=>'required',
            'status'=>'required'

        ]);
        $partinars =  partinars::find($id);
        $partinars->ps_title=$request->input('ps_title');
        $partinars->fa_title=$request->input('fa_title');
        $partinars->de_title=$request->input('de_title');
        $partinars->en_title=$request->input('en_title');
        $partinars->urlLink=$request->input('urlLink');
        $partinars->status=$request->input('status');
        $partinars->save();
        return redirect('admin/partinars')->with('success', 'partinar Updated successfully');

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $partinars = partinars::find($id);
      $partinars->delete();
      return redirect('admin/partinars')->with('success', 'partinar Removed successfully');

    }
}
