@extends('userViewLayout.userViewApp')
@section('content')
@php $lang = session()->get('locale');@endphp
<!--SAB BANNER START-->
<div class="sab_banner theme_overlay">
    <div class="container">
       
        <div class="sab_banner_text">
         @foreach ($header as $item)

               @if($item->category== 'team')
                    @if($item->header== 'team_header')
                    <h2>{{ $item->{$lang.'_name'} }}</h2>
                    <p>{{ $item->{$lang.'_subname'} }}</p>
                    @endif
               @elseif($item->category== 'teacher')
                    @if($item->header== 'teacher_header')
                    <h2>{{ $item->{$lang.'_name'} }}</h2>
                    <p>{{ $item->{$lang.'_subname'} }}</p>
                    @endif
                @endif    
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/index">{{ __('lang.home') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('lang.team and teacher') }}</li>
                </ul>
             @endforeach
        </div>
    </div>
</div>
<!--SAB BANNER END-->
<!--HISTORY WRAP START--> 
<section class="history_wrap">
    <div class="container">
       <div class="row">
        <div class="col-md-5">
            <div class="history_fig about">
                <figure class="theme_overlay">
                    <img src="../storage/MP4_MP3_PDF_Image_files/{{$teacher->image}}" alt="{{$teacher->image}}" style="height:500px; width:800px">
                </figure>
            </div>
            <div class="section_heading text_center margin32">
                <hr style="background-color: gray;height:1px">
           </div>
            <div class="row">
                
              
                <div class="col-md-12">
                    <b>{{ __('lang.name') }}:{{ $teacher->{$lang.'_name'} }}
                <br>{{ __('lang.possion') }}:{{ $teacher->{$lang.'_subname'} }}
                <br><a href="mailto:{{ $teacher->email }}">{{ $teacher->email }}</a>
                <br>{{ __('lang.facebook') }}:<a href="http://{{ $teacher->facebook }}" target="_blanck">{{ $teacher->facebook }}</a>
                <br>{{ __('lang.phone') }}:{{ $teacher->phone }}</b>
                </div>
            </div>
           
        </div>
        <div class="col-md-7">
            <div class="history_text about">
                <!--SECTION HEADING START-->
                <div class="section_heading margin25">
                    <span class="theme-color"><i class="fa icon- icon-islam-1"></i></span>
                    <h2>{{ $teacher->{$lang.'_name'} }}</h2>
                </div>
                   <p>{!! $teacher->{$lang.'_description'} !!}</p>
            </div>  

        </div> 
    </div> 
       {{-- @endif --}}
    </div>
</section>
<!--HISTORY WRAP END-->
@endsection