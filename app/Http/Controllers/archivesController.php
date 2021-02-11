<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Tags;
use App\Models\ImagePro;
use Image;
use Storage;
use Carbon\Carbon;
class archivesController extends Controller
{
    
    public function archives()
    {
        $posts  = Posts::latest();
        if($month=request('month')){
            $posts->whereMonth('created_at',Carbon::parse($month)->month);
        }
        if($year=request('year')){
            $posts->whereYear('created_at',Carbon::parse($year)->year);
        }
        $posts = $posts->get();
        $archives = posts::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
        ->groupBy('year','month')
        ->orderByRaw('min(created_at) desc')
        ->get()->toArray();
         $year = request('year');
         $month = request('month');
        return view('userViewPages.archives')
        ->with('archives',$archives)
        ->with('posts',$posts)
        ->with('year',$year)
        ->with('month',$month);
    }
}
