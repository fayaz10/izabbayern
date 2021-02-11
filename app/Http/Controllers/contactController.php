<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
class contactController extends Controller
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
        $contacts = contact::get();
        return view('adminViewPages.contactFolder.index')->with('contacts',$contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('adminViewPages.contactFolder.create');
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
            'fa_address'=>'required',

            'de_title'=>'required',
            'de_subtitle'=>'required',
            'de_address'=>'required',

            'phone1'=>'required',
            'phone2'=>'nullable',
            'phone3'=>'nullable',
            'email1'=>'required',
            'email2'=>'nullable',
            'email3'=>'nullable'
            

        ]);
    
            // =====================
        $contact = new contact();
        $contact->header=$request->input('header');

        $contact->fa_title=$request->input('fa_title');
        $contact->fa_subtitle=$request->input('fa_subtitle');
        $contact->fa_address=$request->input('fa_address');

        $contact->pa_title=$request->input('pa_title');
        $contact->pa_subtitle=$request->input('pa_subtitle');
        $contact->pa_address=$request->input('pa_address');

        $contact->de_title=$request->input('de_title');
        $contact->de_subtitle=$request->input('de_subtitle');
        $contact->de_address=$request->input('de_address');

        $contact->en_title=$request->input('en_title');
        $contact->en_subtitle=$request->input('en_subtitle');
        $contact->en_address=$request->input('en_address');

        $contact->phone1=$request->input('phone1');
        $contact->phone2=$request->input('phone2');
        $contact->phone3=$request->input('phone3');
        $contact->email1=$request->input('email1');
        $contact->email2=$request->input('email2');
        $contact->email3=$request->input('email3');
        $contact->save();
        return redirect('admin/contact')->with('success', 'contact created successfully');
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
         
        $contact = contact::find($id);      
        return view('adminViewPages.contactFolder.edit')->with('contact',$contact);
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
            'fa_address'=>'required',

            'de_title'=>'required',
            'de_subtitle'=>'required',
            'de_address'=>'required',
            
            'phone1'=>'required',
            'phone2'=>'nullable',
            'phone3'=>'nullable',
            'email1'=>'required',
            'email2'=>'nullable',
            'email3'=>'nullable'
        ]);
    
            // =====================
        $contact = contact::find($id);
        $contact->header=$request->input('header');
        
        $contact->fa_title=$request->input('fa_title');
        $contact->fa_subtitle=$request->input('fa_subtitle');
        $contact->fa_address=$request->input('fa_address');

        $contact->pa_title=$request->input('pa_title');
        $contact->pa_subtitle=$request->input('pa_subtitle');
        $contact->pa_address=$request->input('pa_address');

        $contact->de_title=$request->input('de_title');
        $contact->de_subtitle=$request->input('de_subtitle');
        $contact->de_address=$request->input('de_address');

        $contact->en_title=$request->input('en_title');
        $contact->en_subtitle=$request->input('en_subtitle');
        $contact->en_address=$request->input('en_address');

        $contact->phone1=$request->input('phone1');
        $contact->phone2=$request->input('phone2');
        $contact->phone3=$request->input('phone3');
        $contact->email1=$request->input('email1');
        $contact->email2=$request->input('email2');
        $contact->email3=$request->input('email3');
        $contact->save();
        return redirect('admin/contact')->with('success', 'contact created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = contact::find($id);
        $contact->delete();
        return redirect()->back()->with('success', 'contact created successfully');

    }
}
