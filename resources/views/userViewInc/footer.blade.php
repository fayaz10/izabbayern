        <!--NEWSLETTER WRAP START--> 
        @php $lang = session()->get('locale');@endphp
        {{-- {{$item->{$lang.'_title'} }} --}}
   
   <section class="newsletter_wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="newsletter_text">
                    <h4>{{__('lang.subscribe us for updates')}}</h4>
                    <p>{{__('lang.subscribe us for more news and updates')}}</p>
                </div>
            </div>
            <form method="post" enctype="multipart/form-data" action="{{url('/subscrib')}}">
                @csrf  
                <div class="col-md-6">
                    <div class="newsletter_field">
                        <input type="text" style="text-align: right" name="subscribers_email" placeholder="{{ __('lang.your email') }}">
                        <button type="submit" class="theme_btn white_text theme-bg" href="#">{{ __('lang.send') }}</button>
                    </div>
                </div>  
            </form>  
        </div>
    </div>
</section> 
    
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i style="font-size: 2em;"class="fa fa-angle-up"></i></button>
                      
        <!--NEWSLETTER WRAP END--> 

        <footer>
            <!--WIDGET WRAP START--> 
            <div class="widget_wrap " style="background-image: url('../../images/footerBackImage.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6" >
                         
                            <div class="widget_text">
                                <h4 class="widget_title">{{__('lang.our partners')}}</h4>
                                <ul class="widget_link">
                                    @foreach ($partinars as $item)
                                   <li><a href="{{$item->urlLink}}" target="_blank">{{$item->{$lang.'_title'} }}</a></li>
                                    @endforeach

                                </ul>
                                <hr>
                                <h6 >{{ __('lang.follow us') }}</h6>
                                <ul class="widget_icon" >
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-camera"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                                               
                           
                           
                        </div>
                     
                      <div class="col-md-3 col-sm-6" >
                        <div class="widget_text">
                            <h4 class="widget_title">{{__('lang.useful links')}}</h4>
                            <ul class="widget_link">
                                @foreach ($menus as $item)
                            <li><a href="{{$item->urlLink}}">{{$item->{$lang.'_title'} }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" >
                        <div class="widget_text">
                            <h4 class="widget_title">{{__('lang.contact us')}}</h4>
                            <ul class="widget_info">
                                @foreach ($contactus as $item)
                                <li><a href="#"><i class="fa icon-phone"></i>{{$item->phone1}}</a></li>
                                <li><a href="mailto:{{$item->email1}}"><i class="fa icon-mail-1"></i>{{$item->email1}}</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i>{{$item->{$lang.'_address'} }}</a></li>
                                @endforeach
                                
                           
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget_text">
                            <h4 class="widget_title">{{__('lang.send message')}}</h4>
                            <div class="widget_form">
                                <form data-parsley-validate method="POST" enctype="multipart/form-data" action="{{ url('user-contact-us') }}">
                                    {{csrf_field()}}
                                
                                <input type="text" name="name" placeholder="{{ __('lang.your name') }}">
                                <input type="text" name="email" placeholder="{{ __('lang.your email') }}">
                                <input type="text" name="phone" placeholder="{{ __('lang.your phone') }}">
                                <textarea name="user_message" placeholder="{{ __('lang.your message') }}"></textarea>
                                <button class="theme_btn white_text theme-bg" href="#">{{__('lang.send')}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                      
                    </div>
                </div>
            </div> 
            <!--WIDGET WRAP END-->

            <!--COPYRIGHT WRAP START-->
            <div class="copyright_wrap">
                <div clas="container">
                    <div class="copyright_text">

                        <p>©{{__('lang.copyright')}} {{ date('Y') }}{{__('lang.reservied to IZABBAERN')}}</p>
                    </div>
                </div>
              
            </div>
            <!--COPYRIGHT WRAP END-->
        </footer>   