<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doner;
use App\Models\posts;

class donerController extends Controller
{

    public function index()
    {
        $Doners = Doner::orderBy('id','desc')->simplePaginate(50);

        // $Doners = Doner::orderBy('id','asc')->get();
        // foreach($Doners as $key =>$val){
        //         if($title = Posts::where(['id'=>$val->category])->first()){
        //          $Doners[$key]->category = $title->fa_name;
        //         }
        //         elseif($title = Posts::first()){
        //             $Doners[$key]->category = 'Releted to no Main Menus!';
        //         }
        // }
        return view('adminViewPages.donersFolder.index')
        ->with('Doners',$Doners);

      
    }
    
}
