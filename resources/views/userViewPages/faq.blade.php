@extends('userViewLayout.userViewApp')
@section('content')
@php $lang=session()->get('locale');@endphp
<section class="keo_career_available">
    <div class="container">
        <!--SECTION HEADING START-->
        <div class="section_heading text_center margin32">
            <span class="theme-color"><i class="fa icon- icon-islam-1"></i></span>
               <h2>{{ __('lang.faq') }}</h2>
        </div>
         <div class="keo_career_accordian">
            @php $i=1 @endphp
            @foreach ($faqs as $faq)
               @if ($faq->category == 'faq')
            <div class="panel">
                <h4 class="panel-title">
                    <a style="color: green" data-toggle="collapse" href="#{{$faq->id}}">{{$i++}}- {{$faq->{$lang.'_title'} }}</a>
                </h4>
                <div id="{{$faq->id}}" class="collapse keo_collaspe">
                    <p>{!!$faq->{$lang.'_description'}!!}</p>
                </div>
            </div>
            @endif
            @endforeach 
        </div>
    </div>
</section>
@endsection