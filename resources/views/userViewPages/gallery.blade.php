@extends('userViewLayout.userViewApp')
@section('content')

<section class="gallery_wrap">
    <div class="container">
        <div class="row">
            @foreach ($gallery as $item)
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="colume_padding margin30">
                    <div class="gallery_fig">
                        <figure class="theme_overlay">
                            <img  style="height: 350px" src="/storage/MP4_MP3_PDF_Image_files/{{$item->image}}" alt="">
                            @if (session('locale') == 'fa')
                            <h6 class="islamic_title theme-color"><a href="details/{{$item->id}}">جزیات بیشتر</a></h6>
                            @else
                            <h6 class="islamic_title theme-color"><a href="details/{{$item->id}}">Details anzeigen</a></h6>
                            @endif
                    </figure>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection