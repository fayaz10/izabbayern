@extends('userViewLayout.userViewApp')
@section('content')
@php $lang = session()->get('locale') @endphp
 <!--SAB BANNER START-->
 <div class="sab_banner theme_overlay">
        <div class="container">
                @foreach ($services as $item)
                    @if ($item->header == 'serices_header')
                        @if ($item->sub_header == 'top_header')
                            <div class="sab_banner_text">
                            <h2>{{ $item->{$lang.'_title'} }}</h2>
                            <p style="width: 700px">{{ $item->{$lang.'_subtitle'} }}</p>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/index">{{ __('lang.home') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('lang.services') }}</li>
                            </ul>
                            </div>
                        @endif
                    @endif
                @endforeach 
        </div>
    </div>
    <!--SAB BANNER END-->
    <!--SERVICE WRAP START--> 
    <section class="service_wrap">
        <div class="container">
            <div class="row">
     @if (count($services)>0)
         @foreach ($services as $service)
            @if($service->header == 'no_header')
            @if($service->category == 'services')
                <div class="col-md-4">
                    <div class="Portfolio_colume margin30">
                        <figure class="theme_overlay">
                        <img src="storage/MP4_MP3_PDF_Image_files/{{$service->image}}" alt="{{$service->image}}" style="height: 200px;width:400px">
                        </figure>
                        <div class="Portfolio_caption service text_center">
                            {{-- <span class="theme-color"><i class="fa icon-comment"></i></span> --}}
                            <br><br>
                            <h5>{{$service->{$lang.'_title'} }}</h5>
                            <p>{!! str_limit($service->{$lang.'_subtitle'},80)!!}</p>
                            <a class="more_btn color01" href="details/{{$service->id}}">{{ __('lang.more') }} <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            @endif
            @endif
        @endforeach  
     @else
     <h1>No services yet</h1>
     @endif
            </div>
        </div>
    </section>
    <!--SERVICE WRAP END-->
@endsection