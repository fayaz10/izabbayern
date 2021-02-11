@extends('userViewLayout.userViewApp')
@section('content')
@livewireStyles

@php $lang = session()->get('locale') @endphp
  <!--SAB BANNER START-->
  <div class="sab_banner theme_overlay">
        <div class="container">
                @foreach ($publishes as $item)
                    @if ($item->header == 'publish_header')
                        <div class="sab_banner_text">
                            <h2>{{ $item->{$lang.'_title'} }}</h2>
                             <p >{!! str_limit($item->{__($lang.'_subtitle')},200) !!}</p>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">{{ __('lang.our publishes') }}</li>
                                <li class="breadcrumb-item"><a href="/">{{ __('lang.home') }}</a></li>
                            </ul>
                        </div>
                    @endif
                @endforeach
        </div>
    </div>
    <!--SAB BANNER END-->
    <section class="keo_contact_us_outer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="keo_contact_form">
                          <!--SECTION HEADING START-->
                            <div class="section_heading text_center margin32">
                                <span class="theme-color"><i class="fa icon- icon-islam-1"></i></span>
                              <h2>{{ __('lang.our publishes') }}</h2>
                               
                            </div>
                            <!--SECTION HEADING END-->
                        <div class="row">
                            <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                <div class="keo_contact_field contact_mrgn_btm">
                                @livewire('search-publish')
                                </div>
                            </div>
                            <div class="col-lg-3"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 Page Wrap Start --> 
 <section class="keo_404_wrap">
     <div class="container">
             <div class="row">     
                 @foreach ($publishes as $item)
                 @if ($item->header != 'publish_header')
                 @if ($item->category == 'publish')
                 <div class="col-md-3 col-sm-6">
                     <div class="keo_price_wrap text-center">
                         <figure class="theme">
                         <img src="storage/MP4_MP3_PDF_Image_files/{{$item->image}}" alt="{{$item->title}}" style="height: 200px; margin-bottom:30px; box-shadow: 5px 12px 12px 2px;">
                         </figure><br style="padding:20px">
                         <h5>
                             <span class="theme-color"> {{$item->{$lang.'_title'} }}  </span> 
                         </h5>
                     <p>{!!str_limit($item->{$lang.'_subtitle'},100)!!}</p>
                     <a href="download-file/downloadmp4_mp3_pdf_image/{{$item->file}}" >{{ __('lang.download') }}</a>
                     </div>
                 </div>
                 @endif
                 @endif
                 @endforeach     
             </div> 
     </div>
 </section>
 <!-- 404 Page Wrap End --> 
@endsection
@livewireScripts
