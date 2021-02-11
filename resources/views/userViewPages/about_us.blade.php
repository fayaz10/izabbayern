@extends('userViewLayout.userViewApp')
@section('content')
    <!--SAB BANNER START-->
@php $lang=session()->get('locale') @endphp
 <div class="sab_banner theme_overlay">
    <div class="container" >
        <div class="sab_banner_text">
            @foreach ($aboutus as $item)
                @if ($item->header == 'aboutus_header')
                @if ($item->category == 'aboutus')
                <h2>{{ $item->{$lang.'_title'} }}</h2>
                <p >{{ $item->{$lang.'_subtitle'} }}</p>
                <ul class="breadcrumb" >
                    <li class="breadcrumb-item"><b><a href="/index">{{ __('lang.home') }}</a></b></li>
                    <li  class="breadcrumb-item active" aria-current="page"><b>{{ __('lang.about us') }}</b></li>
                </ul>
            @endif
            @endif
            @endforeach
        </div>
    </div>
</div>


    <!--PORTFOLIO WRAP START--> 
    <section class="prortfolio_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @foreach ($aboutus as $about)
                    @if ($about->header != 'aboutus_header')
                    <div class="service_detail">
                        <div class="Portfolio_colume">
                            <figure class="theme_overlay">
                            <img src="storage/MP4_MP3_PDF_Image_files/{{$about->image}}" alt="{{$about->image}}" style="height:390px; width:100%">
                            </figure>
                            <div class="Portfolio_caption service">
                                <div class="service_det_text" >
                                    <h2>{{__($about->{$lang.'_title'})}}</h2>
                                <p>{{__($about->{$lang.'_subtitle'})}}</p>
                                </div>
                                
                            </div>
                        </div>
                        <p>{!!$about->{$lang.'_description'}!!}</p>
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <!--SIDEBAR TEXT START-->
                        <div class="sidebar_text margin45">
                            <h4 class="sidebar_title">{{ __('lang.category') }}</h4>
                            <ul class="sidebar_categories">
                                @foreach ($submenus as $sub)
                            <li><a href="{{$sub->urlLink}}">{{__($sub->{$lang.'_title'})}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!--SIDEBAR TEXT END-->
                        <!--SIDEBAR TEXT START-->
                        <div class="sidebar_text margin45">
                            <h4 class="sidebar_title">{{ __('lang.need help') }}</h4>
                            <ul class="sidebar_info">
                                @foreach ($contactus  as $con)
                                <li>
                                    <div class="sidebar_info_list">
                                        <span><i class="fa  icon-pin-1"></i></span>
                                        <div class="sidebar_info_text">
                                            <p>{{__($con->address)}}</p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                @foreach ($contactus as $con)
                                <li>
                                    <div class="sidebar_info_list">
                                        <span><i class="fa  icon-phone"></i></span>
                                        <div class="sidebar_info_text">
                                            <a href="#">{{__($con->phone1)}}</a>
                                            <a href="#">{{__($con->phone2)}}</a>
                                            <a href="#">{{__($con->phone3)}}</a>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                @foreach ($contactus as $con)
                                <li>
                                    <div class="sidebar_info_list">
                                        <span><i class="fa icon-mail-1"></i></span>
                                        <div class="sidebar_info_text">
                                            <a href="mailto:{{$con->email1}}">{{__($con->email1)}}</a>
                                            <a href="mailto:{{$con->email2}}">{{__($con->email2)}}</a>
                                            <a href="mailto:{{$con->email3}}">{{__($con->email3)}}</a>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!--SIDEBAR TEXT END-->
                        <!--SIDEBAR TEXT START-->
                        <div class="sidebar_text margin45">
                            <h4 class="sidebar_title">{{ __('lang.news') }}</h4>
                            <ul class="latest_news">
                                @foreach ($news as $new)
                                @if ($new->header == 'no_header')
                                    <li> <a href="news/{{$new->id}}">
                                            <div class="latest_news_fig">
                                                <figure class="theme_overlay">
                                                <img src="storage/MP4_MP3_PDF_Image_files/{{$new->image}}" alt="{{$new->title}}" style="width: 70px;height:70px">
                                                </figure>
                                                <div class="latest_news_text">
                                                    <h6>{{$new->{$lang.'_title'} }}</h6>
                                                    <div class="rating_colume">
                                                    <small>{{str_limit($new->{$lang.'_subtitle'},60)}}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </a> 
                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div> 
                        <!--SIDEBAR TEXT END-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PORTFOLIO WRAP END-->

@endsection