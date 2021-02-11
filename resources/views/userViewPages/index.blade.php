@extends('userViewLayout.userViewApp')

@section('content')
@php $lang = session()->get('locale'); @endphp

<div class="main_banner">
        <div class="banner-slider">
            @foreach ($banners as $item)
            <div>
                <figure class="Banner_theme_overlay">
                    {{-- <img src=" asset({{$item->image}})" alt=""> --}}
                    <img src="../../storage/MP4_MP3_PDF_Image_files/{{$item->image}}" alt="{{$item->image}}" >
                    <div class="banner_text">
                        <span class="white_text theme-bg animated">{{$item->{$lang.'_title'} }}</span>
                        <div class="large_text animated">{!! str_limit($item->{$lang.'_subtitle'},120)!!}</div>
                        <div class="large_text animated" style="color: white">{!! str_limit($item->{$lang.'_description'},215)!!}</div>
                        <div class="banner_btn">
                            <a class="theme_btn white_text theme-bg theme-border margin_right25 animated" href="details/{{$item->id}}">{{ __('lang.more') }}</a>
                            <a class="theme_btn white_text border_white animated" href="/contct-us">{{ __('lang.contact us') }}</a>
                        </div>
                    </div>
                </figure>
            </div>
            @endforeach
          </div>
    </div>
    <!--MAIN BANNER END-->  
    <!--CONTENT START--> 
    <div class="content">
        <!--HISTORY WRAP START--> 
        <section class="history_wrap">
            <div class="container">
            <!--SECTION HEADING START-->
            <div class="section_heading text_center margin32">
            <span class="theme-color"><i class="fa icon- icon-islam-1"></i></span>
            <h2>{{ __('lang.prayer time') }}</h2>
           </div>
<!--SECTION HEADING END-->

     {{-- persion prayer time  --}}
     @if (session('locale') == 'fa')
         
        <div class="row">   
            @foreach ($fa_prayer as $pray)
            <div class="col-md-2 col-sm-6 col-xs-6">
                <div class="history_colume margin30">
                    <div class="history_service">
                        <span class="theme-color"><i class="fa icon-time"></i></span>
                            <h6>{{$pray->fa_prayername}}</h6>
                            <h6>{{$pray->prayertime}} 
                            @php
                                if ($pray->amorpm == 1) {
                                    echo'AM';
                               
                                }else {
                                    echo'PM';
                                }
                            @endphp </h6>
                    </div>
                    <div class="history_service_text">
                        <i class="fa icon-time"></i><br>
                        {{$pray->fa_prayername}}<br>
                        {{$pray->prayertime}}
                        @php
                            if ($pray->amorpm == 1) {
                                echo'AM';
                           
                            }else {
                                echo'PM';
                            }
                        @endphp 
                    </div>
                </div>
            </div>
            @endforeach  
        </div> 
     @else
     {{-- German prayer time --}}
     <div class="row">   
        @foreach ($prayer as $pray)
        <div class="col-md-2 col-sm-6 col-xs-6">
            <div class="history_colume margin30">
                <div class="history_service">
                    <span class="theme-color"><i class="fa icon-time"></i></span>
                        <h6>{{$pray->prayername}}</h6>
                        <h6>{{$pray->prayertime}}
                         @php
                            if ($pray->amorpm == 1) {
                                echo'AM';
                           
                            }else {
                                echo'PM';
                            }
                        @endphp </h6>
                </div>
                <div class="history_service_text">
                    <i class="fa icon-time"></i><br>
                     {{$pray->prayername}}<br>
                     {{$pray->prayertime}}
                    @php
                        if ($pray->amorpm == 1) {
                            echo'AM';
                       
                        }else {
                            echo'PM';
                        }
                    @endphp 
                </div>
            </div>
        </div>
        @endforeach  
    </div> 
     @endif
      </div>                
</section>
    </div>

            @if (count($events)> 0 || count($eventsup)> 0)
                <section class="news_wrap">
                    <div class="container">
                        <!--SECTION HEADING START-->
                        <div class="section_heading text_center margin32">
                            <span class="theme-color"><i class="fa icon- icon-islam-1"></i></span>
                            <h2>{{ __('lang.events') }}</h2>
                        </div>
                        <div class="row">
                            @if (count($eventsup)> 0 )
                            @foreach ($eventsup as $eventup)
                            <div class="col-md-6">
                                <div class="news_fig">
                                    <figure class="theme_overlay">
                                    <img src="/storage/MP4_MP3_PDF_Image_files/{{$eventup->image}}" alt="">
                                    </figure>
                                    <div class="news_text">
                                        <h4>
                                            @if ($eventup->post_type=='upcoming_event')
                                                <b style="color: green"> {{__('lang.upcoming events')}}</b>
                                                {{ $eventup->{$lang.'_title'} }} <br>
                                                @else
                                                {{__('lang.events')}}
                                            @endif
                                            <small>{{$eventup->date}} {{$eventup->timing}}</small>
                                        </h4>
                                        <p>{!! str_limit($eventup->{$lang.'_subtitle'},300)!!}</p>
                                        <a class="more_btn" href="details/{{$eventup->id}}">{{ __('lang.more') }}<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-md-6">
                                <div class="row">
                                    @endif
                                    @if (count($events)>0)
                                    @foreach ($events as $event)
                                    @if ($event->header == 'no_header')
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="news_fig margin25">
                                            <figure class="theme_overlay">
                                                <img src="/storage/MP4_MP3_PDF_Image_files/{{$event->image}}" alt="">
                                            </figure>
                                            <div class="news_text text2">
                                                <h6>{{str_limit($event->{$lang.'_title'},80)}}</h6>
                                                <p>{!! str_limit($event->{$lang.'_subtitle'},60)!!}</p>
                                            <a class="more_btn" href="details/{{$event->id}}">{{ __('lang.more') }}<i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    @else
                                <h2>{{__('No Event yet')}}</h2>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="all_team text_right">
                                    <a class="theme_btn white_text theme-bg" href="/events">{{ __('lang.all events') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif   
        {{-- @endif --}}
        <!--Events WRAP END--> 
        @if (count($gallery)>0)
                          <!--GALLERY WRAP START--> 
                    <section class="gallery_wrap">
                        <div class="container">
                            <div class="row">
                                @if (count($gallery)>=1)
                                @foreach ($gallery as $item)
                                  @if ($item->header == 'gallery_header')
                                    <div class="col-md-3 col-sm-6 col-xs-6">
                                        <div class="colume_padding margin30">
                                            <div class="gallery_figText">
                                                <span class="theme-color"></span>
                                                <h2 class="margin4">{{ __('lang.our gallery') }}</h2>
                                            <p>{!!$item->{$lang.'_subtitle'}!!}</p>
                                            </div>
                                        </div>
                                    </div>
                                  @endif
                                @endforeach
                                @endif
                                @foreach ($galleryHeader as $item)
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="colume_padding margin30">
                                        <div class="gallery_fig">
                                            <figure class="theme_overlay">
                                                <img style="height: 300px" src="/storage/MP4_MP3_PDF_Image_files/{{$item->image}}" alt="">
                                            <h6 class="islamic_title theme-color"><a href="details/{{$item->id}}">{{ __('lang.more details') }}</a></h6>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="colume_padding">
                                        <div class="gallery_fig">
                                            <div class="view_galley text-center">
                                                <a class="theme_btn white_text theme-bg theme-border" href="/gallery" tabindex="0">{{ __('lang.all gallery') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
        @endif
        <!--GALLERY WRAP END-->
@endsection