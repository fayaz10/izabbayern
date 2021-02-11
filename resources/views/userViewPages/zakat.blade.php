@extends('userViewLayout.userViewApp')
@section('content')

@php
    $lang = session()->get('locale');
@endphp
  <!--SAB BANNER START-->
  <div class="sab_banner theme_overlay">
        <div class="container">
                @foreach ($zakats as $item)
                    @if ($item->sub_header == 'top_header')
                        <div class="sab_banner_text">
                            <h2>{{ $item->{$lang.'_title'} }}</h2>
                            <p>{{ $item->{$lang.'_subtitle'} }}</p>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"> {{ __('lang.home') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('lang.zakat') }}</li>
                            </ul>
                        </div>
                    @endif
                @endforeach
        </div>
    </div>
    <!--SAB BANNER END-->
    <section class="keo_contact_us_outer" style="font-family:'Courier New', Courier, monospace">
        <div class="container">
            <!--SECTION HEADING START-->
                @foreach ($zakats as $item)
                    @if ($item->sub_header == 'Down_header')
                        <div class="section_heading text_center margin32">
                            <span class="theme-color"><i class="fa icon- icon-islam-1"></i></span>
                            <h2>{{$item->{$lnag.'_title'} }}</h2>
                            <p>{!!$item->{$lang.'_subtitle'} !!}</p>
                        </div>
                    @endif
                @endforeach
        </div>
        <div class="container zakat_field_container" >
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group zakat_field">
                        <label for="" >{{ __('lang.value of gold and selver') }}</label>
                    <input type="text" name=""value="0.00" class="form-controll" placeholder="Value £" id="G_S_price">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group zakat_field">
                        <label for="">{{ __('lang.stored money in bank or house') }}</label>
                       <input type="text" name="" value="0.00" class="form-controll" placeholder="Value £" id="M_on_H_B_price">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group zakat_field">
                        <label for="">{{ __('lang.else stored money') }}</label>
                    <input type="text" name="" value="0.00" class="form-controll" placeholder="Value £" id="O_price">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group zakat_field">
                        <label for="">{{ __('lang.stock market value') }}</label>
                    <input type="text" name="" value="0.00" class="form-controll" placeholder="Value £" id="I_S_price">
                    </div>
                </div>
        </div>
        <div class="row">
                <div class="col-md-3">
                    <div class="form-group zakat_field">
                        <label for="">{{ __('lang.money people owed you') }}</label>
                    <input type="text" name="" value="0.00" class="form-controll" placeholder="Value £" id="Y_OD_price">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group zakat_field">
                        <label for="">{{ __('lang.your debt') }}</label>
                    <input type="text" name="" value="0.00" class="form-controll" placeholder="Value £" id="Y_O_price">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group zakat_field">
                        <label for="total">{{ __('lang.total') }}</label>
                    <input type="text" disabled name="" class="form-controll" placeholder="0.00" id="netTotal">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group zakat_field" >
                        <label for=""> {{ __('lang.zakat nesab') }}</label>
                    <input type="text" disabled name="" class="form-controll" placeholder="240 £" >
                    </div>
                </div>
        </div>
        <div class="row">
                <div class="col-md-3">
                    <div class="form-group zakat_field">
                        <label for="" class="zakat_total">{{ __('lang.your zakat') }}</label>
                    <input disabled type="text"  class="form-controll" placeholder="0.00" id="netZakat">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group zakat_field">
                        <label for="" class="zakat_total">{{ __('lang.calculate zakat') }}</label>
                    <input style="background-color: black" type="button" onclick="fa_calculate()" name="Submit" value="{{ __('lang.calculate zakat') }}" class="form-controll" placeholder="Value £" id="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group zakat_field">
                        <label class="zakat_total">{{ __('lang.Donate') }}</label>
                        <a href="/donate"><input style="background-color: rgb(0, 0, 0)" type="button"  name="Submit" value="{{ __('lang.would you like to donate') }}" class="form-controll"></a>
                    </div>
                </div>
        </div>
            </div>
    </section>
    @if (count($zakats)>0)
        <section class="keo_career_available">
            <div class="container">
                @foreach ($zakats as $item)
                    @if($item->header == 'no_header')
                        <!--SECTION HEADING START-->
                        <div class="section_heading text_center margin32">
                            <span class="theme-color"><i class="fa icon- icon-islam-1"></i></span>
                            <h2 class="">{{ $item->{$lang.'_title'} }}</h2>
                            {{-- <small class="">{{__($item->subtitle)}}</small> --}}
                        </div>
                        <!--SECTION HEADING END-->
                        <div class="keo_career_accordian">
                                {!!$item->{$lang.'_description'} !!}
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
     @else
     <a href="http://google/islam-zakat" target="_blanck">read from google about zakat</a>
    @endif
    <!--NEWSLETTER WRAP START--> 
@endsection