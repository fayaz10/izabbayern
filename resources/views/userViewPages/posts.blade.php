@extends('userViewLayout.userViewApp')
@section('content')
@php
    $lang = session()->get('locale');
@endphp
 <!--SAB BANNER START-->
 <div class="sab_banner theme_overlay">
    <div class="container">
        <div class="sab_banner_text">
            
           @foreach ($tags as $item)
           <center><h2>{{ __('lang.class') }} {{ $item->{$lang.'_name'} }} </h2></center>
           @endforeach
        </div>
    </div>
</div>
<!--SAB BANNER END-->
    <!--SAB BANNER END-->
    {{-- <section class="keo_contact_us_outer">
        <div class="container">
          
            <div class="row">
                <div class="col-md-12">
                    <div class="keo_contact_form">
                          <!--SECTION HEADING START-->
                            <div class="section_heading text_center margin32">
                                <!-- <span class="theme-color"><i class="fa icon- icon-islam-1"></i></span> -->
                                <!-- <h2>Class</h2> -->
                            </div>
                            <!--SECTION HEADING END-->
                            <div class="row">
                                <div class="col-lg-2"></div>
                                    <div class="col-lg-6">
                                    <div class="keo_contact_field contact_mrgn_btm">
                                        <input type="text" name="name" placeholder="{{ __('lang.search by title name') }}">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                   <div class="keo_contact_field contact_mrgn_btm">
                                    <input type="submit" name="submit" value="{{ __('lang.search') }}">
                                   </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
       <!-- 404 Page Wrap Start --> 
      
       <section class="keo_contact_us_outer">
        <div class="container">
          <div class="row">
           <div class="col-md-12">
            <center><h3>{{ __('lang.books') }}</h3></center>
               @foreach ($posts as $post)
               @if ($post->category == 'library')
               <div class="col-md-3 col-sm-6"> 
                   <div class="keo_price_wrap text-center">
                    <figure class="theme">
                        <img style="height: 200px;width:150px" src="../../storage/MP4_MP3_PDF_Image_files/{{$post->image}}" alt="{{$post->image}}">
                    </figure><br style="padding:20px">
                       <h6>
                        <span class="theme-color">{{ $post->{$lang.'_title'} }}</span> 
                       </h6>
                       <table>
                           <tr>
                               @if ($post->speaker != null)
                               <th style="padding-left: 4px; color: green;">{{ __('lang.writer') }}: </th>
                               <th style="padding-left: 4px;"><a href="our-teacher.html">{{ $post->speaker }}</a></th>
                               @endif
                               @if ($post->date != null)
                               <th style="padding-left: 4px; color: green;">{{ __('lang.date') }}:</th>
                               <th style="padding-left: 4px;"><a href="our-teacher.html">{{ $post->date }}: </a></th>
                               @endif
                           </tr>
                       </table><hr>
                       <p>{!! str_limit($post->{$lang.'_subtitle'},100) !!}</p>
                       <a  href="/download-file/downloadmp4_mp3_pdf_image/{{$post->file}}" >{{ __('lang.download') }}</a>
                       </div>                             
                   </div>     
                   @endif
               @endforeach
           </div>
        </div>   
        </div>
       </section>
   <section class="keo_contact_us_outer">
      <div class="container">
        {{-- @if (count($posts)>0) --}}
         <div class="row">
             <div class="col-md-12">
                <center><h3>{{ __('lang.videos') }}</h3></center>
                @foreach ($posts as $post)
                @if ($post->category == 'video')
                    <div class="col-md-4 col-sm-6">
                        <div class="keo_price_wrap text-center">
                            <figure class="theme">
                                {{-- {!! $post->youtubeLink !!} --}}
                                {{-- <iframe width="300" height="150" src="https://www.youtube.com/embed/MiebCHmiszs?controls=0&showinfo=0&autohid=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                                <iframe width="300" height="150" src="{{$post->youtubeLink }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                {{-- <iframe width="300" height="150" src="https://www.youtube.com/embed/V5YGOgE0HV4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                                {{-- <video  width="300"controls>https://www.youtube.com/embed/1DX8uQkXt7g
                                    <source src="../../storage/MP4_MP3_PDF_Image_files/{{$post->file}}" type="video/mp4">
                                    <source src="mov_bbb.ogg" type="video/ogg">
                                </video> --}}
                            </figure>
                            <br style="padding:20px">
                            <h6>
                                <span class="theme-color"><a href="/posts/tag/{{ $post->id }}">{{ $post->{$lang.'_title'} }}</a></span> 
                            </h6>
                        <table>
                            <tr>
                                @if ($post->speaker != null)
                                <th style="padding-left: 4px; color: green;">{{ __('lang.teachers') }}: </th>
                                <th style="padding-left: 4px;"><a href="/our-teachers">{{ $post->speaker }}</a></th>
                                @endif
                                @if ($post->date != null)
                                <th style="padding-left: 4px; color: green;">{{ __('lang.date') }}:</th>
                                <th style="padding-left: 4px;"><a href="#">{{ $post->date }}: </a></th>
                                @endif
                            </tr>
                        </table><hr>
                         <p>{!! $post->{$lang.'_subtitle'} !!}</p>
                        {{-- <a  href="/download-file/downloadmp4_mp3_pdf_image/{{$post->file}}" >{{ __('lang.download') }}</a> --}}
                        </div>                             
                    </div>           
                @endif
                @endforeach
         </div>
        </div>   
   </section>
   
<section class="keo_contact_us_outer">
 <div class="container">
   <div class="row">
    <div class="col-md-12">
        <center><h3>{{ __('lang.audios') }}</h3></center>
        @foreach ($posts as $post)
        @if ($post->category == 'audio')
        <div class="col-md-4 col-sm-6">
            <div class="keo_price_wrap text-center">
                <figure class="theme">
                    <iframe width="300" height="150" src="{{$post->youtubeLink }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </figure><br style="padding:20px">
                <h6>
                    @if (session('locale') =='fa')
                    <span class="theme-color">{{ $post->{$lang.'_title'} }} </span> 
                    @else
                    <span class="theme-color">{{ $post->{$lang.'_title'} }}</span> 
                    @endif
                </h6>
                <table>
                    <tr>
                        @if ($post->speaker != null)
                        <th style="padding-left: 4px; color: green;">{{ __('lang.speaker') }}: </th>
                        <th style="padding-left: 4px;"><a href="/our-teachers">{{ $post->speaker }}</a></th>
                        @endif
                        @if ($post->date != null)
                        <th style="padding-left: 4px; color: green;">{{ __('lang.date') }}:</th>
                        <th style="padding-left: 4px;">{{ $post->date }}</th>
                        @endif
                    </tr>
                </table><hr>
                  <p>{!! $post->{$lang.'_subtitle'} !!}</p>
                {{-- <a  href="/download-file/downloadmp4_mp3_pdf_image/{{$post->file}}" >{{ __('lang.download') }}</a> --}}
                </div>                             
            </div>     
            @endif
        @endforeach
    </div>
 </div>   
 </div>
</section>


@endsection