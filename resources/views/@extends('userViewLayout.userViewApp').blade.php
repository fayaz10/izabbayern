@extends('userViewLayout.userViewApp')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@php
    $lang = session('locale')
@endphp
 <form 
                role="form" 
                action="{{ route('stripe.post') }}" 
                method="post" 
                class="require-validation"
                data-cc-on-file="false"
                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                id="payment-form">
               @csrf
  <!-- 404 Page Wrap End -->
  <section class="keo_contact_us_outer">
        <div class="container">
            <!--SECTION HEADING START-->

            <!--SECTION HEADING END-->
            <div class="row">

                <div class="col-md-8">
                    <center><h4>Your information</h4></center>
                    <div class="keo_contact_form">
                        <div class="row">
                            <div class="col-lg-6"><label for="First Name">First name</label>
                                <div class="keo_contact_field contact_mrgn_btm">
                                    <input type="text" name="name" placeholder="First name...">
                                </div>
                            </div>
                            <div class="col-lg-6"><label for="last name">Last name</label>
                               <div class="keo_contact_field contact_mrgn_btm">
                                <input type="text" name="name" placeholder="Last name...">
                               </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><label for="User Name">User name</label>
                                <div class="keo_contact_field contact_mrgn_btm">
                                    <input type="text" name="name" placeholder="User name...">
                                </div>
                            </div>
                            <div class="col-lg-6"><label for="last name">Email(Optional)</label>
                               <div class="keo_contact_field contact_mrgn_btm">
                                <input type="email" name="name" placeholder="Your Email">
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <center><h4>Your donation Amount</h4></center>
                    
                    <div class="keo_contact_info_wrap" style="padding: 15px;">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6"><b>Category</b></div>
                            <div class="col-lg-6 col-sm-6">
                                @foreach($post as $key => $value)
                                {{ $value->{$lang.'_title'} }}
                                @endforeach 
                              </div>
                        </div><hr>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6"><b>Amount</b></div>
                            <div class="col-lg-6 col-sm-6"> {{ $request->input('money') }}</div>
                        </div><hr>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6" style="color: #146e39;"><b>Amount to charge</b></div>
                            <div class="col-lg-6 col-sm-6" style="color: #146e39;"><b> {{ $request->input('money') }} {{ $request->input('currency') }}</b></div>
                        </div><hr>
                    <div class="row">
                        <div class="col-12">
                            <center>
                                <div class="keo_contact_field">
                                  <a href="/donate"><lable value="Reset Amount"style="background-color: #146e39;color:#ffff;padding:10px 40px 10px 40px">Reset payment</label></a>
                                </div>
                            </center>
                        </div><br><br>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="keo_contact_us_outer">
        <div class="container">
            @if (Session::has('success'))
            <div class="alert alert-success text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>{{ Session::get('success') }}</p>
            </div>
            @endif
            <div class='form-row row'>
                <div class='col-md-12 error form-group hide'>
                    <div class='alert-danger alert'>Please correct the errors and try
                        again.</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center><h4>Your Payment Method</h4></center>
                    
                    <div class="keo_contact_info_wrap" style="padding: 15px;">
                      <div class="row">
                        <div class="col-lg-2"><input checked type="radio" id="male" name="gender" value="male"></div>
                        <div class="col-lg-5">Master card</div>
                        <div class="col-lg-5"><img src="images/mastercard.png" alt="" srcset=""></div>
                        </div><hr>
                        <div class="row">
                        <div class="col-lg-2"><input type="radio" id="male" name="gender" value="male"></div>
                        <div class="col-lg-5">PayPal</div>
                        <div class="col-lg-5"><img src="images/paypal2.png" alt="" srcset=""></div>
                        </div><hr>
                        <div class="row">
                        <div class="col-lg-2"><input type="radio" id="male" name="gender" value="male"></div>
                        <div class="col-lg-5">Visa Card</div>
                        <div class="col-lg-5"><img src="images/visa.png" alt="" srcset=""></div>
                        </div><hr><br><br><br>
                    </div>
                </div>
                <div class="col-md-8">
                    <center><h4>Your card information</h4></center>
                    <div class="keo_contact_form">
                        <div class="row">
                            <div class="col-lg-6"><label for="First Name">Name on card</label>
                                <div class="keo_contact_field contact_mrgn_btm">
                                    <input type="text" name="name" placeholder="FAYAZ NASRATI...">
                                </div>
                            </div>
                            <div class="col-lg-6 form-group card required">
                                <label for="last name">Cridet Card Number</label>
                               <div class="keo_contact_field contact_mrgn_btm">
                                <input type="text" autocomplete='off'
                                class='form-control card-number' size='20'
                                name="cardNumber" required placeholder="5512-7000-XXXX-XXXX-XXXX">
                               </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 form-group expiration required">
                                <label for="User Name">Expiration Month</label>
                                <div class="keo_contact_field contact_mrgn_btm">
                                    <input autocomplete='off' class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'name="cardExpiryMonth" >
                                </div>
                            </div>
                            <div class="col-lg-4 form-group expiration required">
                                <label for="User Name">Expiration Year</label>
                                <div class="keo_contact_field contact_mrgn_btm">
                                    <input autocomplete='off'  class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'name="cardExpiryYear" >
                                </div>
                            </div>
                            <div class="col-lg-4 form-group cvv required">
                                <label for="last name">CVV</label>
                               <div class="keo_contact_field contact_mrgn_btm">
                                <input placeholder='ex. 311'  type="text"
                                autocomplete='off' max='4'class='form-control card-cvc'>
                               </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <center>
                                    <div class="keo_contact_field">
                                      <input type="submit" name="submit" value="Pay Now "style="background-color: 146e39;color:#ffff;">
                                    </div>
                                </center>
                            </div><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--NEWSLETTER WRAP START--> 



  
</form> 
@endsection 


<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$(function() {
   
    var $form         = $(".require-validation");
   
    $('form.require-validation').bind('submit', function(e) {
        var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
  
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
   
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
               
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
   
});
</script>
=====================================================================

<section class="keo_contact_us_outer">
    <div class="container">
        <!--SECTION HEADING START-->

        <!--SECTION HEADING END-->
        <div class="row">
<form 
role="form" 
action="{{ route('stripe.post') }}" 
method="post" 
class="require-validation"
data-cc-on-file="false"
data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
id="payment-form">
@csrf
{{-- <form 
role="form" 
action="/doante-route" 
method="post" 
class="require-validation"
data-cc-on-file="false"
data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
id="payment-form">
@csrf --}}
            <div class="col-md-8">
                <center><h4>{{ __('lang.your information') }}</h4></center>
                <div class="keo_contact_form">
                    <div class="row">
                        <div class="col-lg-6"><label for="First Name">{{ __('lang.fname') }} ( {{ __('lang.optional') }} )</label>
                            <div class="keo_contact_field contact_mrgn_btm">
                                <input type="text" name="firstName" placeholder="{{ __('lang.fname') }}">
                            </div>
                        </div>
                        <div class="col-lg-6"><label for="last name">{{ __('lang.lname') }} ( {{ __('lang.optional') }} )</label>
                           <div class="keo_contact_field contact_mrgn_btm">
                            <input type="text" name="lastName" placeholder="{{ __('lang.lname') }}">
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6"><label for="User Name">{{ __('lang.uname') }}( {{ __('lang.optional') }} )</label>
                            <div class="keo_contact_field contact_mrgn_btm">
                                <input type="text" name="userName" placeholder="{{ __('lang.uname') }}">
                            </div>
                        </div>
                        <div class="col-lg-6"><label for="last name">{{ __('lang.email') }}( {{ __('lang.optional') }} )</label>
                           <div class="keo_contact_field contact_mrgn_btm">
                            <input type="text" name="email" placeholder="{{ __('lang.your email') }}">
                           </div>
                        </div>
                        <input type="hidden" name="amount" value="{{ $request->input('amount') }}">
                        <input type="hidden" name="currency" value="{{ $request->input('currency') }}">
                        <input type="hidden" name="category" value="{{ $request->input('category') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <center><h4>{{ __('lang.your donation amount') }}</h4></center>
                
                <div class="keo_contact_info_wrap" style="padding: 15px;">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6"><b>{{ __('lang.in category') }}</b></div>
                        <div class="col-lg-6 col-sm-6">
                            @foreach($post as $key)
                            {{ $key->{$lang.'_title'} }}
                            @endforeach 
                          </div>
                    </div><hr>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6"><b>{{ __('lang.amount') }}</b></div>
                        <div class="col-lg-6 col-sm-6"> {{ $request->input('amount') }}</div>
                    </div><hr>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6" style="color: #146e39;"><b>{{ __('lang.amount to charge') }}</b></div>
                        <div class="col-lg-6 col-sm-6" style="color: #146e39;"><b> {{ $request->input('amount') }} {{ $request->input('currency') }}</b></div>
                    </div><hr>
                <div class="row">
                    <div class="col-12">
                        <center>
                            <div class="keo_contact_field">
                              <a href="/donate"><lable value="Reset Amount"style="background-color: #146e39;color:#ffff;padding:10px 40px 10px 40px">{{ __('lang.reset payment') }}</label></a>
                            </div>
                        </center>
                    </div><br><br>
                </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="keo_contact_us_outer">
          <div class='form-row row'>
            <div class='col-md-12 error form-group hide'>
                <div class='alert-danger alert'>
                {{__('lang.Please correct the errors and try again.')}}</div>
            </div>
        </div>
        
        <div class="row">
            <div class="container">
                <div class="col-md-4">
                    <center><h4>{{ __('lang.your payment method') }}</h4></center>
                    
                 
                </div>
             
                <div class="col-md-8 ">
                    <center><h4>{{ __('lang.your card information') }}</h4></center>
                    <div class="panel-body keo_contact_info_wrap">
                            <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>{{ __('lang.name on card') }}</label>
                                     <input name="nameOnCard" class='form-control' size='30' type='text'>
                                </div>
                            </div>
                    
                            <div class='form-row row'>
                                <div class='col-xs-12 form-group card required'>
                                    <label class='control-label'>{{ __('lang.card number') }}</label>
                                     <input name="cardNumber" autocomplete='off' class='form-control card-number' size='20' type='text'>
                                </div>
                            </div>
                    
                            <div class='form-row row'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label>
                                     <input name="cvc" autocomplete='off'class='form-control card-cvc' placeholder='ex. 311' size='4'type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>{{ __('lang.expiration month') }}</label> 
                                    <input name="expairyMonth" class='form-control card-expiry-month' placeholder='MM' size='2'type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>{{ __('lang.expiration year') }}</label>
                                     <input name="expairyYear" class='form-control card-expiry-year' placeholder='YYYY' size='4'type='text'>
                                </div>
                            </div>
                    
                            <div class='form-row row'>
                                <div class='col-md-12 error form-group hide'>
                                    <div class='alert-danger alert'>{{ __('lang.Please correct the errors and try again.') }}</div>
                                </div>
                            </div> 
                    
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">{{ __('lang.pay') }}</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==================================================================================== --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
<script type="text/javascript">
$(function() {
   
    var $form         = $(".require-validation");
   
    $('form.require-validation').bind('submit', function(e) {
        var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
  
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
   
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
               
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
   
});
</script>
