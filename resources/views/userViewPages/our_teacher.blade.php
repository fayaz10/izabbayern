@extends('userViewLayout.userViewApp')
@section('content')
@php
    $lang=session()->get('locale');
@endphp
<!--SAB BANNER START-->
<div class="sab_banner theme_overlay">
        <div class="container">
            <div class="sab_banner_text">
             @foreach ($teachers as $item)
                @if ($item->header == 'teacher_header')
                    <h2>{{ $item->{$lang.'_name'} }}</h2>
                    <p>{{ $item->{$lang.'_subname'} }}</p>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">{{ __('lang.home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('lang.teachers') }}</li>
                    </ul>
                @endif
             @endforeach
            </div>
        </div>
    </div>
    <!--SAB BANNER END-->
    <!--TEAM WRAP START--> 
    <section class="team_wrap">
        <div class="container">
     <!--SECTION HEADING START-->
     <div class="section_heading text_center margin32">
        <span class="theme-color"><i class="fa icon- icon-islam-1"></i></span>
         <h2>{{ __('lang.teachers') }}</h2>
    </div>
    <!--SECTION HEADING END-->
            <div class="row">
                @if (count($teachers)>0)
                        @foreach ($teachers as $item)
                            @if ($item->header =='no_header')
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="colume_padding margin30">
                                        <div class="team_fig">
                                            <figure>
                                            <img src="storage/MP4_MP3_PDF_Image_files/{{$item->image}}" alt="{{$item->image}}" style="height: 150px;width:150px">
                                            </figure>
                                        <a href="our-team/{{$item->id}}"><h6 class="islamic_title">{{$item->{$lang.'_name'} }} <span>{{$item->{$lang.'_subname'} }}</span></h6></a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                 @else
            <div>
            <h3> No teachers yet to show!.</h3>
            </div>
           </div>
           @endif
        </div>  
    </section>
    <!--TEAM WRAP END--> 
    <!--NEWSLETTER WRAP START--> 
@endsection
