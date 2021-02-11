<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prayer;
class prayerController extends Controller
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
        $prayer = prayer::get();
        return view('adminViewPages.prayerTimeFolder.index')->with('prayer',$prayer);
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
            'fa_prayername'=> 'required',
            'de_prayername'=> 'required',
            'en_prayername'=> 'required',
            'ps_prayername'=> 'required',
            'prayertime'=> 'required',
            'amorpm'=> 'required'

        ]);

        $prayer  = new prayer();
        $prayer->fa_prayername=$request->input('fa_prayername');
        $prayer->ps_prayername=$request->input('ps_prayername');
        $prayer->de_prayername=$request->input('de_prayername');
        $prayer->en_prayername=$request->input('en_prayername');
        $prayer->prayertime=$request->input('prayertime');
        $prayer->amorpm=$request->input('amorpm');
        $prayer->save();

        return redirect()->back()->with('success', 'Prayer time created successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prayer = prayer::find($id);
        return view('adminViewPages.prayerTimeFolder.edit')->with('prayer',$prayer);
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
            'fa_prayername'=> 'required',
            'ps_prayername'=> 'required',
            'de_prayername'=> 'required',
            'en_prayername'=> 'required',
            'prayertime'=> 'required',
            'amorpm'=> 'required'

        ]);

        $prayer  = prayer::find($id);
        $prayer->fa_prayername=$request->input('fa_prayername');
        $prayer->ps_prayername=$request->input('ps_prayername');
        $prayer->de_prayername=$request->input('de_prayername');
        $prayer->en_prayername=$request->input('en_prayername');
        
        $prayer->prayertime=$request->input('prayertime');
        $prayer->amorpm=$request->input('amorpm');
        $prayer->save();

        return redirect('admin/prayer')->with('success', 'Prayer Updated  successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prayer = prayer::find($id);
        $prayer-> delete();
        return redirect('admin/prayer')->with('success', 'Prayer Deleted  successfully');

    }
}
