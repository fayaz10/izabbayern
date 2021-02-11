@extends('userViewLayout.userViewApp')
@section('content')
@php $lang = session()->get('locale'); @endphp
 <!--SAB BANNER START-->
 <div class="sab_banner theme_overlay">
        <div class="container">
                @foreach ($contactus as $item)
                @if($item->header == 'header')
                <div class="sab_banner_text">
                    <h2>{{$item->{$lang.'_title'} }}</h2>
                    <p>{!!$item->{$lang.'_subtitle'}!!}</p>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/index"> {{ 'lang.index' }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ 'lang.contact us' }}</li>
                    </ul>
                </div>
                @endif
            @endforeach  
        </div>
    </div>
    <!--SAB BANNER END-->

    <section class="keo_contact_us_outer">
        <div class="container">
                <!--SECTION HEADING START-->
                <div class="section_heading text_center margin32">
                    <span class="theme-color"><i class="fa icon- icon-islam-1"></i></span>
                    @foreach ($contactus as $item)
                        @if($item->header == 'down_header') 
                            <h2>{{$item->{$lang.'_title'} }}</h2>
                            <p>{!!$item->{$lang.'_subtitle'} !!}</p>
                        @endif
                    @endforeach
                </div>
            <!--SECTION HEADING END-->
            <div class="row">
                <div class="col-md-7">
                    <div class="keo_contact_form">
                       <h4>{{ __('lang.send message') }}</h4>
                        <div class="keo_contact_field contact_mrgn_btm">
                            <input type="text" name="name" placeholder="{{ __('lang.your name') }}">

                        </div>
                        <div class="keo_contact_field contact_mrgn_btm">
                            <input type="text" name="name" placeholder="{{ __('lang.your email') }}">
                        </div>
                        <div class="keo_contact_field contact_mrgn_btm">
                            <input type="text" name="phone" placeholder="{{ __('lang.your phone') }}">
                        </div>
                        <div class="keo_contact_field contact_mrgn_btm">
                            <input type="text" name="subject" placeholder="{{ __('lang.subject') }}">
                        </div>
                        <div class="keo_contact_field contact_mrgn_btm">
                            <textarea name="user_message" placeholder="{{ __('lang.your message') }}"></textarea>
                        </div>
                        <div class="keo_contact_field">
                            <input type="submit" name="submit" value="{{ __('lang.send') }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="keo_contact_info_wrap">
                        <ul>
                            <li>
                                <div class="contact_icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="keo_contact_des">
                                    <h5>{{ __('lang.our address') }}</h5>
                                    @foreach ($contactus as $item)
                                        @if ($item->header == 'no_header')
                                        <p>{{$item->{$lang.'_address'} }}</p>
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                            <li>
                                <div class="contact_icon">
                                    <i class="fa icon-phone"></i>
                                </div>
                                <div class="keo_contact_des">
                                    <h5>{{ __('lang.phone') }}</h5>
                                    @foreach ($contactus as $item)
                                    @if ($item->header == 'no_header')
                                    <p>{{$item->phone1}}</p>
                                    <p>{{$item->phone2}}</p>
                                    <p>{{$item->phone3}}</p>
                                    @endif
                                    @endforeach
                                </div>
                            </li>
                            <li>
                                <div class="contact_icon">
                                    <i class="fa icon-mail-1"></i>
                                </div>
                                <div class="keo_contact_des">
                                    <h5>{{ __('lang.email') }}</h5>
                                    @foreach ($contactus as $item)
                                    @if ($item->header == 'no_header')
                                    <p><a href="mailto:{{$item->email1}}">{{$item->email1}}</a></p>
                                    <p><a href="mailto:{{$item->email2}}">{{$item->email2}}</a></p>
                                    <p><a href="mailto:{{$item->email3}}">{{$item->email3}}</a></p>
                                    @endif
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>  
            </div>
        </div>
    </section>

           <div class="google-map"> 
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.71795804383!2d11.54491318490501!3d48.13496225932295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479e7601c56b3751%3A0x77ee1b3193940b8b!2sDas%20Islamische%20Zentrum%20der%20Exilafghanen%20in%20Bayern%20e.%20V.!5e0!3m2!1sfa!2s!4v1604605647655!5m2!1sfa!2s" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
               </div>

    <!--NEWSLETTER WRAP START--> 

@endsection