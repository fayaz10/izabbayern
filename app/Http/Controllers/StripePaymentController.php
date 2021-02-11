<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use App\models\posts;
use App\models\Doner;
class StripePaymentController extends Controller
{
   /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(Request $request)
    {
        $var = $request->input('category');
        $post = Posts::where('id','=',$var)->get()->all();

         return view('stripe')->with('request', $request)
        ->with('post', $post);
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        
        //store in database if payment is successful
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

       $payment =  Stripe\Charge::create ([
                "amount" => ($request->input('amount'))*100,
                "currency" => $request->input('currency'),
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
        if ($payment) {
            
           $doner = Doner::create([
            "amount" => $request->input('amount'),
            "currency" => $request->input('currency'),
            "category" => $request->input('category'),
            "firstName" => $request->input('firstName'),
            "lastName" => $request->input('lastName'),
            "userName" => $request->input('userName'),
            "email" => $request->input('email'),
            "nameOnCard" => $request->input('nameOnCard'),
            "cardNumber" => $request->input('cardNumber'),

           ]);
           
        }
        Session::flash('success', 'Payment successful!');
        return  view('userViewPages.thank_donate');
      
    }

    public function donatefun(Request $request){
   
        $doner = Doner::create([
            "amount" => $request->input('amount'),
            "currency" => $request->input('currency'),
            "category" => $request->input('category'),
            "firstName" => $request->input('firstName'),
            "lastName" => $request->input('lastName'),
            "userName" => $request->input('userName'),
            "email" => $request->input('email'),
            "nameOnCard" => $request->input('nameOnCard'),
            "cardNumber" => $request->input('cardNumber'),
           ]);
           Session::flash('success', 'Payment successful!');
           return  view('userViewPages.thank_donate');
        // $var=([
        // 'amount'=>$request->input('amount'),
        // 'currency'=>$request->input('currency'),
        // 'category'=>$request->input('category'),
        // 'cardNumber'=>$request->input('cardNumber'),
        // 'cvc'=>$request->input('cvc'),
        // 'expairyMonth'=>$request->input('expairyMonth'),
        // 'expairyYear'=>$request->input('expairyYear'),
        // 'firstName'=>$request->input('firstName'),
        // 'lastName'=>$request->input('lastName'),
        // 'email'=>$request->input('email'),
        // 'userName'=>$request->input('userName'),
        // ]);
        // dd($var);
        // $post = Posts::find($request);

        // // dd($post);
        // return view('userViewPages.donate2')->with('request', $request)
        // ->with('post', $post);

    }
}
