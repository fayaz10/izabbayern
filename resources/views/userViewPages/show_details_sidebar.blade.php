
@php
    $lang = session()->get('locale');
@endphp
    <div class="sidebar">
        <!--SIDEBAR TEXT START-->
        <div class="sidebar_text margin45">
            <h4 class="sidebar_title">{{ __('lang.categories') }}</h4>
            <ul class="sidebar_categories">
                @foreach ($submenus as $sub)
            <li><a href="{{$sub->urlLink}}">{{ $sub->{$lang.'_title'} }}</a></li>
                @endforeach
            </ul>
        </div>
        <!--SIDEBAR TEXT END-->
        <!--SIDEBAR TEXT START-->
        <div class="sidebar_text margin45">
            <h4 class="sidebar_title">{{ __('lang.need help') }} </h4>
            <ul class="sidebar_info">
                @foreach ($contactus  as $con)
                <li>
                    <div class="sidebar_info_list">
                        <span><i class="fa  icon-pin-1"></i></span>
                        <div class="sidebar_info_text">
                            <p>{{ $con->{$lang.'_address'} }}</p>
                        </div>
                    </div>
                </li>
                @endforeach
                @foreach ($contactus as $con)
                <li>
                    <div class="sidebar_info_list">
                        <span><i class="fa  icon-phone"></i></span>
                        <div class="sidebar_info_text">
                            <a href="#">{{__($con->phone1)}}</a>
                            <a href="#">{{__($con->phone2)}}</a>
                            <a href="#">{{__($con->phone3)}}</a>
                        </div>
                    </div>
                </li>
                @endforeach
                @foreach ($contactus as $con)
                <li>
                    <div class="sidebar_info_list">
                        <span><i class="fa icon-mail-1"></i></span>
                        <div class="sidebar_info_text">
                            <a href="mailto:{{$con->email1}}">{{__($con->email1)}}</a>
                            <a href="mailto:{{$con->email2}}">{{__($con->email2)}}</a>
                            <a href="mailto:{{$con->email3}}">{{__($con->email3)}}</a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        
        <!--SIDEBAR TEXT END-->
        <!--SIDEBAR TEXT START-->
        <div class="sidebar_text margin45">
            <h4 class="sidebar_title">{{ __('lang.news') }}</h4>
            <ul class="latest_news">
                @foreach ($news as $new)
                @if ($new->header == 'no_header')
                 <li> <a href="/details/{{$new->id}}">
                    <div class="latest_news_fig">
                        <figure class="theme_overlay">
                        <img src="../storage/MP4_MP3_PDF_Image_files/{{$new->image}}" alt="{{$new->{$lang.'_title'} }}" style="width: 70px;height:70px">
                        </figure>
                        <div class="latest_news_text">
                            <h6>{{ $new->{$lang.'_title'} }}</h6>
                            <div class="rating_colume">
                            <small>{{__(str_limit($new->{$lang.'_subtitle'} ,60))}}</small>
                            </div>
                        </div>
                    </div>
                </a> 
            </li>
            @endif
                @endforeach
            </ul>
        </div>

        <!--SIDEBAR TEXT START-->
        <div class="sidebar_text margin45">
            <h4 class="sidebar_title">{{ __('lang.archives') }}</h4>
            <ul class="sidebar_categories">
                @foreach ($archive as $arch)
                <li><a href="/archives/?month={{ $arch['month'] }}&year={{ $arch['year'] }}">
                    {{$arch['month'].' '.$arch['year']}}
                </a></li>
                @endforeach
            </ul>
        </div>
        <!--SIDEBAR TEXT END-->
    </div>