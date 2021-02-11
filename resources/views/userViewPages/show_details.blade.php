@extends('userViewLayout.userViewApp')
@section('content')
@php
    $lang = session()->get('locale');
@endphp
    <!--SAB BANNER START-->
 <div class="sab_banner theme_overlay">
    <div class="container">
        <div class="sab_banner_text">
            <h2>{{ $findEvents->{$lang.'_title'} }}</h2>
            <p>{{ $findEvents->{$lang.'_subtitle'} }}</p>
            <ul class="breadcrumb" >
                <li class="breadcrumb-item"><b><a href="/index">{{ __('lang.home') }}</a></b></li>
                <li class="breadcrumb-item active" aria-current="page"><b>{{ __('lang. more details') }}</b></li>
            </ul>
        </div>
    </div>
</div>  
    <!--PORTFOLIO WRAP START--> 
    <section class="prortfolio_wrap">
        <div class="container">
            <div class="row">
                
                @if ('fa' == session('locale') || 'pa' == session('locale'))
                <div class="col-md-4">

                @include('userViewPages.show_details_sidebar')

                </div>
                <div class="col-md-8" style="text-align: right">
                    <div class="service_detail">
                        <div class="Portfolio_colume">
                            @switch($findEvents->category)
                            @case('video')
                            <figure class="theme">
                                 <video  width="300"controls>
                                     <source src="../../storage/MP4_MP3_PDF_Image_files/{{$findEvents->file}}" type="video/mp4">
                                     <source src="mov_bbb.ogg" type="video/ogg">
                                 </video>
                             </figure>
                                @break
                            @case('audio')
                             <figure class="theme">
                                 <img src="../../storage/MP4_MP3_PDF_Image_files/{{$findEvents->image}}" alt="">
                                 <audio  width="300"controls>
                                     <source src="../../storage/MP4_MP3_PDF_Image_files/{{$findEvents->file}}" type="audio/mp3">
                                     <source src="mov_bbb.ogg" type="audio/ogg">
                                 </audio>
                             </figure>
                                @break
                                @case('library')
                                <figure class="theme">
                                    <b><a href="../../download-file/downloadmp4_mp3_pdf_image/{{$findEvents->file}}" > {{ __('lang.download') }}</a></b>
                                    <img src="../../storage/MP4_MP3_PDF_Image_files/{{$findEvents->image}}" alt="">                                      
                               
                                </figure>
                                @break
                                @case('publish')
                                   <figure class="theme">
                                       <b><a href="../../download-file/downloadmp4_mp3_pdf_image/{{$findEvents->file}}" > {{ __('lang.download') }}</a></b>
                                       <img src="../../storage/MP4_MP3_PDF_Image_files/{{$findEvents->image}}" alt="">                                      
                                  
                                    </figure>
                                @break     
                            @default
                            <img style="height: 400px" src="../../storage/MP4_MP3_PDF_Image_files/{{$findEvents->image}}" alt="">
                        @endswitch
                            <div class="Portfolio_caption service" >
                           
                            <div class="fa_service_det_text" >
                                <div class="row" style="text-align:left;padding-bottom:5%" > 
                                    @if ($findEvents->date !=null)
                                    <div class="col-md-4"><i class="fa fa-calendar" aria-hidden="true"></i> {{__($findEvents->date)}}</div>
                                    @endif
                                    @if ($findEvents->timing !=null)
                                    <div class="col-md-4"><i class="fa icon-time-1"></i> {{__($findEvents->timing)}}</div>
                                    @endif
                                    @if ($findEvents->{$lang.'_location'} !=null)
                                    <div class="col-md-4"><i class="fa  icon-pin-1"></i> {{ $findEvents->{$lang.'_location'} }}</div>
                                    @endif
                                </div>
                            <h2>{{ $findEvents->{$lang.'_title'} }}</h2>
                            <p>{{ $findEvents->{$lang.'_subtitle'} }}</p>
                            </div>
                          
                            </div>
                        </div>
                        <p>{!!$findEvents->{$lang.'_description'}!!}</p>
                        
                    </div>
                    @include('userViewPages.comment')

            </div>
                </div>
                
                @else
                <div class="col-md-8">
                   
                    <div class="service_detail">
                        <div class="Portfolio_colume">
                            @switch($findEvents->category)
                            @case('video')
                            <figure class="theme">
                                 <video  width="700"controls>
                                     <source src="../../storage/MP4_MP3_PDF_Image_files/{{$findEvents->file}}" type="video/mp4">
                                     <source src="mov_bbb.ogg" type="video/ogg">
                                 </video>
                             </figure>
                                @break
                                @case('audio')
                                <figure class="theme">
                                    <img src="../../storage/MP4_MP3_PDF_Image_files/{{$findEvents->image}}" alt="">
                                    <audio  width="300"controls>
                                        <source src="../../storage/MP4_MP3_PDF_Image_files/{{$findEvents->file}}" type="audio/mp3">
                                        <source src="mov_bbb.ogg" type="audio/ogg">
                                    </audio>
                                </figure>
                                   @break
                                   @case('library')
                                   <figure class="theme">
                                       <img src="../../storage/MP4_MP3_PDF_Image_files/{{$findEvents->image}}" alt="">                                      
                                       <b><a href="../../download-file/downloadmp4_mp3_pdf_image/{{$findEvents->file}}" > {{ __('lang.download') }}</a></b>
                                  </figure>
                                      @break
                                      @case('publihe')
                                      <figure class="theme">
                                          <img src="../../storage/MP4_MP3_PDF_Image_files/{{$findEvents->image}}" alt="">                                      
                                          <b><a href="../../download-file/downloadmp4_mp3_pdf_image/{{$findEvents->file}}" > {{ __('lang.download') }}</a></b>
                                     </figure>
                                         @break   
                            @default
                            <img style="height: 350px" src="../../storage/MP4_MP3_PDF_Image_files/{{$findEvents->image}}" alt="">
                        @endswitch
                              <div class="Portfolio_caption service">
                                <div class="row" style="text-align:left;padding-bottom:5%" > 
                                    @if ($findEvents->date !=null)
                                    <div class="col-md-4"><i class="fa fa-calendar" aria-hidden="true"></i> {{__($findEvents->date)}}</div>
                                    @endif
                                    @if ($findEvents->timing !=null)
                                    <div class="col-md-4"><i class="fa icon-time-1"></i> {{__($findEvents->timing)}}</div>
                                    @endif
                                    @if ($findEvents->{$lang.'_location'} !=null)
                                    <div class="col-md-4"><i class="fa  icon-pin-1"></i> {{ $findEvents->{$lang.'_location'} }}</div>
                                    @endif
                                </div>
                            <h2>{{ $findEvents->{$lang.'_title'} }}</h2>
                            <p>{{ $findEvents->{$lang.'_subtitle'} }}</p>
                            </div>
                            
                            {{-- </div> --}}
                        </div>
                        <p>{!!$findEvents->{$lang.'_description'}!!}</p>
                        
                    </div>
                    @include('userViewPages.comment')
               
                </div>
                <div class="col-md-4">
                    @include('userViewPages.show_details_sidebar')
                </div>
                @endif
            </div>
        </div>
    </section>
    <!--PORTFOLIO WRAP END-->

        @if ($findEvents->category == 'services' )
           @include('userViewPages.user_contact_form')
       
            
        @endif
@endsection