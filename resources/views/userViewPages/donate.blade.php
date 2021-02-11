@extends('userViewLayout.userViewApp')
@section('content')

@php
    $lang= session('locale');
@endphp
  <!--SAB BANNER START-->
  <div class="sab_banner theme_overlay">
        <div class="container">
                @foreach ($donations as $item)
            @if ($item->header == 'donations_header')
                    @if ($item->sub_header == 'top_header')
                        <div class="sab_banner_text">
                            <h2>{{ $item->{$lang.'_title'} }}</h2>
                            <p style="max-width: 700px">{{ $item->{$lang.'_subtitle'} }}</p>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"> {{ ('lang.home') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ ('lang.Donate') }}</li>
                            </ul>
                        </div>
                    @endif
            @endif
                @endforeach
        </div>
    </div>
    <!--SAB BANNER END-->
    <section class="keo_contact_us_outer">
        <div class="container">
        @foreach ($donations as $item)
            @if ($item->header == 'donations_header')
            @if ($item->sub_header == 'Down_header')
            <!--SECTION HEADING START-->
            <div class="section_heading text_center margin32">
                <span class="theme-color"><i class="fa icon- icon-islam-1"></i></span>
                <h2>{{__($item->{$lang.'_title'} )}}</h2>
                <p>{{__($item->{$lang.'_subtitle'} )}}</p>
            </div>
            <!--SECTION HEADING END-->
            @endif
            @endif
        @endforeach
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <form action="/stripeOne" method="Post" enctype="multipart/form-data" >
                   @csrf
                        <div class="Donate">
                        <div class="Donate_list" >
                            <select class="small" name="category">
                                <option   data-display="{{ __('lang.donate in') }}">{{ __('lang.donate in') }}</option>
                                @foreach ($donations as $donate)
                                      @if ($donate->category == 'donations')
                                        @if ($donate->header == 'no_header')
                                        <option value="{{ $donate->id }}" data-title="#">{{ $donate->{$lang.'_title'} }}</option>
                                        @endif
                                      @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="Donate_list">
                            <select class="small" name="amount">
                                <option data-display="{{ __('lang.amount of donate') }}">{{ __('lang.amount of donate') }}</option>
                                <option value="10" data-title="english">10</option>
                                <option value="20" data-title="english">20</option>
                                <option value="30" data-title="english">30</option>
                                <option value="40" data-title="english">40</option>
                                <option value="50" data-title="english">50</option>
                                <option value="100" data-title="english">100</option>
                                <option value="200" data-title="english">200</option>
                                <option value="300" data-title="english">300</option>
                                <option value="500" data-title="english">500</option>
                                <option value="1000" data-title="english">1000</option>
                                <option value="10000" data-title="english">10000</option>
                            </select>
                        </div>
                        <div class="Donate_list">
                            <select class="small" name="currency">
                                <option data-display="{{ __('lang.currency') }}">{{ __('lang.currency') }}</option>
                                <option value="USD" data-title="english">USD ($)</option>
                                <option value="EUR" data-title="english">EUR (£)</option>
                            </select>
                        </div> 
                        <div class="banner_btn">
                           <button type="submit"class="theme_btn white_text theme-bg theme-border margin_right25 animated submit">{{ __('lang.pay') }}</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </form>
            </div>
        </div>
    </section>

    <!--NEWS WRAP START--> 
    <section class="news_wrap">
    <div class="container">
        <!--SECTION HEADING START-->
        <div class="section_heading text_center margin32">
            <span class="theme-color"><i class="fa icon- icon-islam-1"></i></span>
          
            <h2>{{ __('lang.where we use donated moneys') }}</h2>
            
        </div>
        <div class="row">
            @if (count($donations)>0)
               @foreach ($donations as $item)
                  @if ($item->header == 'no_header')
                    <div class="col-md-4 col-sm-6 col-xs-6" >
                        <div class="news_fig margin25">
                            <figure class="theme_overlay">
                            <img src="storage/MP4_MP3_PDF_Image_files/{{$item->image}}" alt="{{$item->image}}" style="height: 200px">
                            </figure>
                            <div class="news_text text2" style="text-align: right">
                                <h6>{{__($item->{$lang.'_title'} )}}</h6>
                                <p>{{__(str_limit($item->{$lang.'_subtitle'},70))}}</p>
                            <a class="more_btn" href="details/{{$item->id}}">{{ __('lang.more') }} <i class="fa fa-angle-left"></i></a>
                            </div>
                        </div>
                    </div>
                  @endif
               @endforeach
            @else
            <h2>No donation yet!.</h2>
            @endif
            </div>
        </div>
    </div>
</section>
@endsection