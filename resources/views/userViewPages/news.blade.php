@extends('userViewLayout.userViewApp')
@section('content')
@php
    $lang=session()->get('locale');
@endphp
  <!--SAB BANNER START-->
  <div class="sab_banner theme_overlay">
        <div class="container">
                @foreach ($news as $item)
                    @if ($item->header == 'news_header')
                    @if ($item->sub_header == 'top_header')
                        <div class="sab_banner_text">
                            <h2>{{ $item->{$lang.'_title'} }}</h2>
                            <p>{{ $item->{ $lang.'_subtitle'} }}</p>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"> {{ __('lang.home') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('lang.news') }}</li>
                            </ul>
                        </div>
                    @endif
                    @endif
                @endforeach
        </div>
    </div>
    <!--SAB BANNER END-->
    <!--EVENT WRAP START--> 
    <section class="event_wrap">
        <div class="container">
            @if (count($news)>=1)
               @if (session('locale') =='fa' || session('locale') =='pa')
                    @foreach ($news as $item)
                        @if ($item->header == 'no_header')
                        <div class="event_fig listing bg_gray margin30 row">
                            <div class="col-md-8">
                             <div class="event_text" style="text-align: right;float: left;">
                                 <h5> @if ($item->eventorupevent == 1)<b style="color: rgb(250, 41, 41)"> {!!__('lang.breaking news')!!}</b> @endif{{__($item->{$lang.'_title'} )}}</h5>
                                 <ul class="blog_meta">
                                     @if ($item->timing != null)
                                         <li><a href="#"><i class="fa icon-time-1"></i>{{__($item->timing)}}</a></li>
                                     @endif
                                     @if ($item->location != null)
                                         <li><a href="#"><i class="fa  icon-pin-1"></i>{{__($item->{$lang.'_location'})}}</a></li>
                                     @endif
                                 </ul>
                             <p>{!!__(str_limit($item->{$lang.'_subtitle'},300))!!}</p>
                                 <a class="more_btn" href="details/{{$item->id}}">{{ __('lang.more details') }} <i class="fa fa-angle-left"></i></a>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <figure class="theme_overlay" style="float: right">
                                 <img src="storage/MP4_MP3_PDF_Image_files/{{$item->image}}" alt="{{$item->image}}" style="height: 200px;width:400px">
                                  @if ($item->date != null)
                                  <div  style="padding-top:25px"class="event_date">{{__(str_limit($item->date,6))}}</div>
                                  @endif
                             </figure>
                         </div>
                     </div>
                        @endif
                    @endforeach
               @else
                        @foreach ($news as $item)
                          @if ($item->header == 'no_header')
                            <div class="event_fig listing bg_gray margin30">
                                <figure class="theme_overlay">
                                <img src="storage/MP4_MP3_PDF_Image_files/{{$item->image}}" alt="{{$item->image}}" style="height: 200px;width:400px">
                                @if ($item->date != null)
                                <div  style="padding-top:25px"class="event_date">{{__(str_limit($item->date,6))}}</div>
                                @endif
                                </figure>
                                <div class="event_text">
                                    <h5>{{__($item->{$lang.'_title'})}} @if ($item->eventorupevent == 1)
                                        <b style="color: rgb(250, 41, 41)"> {!!__('lang.breaking news')!!}</b>
                                    @endif</h5>
                                    <ul class="blog_meta">
                                        @if ($item->timing != null)
                                        <li><a href="#"><i class="fa icon-time-1"></i>{{__($item->timing)}}</a></li>
                                            @endif
                                        @if ($item->location != null)
                                        <li><a href="#"><i class="fa  icon-pin-1"></i>{{__($item->{$lang.'_location'} )}}</a></li>
                                            @endif
                                    </ul>
                                <p>{!!__(str_limit($item->{$lang.'_subtitle'},300))!!}</p>
                                    <a class="more_btn" href="details/{{$item->id}}">{{ __('lang.more details') }}<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            @endif
                        @endforeach
                   
               @endif
            @else
            <div>
                <h3>No news yet!.</h3>
            </div>
            @endif
         
            @if (count($news)>5)
            <div class="pagination_list">
                <ul>
                <h6> {{$news->links()}}</h6>
                </ul>
            </div>
            @endif
        </div>
    </section>
    <!--EVENT WRAP END-->


@endsection