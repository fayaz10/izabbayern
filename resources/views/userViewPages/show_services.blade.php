@extends('userViewLayout.userViewApp')
@section('content')
@php
    $lang =session('locale');
@endphp

    <!--PORTFOLIO WRAP START--> 
    <section class="prortfolio_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="service_detail">
                        <div class="Portfolio_colume" >
                            <figure class="theme_overlayd"  >
                                 <iframe width="300" height="300" src="{{ $posts->youtubeLink }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </figure>
                            <div class="Portfolio_caption service">
                                <div class="service_det_text">
                                    <h2>{{$posts->{$lang.'_title'} }}</h2>
                                    <p>{{$posts->{$lang.'_subtitle'} }}</p>
                                </div>
                            </div>
                        </div>
                        <p>{!! $posts->fa_description !!}</p>
                    </div>
     
                    <!--SERVICE WRAP START--> 
                    <section class="service_wrap grid">
                        <div class="row">
                            <div class="col-md-12">
                                     <!--comment warp Start-->  
                    <div class="comment_wrap">
                        <h2 class="comment_title">
                            {{$posts->Comments()->count()}} {{ __('lang.comments') }}
                            {{-- {{ counts($posts->comments) }} --}}
                        </h2>
                        <ul class="comment_list">
                            <li>
                                <div class="comment_fig">
                                    <figure>
                                        <img src="images/comment-fig.jpg" alt="">
                                    </figure>
                                    <div class="comment_text">
                                        @foreach ($posts->comments as $comment)
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
                        <h2 class="comment_title margin32">{{ __('lang.leave comments') }}</h2>
                        <form  method="POST" enctype="multipart/form-data" action="/posts/{{ $posts->id }}/comments">
                            {{csrf_field()}}
                        <div class="leave_form">
                            <textarea name="comment" placeholder="{{ __('lang.comments') }}" ></textarea>
                            <div class="leave_field">
                                <input class="margin_right0" type="text" name="user_name" placeholder="{{ __('lang.name') }} *" >
                                <input type="text" name="user_email" placeholder="{{ __('lang.email') }} *" >
                            </div>
                            <button class="theme_btn white_text bg_dark" href="#">{{ __('lang.send') }}</button>
                        </div>
                        <input type="hidden" name="posts_id" value="{{ $posts->id }}">
                        </form>
                    </div> 
                    <!--leave comment end--> 
                </div>
                        </div>
                    </section>
                          
                </div>
                <div class="col-md-5">
                    <div class="sidebar">
                         <!--SIDEBAR TEXT START-->
                         <div class="sidebar_text margin45">
                            <h4 class="sidebar_title"></h4>
                            <ul class="latest_newsd">
                                @foreach ($main_posts as $post)
                                @if ($post->category == 'video')
                                <li>
                                    <div class="latest_news_figd row">
                                        <figure class="theme_overlays col-md-6" >
                                          <iframe style="width: 100%" height="100" src="{{ $post->youtubeLink }}" ></iframe>
                                       </figure>
                                        <div class="latest_news_text col-md-6">
                                            <h6 class="farsi">{{ $post->{$lang.'_title'} }}</h6>
                                            <div class="rating_colume">

                                                @if ($post->speaker != null)
                                                <a href="/posts/tag/{{ $post->id }}"><i class="fa icon-male"></i>{{ $post->{$lang.'_speaker'} }}</a>
                                                @endif
                                                <a href="/posts/tag/{{ $post->id }}">{{ str_limit($post->{$lang.'_subtitle'},70) }}</a>
                                                    
                                            </div>
                                        </div>
                                    </div><hr>
                                </li>
                               
                                @endif
                                @endforeach
                            </ul>
                        </div> 
                        <!--SIDEBAR TEXT END-->   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PORTFOLIO WRAP END-->


@endsection