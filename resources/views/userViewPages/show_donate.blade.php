@extends('userViewLayout.userViewApp')
@section('content')
    <!--SAB BANNER START-->
 @if ('fa' == session('locale'))
 <div class="sab_banner theme_overlay">
    <div class="container">
        <div class="fa_sab_banner_text" >
            @foreach ($events as $item)
                @if ($item->header == 1)
                <h2>{{ $item->fa_title }}</h2>
                <p >{{ $item->fa_subtitle }}</p>
                <ul class="breadcrumb" >
                    <li  class="breadcrumb-item active" aria-current="page"><b>برنامه </b></li>
                    <li class="breadcrumb-item"><b><a href="/index">صفی اصلی</a></b></li>
                </ul>
            @endif
            @endforeach

        </div>
    </div>
</div>
 @else  
 <div class="sab_banner theme_overlay">
    <div class="container">
        <div class="sab_banner_text">
            @foreach ($events as $item)
            @if ($item->header == 1)
            <h2>{{ $item->title }}</h2>
            <p style="width: 500px">{{ $item->subtitle }}</p>
            <ul class="breadcrumb" >
                <li class="breadcrumb-item"><b><a href="/index">  Zuhause</a></b></li>
                <li class="breadcrumb-item active" aria-current="page"><b>ٍEvent</b></li>
            </ul>
        @endif
        @endforeach
        </div>
    </div>
</div>  
 @endif
    <!--PORTFOLIO WRAP START--> 
    <section class="prortfolio_wrap">
        <div class="container">
            <div class="row">
                @if ('fa' == session('locale'))
                <div class="col-md-4">
                    <div class="sidebar">
                        <!--SIDEBAR TEXT START-->
                        <div class="fa_sidebar_text margin45" >
                            <h4 class="sidebar_title"> دیگر بخش ها</h4>
                            <ul class="sidebar_categories">
                                @foreach ($submenus as $sub)
                            <li><a href="{{$sub->urlLink}}">{{__($sub->fa_title)}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!--SIDEBAR TEXT END-->
                        <!--SIDEBAR TEXT START-->
                        <div class="fa_sidebar_text margin45">
                            <h4 class="sidebar_title">ضرورت به کمک دارید؟</h4>
                            <ul class="sidebar_info">
                                @foreach ($contactus  as $con)
                                <li>
                                    <div class="fa_sidebar_info_list">
                                        <span ><i class="fa  icon-pin-1"></i></span>
                                        <div class="sidebar_info_text">
                                            <p>{{__($con->fa_address)}}</p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                @foreach ($contactus as $con)
                                <li>
                                    <div class="fa_sidebar_info_list">
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
                                    <div class="fa_sidebar_info_list">
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
                        <div class="fa_sidebar_text margin45">
                            <h4 class="sidebar_title">مهمترین خبرها</h4>
                            <ul class="latest_news">
                                @foreach ($news as $new)
                            <li> <a href="news/{{$new->id}}">
                                    <div class="latest_news_fig">
                                        <figure class="theme_overlay">
                                        <img src="../storage/MP4_MP3_PDF_Image_files/{{$new->image}}" alt="{{$new->title}}" style="width: 70px;height:70px">
                                        </figure>
                                        <div class="latest_news_text">
                                            <h6>{{__($new->fa_title)}}</h6>
                                            <div class="rating_colume">
                                            <small>{{__(str_limit($new->fa_subtitle,60))}}</small>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </a> 
                            </li>
                                @endforeach
                            </ul>
                        </div> 
                        <!--SIDEBAR TEXT END-->
                    </div>
                </div>
                <div class="col-md-8" style="text-align: right">
                    <div class="service_detail">
                        <div class="Portfolio_colume">
                            <figure class="theme_overlay">
                            <img src="../storage/MP4_MP3_PDF_Image_files/{{$findEvents->image}}" alt="{{$findEvents->image}}" style="height:300px; width:800px">
                            </figure>
                            <div class="Portfolio_caption service">
                            @if ('fa' == session('locale'))
                            <div class="fa_service_det_text" >
                                @if ($findEvents->date !=null)
                                <div class="row" style="text-align:left;padding-bottom:5%" > 
                                    <div class="col-md-4"><i class="fa fa-calendar" aria-hidden="true"></i> {{__($findEvents->date)}}</div>
                                    <div class="col-md-4"><i class="fa icon-time-1"></i> {{__($findEvents->timing)}}</div>
                                    <div class="col-md-4"><i class="fa  icon-pin-1"></i> {{__($findEvents->location)}}</div>
                                </div>
                                @endif
                            <h2>{{__($findEvents->fa_title)}}</h2>
                            <p>{{__($findEvents->fa_subtitle)}}</p>
                            </div>
                            @else
                            <div class="service_det_text">
                                <h2>{{__($findEvents->title)}}</h2>
                            <p>{{__($findEvents->subtitle)}}</p>
                            </div>
                            @endif
                            
                            </div>
                        </div>
                        @if ('fa' == session('locale'))
                        <p>{!!$findEvents->fa_description!!}</p>
                        @else
                        <p>{!!$findEvents->description!!}</p>
                        @endif
                    </div>
                 <!--comment warp Start-->  
                 <div class="comment_wrap" style="text-align: left">
                    <h2 class="comment_title">
                         <label for="comment">  {{$findEvents->Comments()->count()}} نظر </label>  
                        {{-- {{ counts($findEvents->comments) }} --}}
                    </h2>
                    <ul class="comment_list">
                        <li>
                            <div class="comment_fig">
                                <figure>
                                    <img src="../../images/news-fig2.jpg" alt="">
                                </figure>
                                <div class="comment_text">
                                    @foreach ($findEvents->comments as $comment)
                                    <h6>{{ $comment->user_name }} <span>{{ $comment->created_at->diffForHumans() }}</span></h6>
                                    <p style="padding-left: 5%">{{ $comment->comment }}</p>
                                     <hr>
                                    @endforeach
                                    {{-- <a href="#"><i class="fa fa-reply"></i>Reply</a> --}}
                                </div>
                            </div>
                        </li>
                     
                    </ul>
                </div>
                <!--comment warp end-->
                 <!--leave comment Start-->  
                <div class="leave_comment">
                    <h2 class="comment_title margin32">آریه نظریه</h2>
                {{-- <form method="post" enctype="multipart/form-data" action=""> --}}

                    <form  method="POST" enctype="multipart/form-data" action="/events/{{ $findEvents->id }}/comments">
                        {{csrf_field()}}
                    <div class="leave_form">
                        <textarea name="comment" style="text-align: right" placeholder="نظریه خودرا اینجا بنویسید" ></textarea>
                        <div class="leave_field">
                            <input class="margin_right30"style="text-align: right"  type="text" name="user_name" placeholder="اسم *" >
                            <input type="text" style="text-align: right"  name="user_email" placeholder="آیمل *" >
                        </div>
                        <button class="theme_btn white_text bg_dark" href="#">ارسال</button>
                    </div>
                    <input type="hidden" name="events_id" value="{{ $findEvents->id }}">
                    </form>
                </div> 
                <!--leave comment end--> 
            </div>
                </div>
                
                @else
                <div class="col-md-8">
                   
                    <div class="service_detail">
                        <div class="Portfolio_colume">
                            <figure class="theme_overlay">
                            <img src="../storage/MP4_MP3_PDF_Image_files/{{$findEvents->image}}" alt="{{$findEvents->image}}" style="height:300px; width:800px">
                            </figure>
                            <div class="Portfolio_caption service">
                                @if ($findEvents->date !=null)
                                <div class="row" style="text-align:left;padding-bottom:5%" > 
                                    <div class="col-md-4"><i class="fa fa-calendar" aria-hidden="true"></i> {{__($findEvents->date)}}</div>
                                    <div class="col-md-4"><i class="fa icon-time-1"></i> {{__($findEvents->timing)}}</div>
                                    <div class="col-md-4"><i class="fa  icon-pin-1"></i> {{__($findEvents->location)}}</div>
                                </div>
                                @endif
                                @if ('fa' == session('locale'))
                                <div class="fa_service_det_text" >
                                    <h2>{{__($findEvents->fa_title)}}</h2>
                                <p>{{__($findEvents->fa_subtitle)}}</p>
                                </div>
                                @else
                                <div class="service_det_text">
                                    <h2>{{__($findEvents->title)}}</h2>
                                <p>{{__($findEvents->subtitle)}}</p>
                                </div>
                                @endif
                            </div>
                        </div>
                        @if ('fa' == session('locale'))
                        <p>{!!$findEvents->fa_description!!}</p>
                        @else
                        <p>{!!$findEvents->description!!}</p>
                        @endif
                    </div>
                    
                    <!--comment warp Start-->  
                    <div class="comment_wrap">
                        <h2 class="comment_title">
                            {{$findEvents->Comments()->count()}} Comments
                            {{-- {{ counts($findEvents->comments) }} --}}
                        </h2>
                        <ul class="comment_list">
                            <li>
                                <div class="comment_fig">
                                    <figure>
                                        <img src="images/comment-fig.jpg" alt="">
                                    </figure>
                                    <div class="comment_text">
                                        @foreach ($findEvents->comments as $comment)
                                        <h6>{{ $comment->user_name }} <span>{{ $comment->created_at->diffForHumans() }}</span></h6>
                                        <p style="padding-left: 5%">{{ $comment->comment }}</p>
                                         <hr>
                                        @endforeach
                                        {{-- <a href="#"><i class="fa fa-reply"></i>Reply</a> --}}
                                    </div>
                                </div>
                            </li>
                         
                        </ul>
                    </div>
                    <!--comment warp end-->
                     <!--leave comment Start-->  
                    <div class="leave_comment">
                        <h2 class="comment_title margin32">Leave Comment</h2>
                    {{-- <form method="post" enctype="multipart/form-data" action=""> --}}

                        <form  method="POST" enctype="multipart/form-data" action="/donate/{{ $findEvents->id }}/comments">
                            {{csrf_field()}}
                        <div class="leave_form">
                            <textarea name="comment" placeholder="comments here" ></textarea>
                            <div class="leave_field">
                                <input class="margin_right30" type="text" name="user_name" placeholder="Name *" >
                                <input type="text" name="user_email" placeholder="Email *" >
                            </div>
                            <button class="theme_btn white_text bg_dark" href="#">Send Now</button>
                        </div>
                        <input type="hidden" name="donation_id" value="{{ $findEvents->id }}">
                        {{-- <input type="hidden" name="news_id" value="{{ $findEvents->id }}"> --}}
                        {{-- <input type="hidden" name="donation_id" value="{{ $findEvents->id }}"> --}}
                        </form>
                    </div> 
                    <!--leave comment end--> 
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <!--SIDEBAR TEXT START-->
                        <div class="sidebar_text margin45">
                            <h4 class="sidebar_title">Categories</h4>
                            <ul class="sidebar_categories">
                                @foreach ($submenus as $sub)
                            <li><a href="{{$sub->urlLink}}">{{__($sub->title)}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!--SIDEBAR TEXT END-->
                        <!--SIDEBAR TEXT START-->
                        <div class="sidebar_text margin45">
                            <h4 class="sidebar_title">Need Help ?</h4>
                            <ul class="sidebar_info">
                                @foreach ($contactus  as $con)
                                <li>
                                    <div class="sidebar_info_list">
                                        <span><i class="fa  icon-pin-1"></i></span>
                                        <div class="sidebar_info_text">
                                            <p>{{__($con->address)}}</p>
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
                            <h4 class="sidebar_title">Latest News</h4>
                            <ul class="latest_news">
                                @foreach ($news as $new)
                        <li> <a href="/news/{{$new->id}}">
                                    <div class="latest_news_fig">
                                        <figure class="theme_overlay">
                                        <img src="../storage/MP4_MP3_PDF_Image_files/{{$new->image}}" alt="{{$new->title}}" style="width: 70px;height:70px">
                                        </figure>
                                        <div class="latest_news_text">
                                            <h6>{{__($new->title)}}</h6>
                                            <div class="rating_colume">
                                            <small>{{__(str_limit($new->subtitle,60))}}</small>
                                            </div>
                                        </div>
                                    </div>
                                </a> 
                            </li>
                                @endforeach
                            </ul>
                        </div> 
                        <!--SIDEBAR TEXT END-->
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
    <!--PORTFOLIO WRAP END-->
@endsection