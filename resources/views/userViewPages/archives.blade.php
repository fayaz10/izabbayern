@extends('userViewLayout.userViewApp')
@section('content')
@php
    $lang=session('locale')
@endphp
 <!--SAB BANNER START-->
 <div class="sab_banner theme_overlay">
    <div class="container">
        <div class="sab_banner_text">
         <center><h2>{{ __('lang.archives of') }} {{ $month }}/{{ $year }}</h2></center>
        </div>
    </div>
</div>
<!--SAB BANNER END-->
    <!--SAB BANNER END-->
    <section class="keo_contact_us_outer">
        <div class="container">
          
            <div class="row">
                <div class="col-md-12">
                    <div class="keo_contact_form">
                          <!--SECTION HEADING START-->
                            <div class="section_heading text_center margin32">
                            </div>
                            <!--SECTION HEADING END-->
                            <div class="row">
                                <div class="col-lg-2"></div>
                                    <div class="col-lg-6">
                                    <div class="keo_contact_field contact_mrgn_btm">
                                        <input type="text" name="name" placeholder="{{ __('lang.search by title name') }}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                   <div class="keo_contact_field contact_mrgn_btm">
                                    <input type="submit" name="submit" value="{{ __('lang.search') }}">
                                   </div>
                                </div>
                            </div>
       
                    </div>
                </div>
            </div>
        </div>
    </section>
   <section class="keo_contact_us_outer">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                
                    <center><h3>{{ __('lang.archives') }}</h3></center>
                     
                @foreach ($posts as $post)
                   @if($post->header =='no_header')
                    <div class="col-md-4 col-sm-6">
                        <div class="keo_price_wrap text-center">
                            @switch($post->category)
                               @case('video')
                               <figure class="theme">
                                    <video  width="300"controls>
                                        {{ $post->youtubeLink }}
                                        {{-- <source src="../../storage/MP4_MP3_PDF_Image_files/{{$post->file}}" type="video/mp4">
                                        <source src="mov_bbb.ogg" type="video/ogg"> --}}
                                    </video>
                                </figure>
                                   @break
                               @case('audio')
                                <figure class="theme">
                                    {{-- <img src="../../storage/MP4_MP3_PDF_Image_files/{{$post->image}}" alt=""> --}}
                                    <audio  width="300"controls>
                                        {{ $post->youtubeLink }}
                                        {{-- <source src="../../storage/MP4_MP3_PDF_Image_files/{{$post->file}}" type="audio/mp3">
                                        <source src="mov_bbb.ogg" type="audio/ogg"> --}}
                                    </audio>
                                </figure>
                                   @break
                               @default
                               <img src="../../storage/MP4_MP3_PDF_Image_files/{{$post->image}}" alt="">
                           @endswitch
                            <br style="padding:20px">
                            <h6>
                                <span class="theme-color"><a href="/details/{{ $post->id }}">{{ $post->{$lang.'_title'} }}</a></span> 
                            </h6>
                        <table>
                            <tr>
                                @if ($post->{$lang.'_speaker'} != null)
                                <th style="padding-left: 4px; color: green;">{{ __('lang.teacher') }}: </th>
                                <th style="padding-left: 4px;"><a href="/our-teachers">{{ $post->{$lang.'_speaker'} }}</a></th>
                                @endif
                                @if ($post->date != null)
                                <th style="padding-left: 4px; color: green;">{{ ('lang.date') }}:</th>
                                <th style="padding-left: 4px;"><a href="#">{{ $post->date }}: </a></th>
                                @endif
                            </tr>
                        </table><hr>
                         <p>{!! str_limit($post->{$lang.'_subtitle'},99) !!}</p>
                        @switch($post->category)
                            @case('video')
                            {{-- <a  href="/download-file/downloadmp4_mp3_pdf_image/{{$post->file}}" >Downlaod</a> --}}
                                @break
                            @case('audio')
                            {{-- <a  href="/download-file/downloadmp4_mp3_pdf_image/{{$post->file}}" >Downlaod</a> --}}
                                @break
                            @case('library')
                            <a  href="/download-file/downloadmp4_mp3_pdf_image/{{$post->file}}" >{{ __('lang.download') }}</a>
                                @break
                            @case('publishe')
                            <a  href="/download-file/downloadmp4_mp3_pdf_image/{{$post->file}}" >{{ __('lang.download') }}</a>
                                @break
                               @default
                               
                           @endswitch
                        </div>                             
                    </div>           
                @endif
                @endforeach
         </div>
        </div>   
   </section>
  
@endsection