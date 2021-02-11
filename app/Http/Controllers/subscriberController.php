<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subscriber;

class subscriberController extends Controller
{
  public function __construct(){

    $this->middleware('auth');

}
    public function index()
    {
        $subscribers = subscriber::orderBy('id','desc')->simplePaginate(50);
        $AllSubscribers = subscriber::orderBy('id','desc')->get();
        return view('adminViewPages.subscribersFolder.index')
        ->with('subscribers',$subscribers)
        ->with('AllSubscribers',$AllSubscribers);

      
    }

    public function destroy($id)
    {
      $subscribers = subscriber::find($id);
      $subscribers->delete();
      return redirect('admin/our-subscribers')->with('success', 'subscriber Removed successfully');

    }

 
}