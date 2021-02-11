<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\models\contact;
use App\models\subscriber;
use Mail;
Use DB;
class userContactController extends Controller
{

    public function contactus(){
        $contactus = contact::get();
          return view('userViewPages.contact_us')->with('contactus',$contactus);
  }
    public function userContactUS(Request $request) {

        $this->validate($request,[
    
         'email'=>'email|required|max:255',
         'subject'=>'nullable|max:255',
         'user_message'=>'required|min:10|max:355',
         'name'=>'required|max:55',
         'phone'=> 'nullable|max:14'
    
        ]);
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'user_message' => $request->user_message,
            'name' =>$request->name,
            'phone' =>$request->phone
             );
        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            // $message->sender('john@johndoe.com', 'John Doe');
        
            $message->to('fayaz.nasraty@gmail.com', 'fayaz nasrati');
        
            // $message->cc('john@johndoe.com', 'John Doe');
            // $message->bcc('john@johndoe.com', 'John Doe');
        
            // $message->replyTo('john@johndoe.com', 'John Doe');
        
            $message->subject($data['subject']);
        
            // $message->priority(3); 
        
            // $message->attach('pathToFile');
        });
        // Session::flash('success','We have received ur email.');
        return redirect()->back()->with('success', 'We just received your email.');
    }

    public function subscriber(Request $request)
    {
      $this->validate($request,[
        'subscribers_email' =>'required|email'
      ]);
      $subscriber = new subscriber();
      $subscriber->subscribers_email=$request->input('subscribers_email');
      $subscriber->save();
      return redirect()->back()->with('success','Thnak you for subscribing us.');
    }
}
