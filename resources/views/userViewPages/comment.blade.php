@if(session('locale')== 'fa' || session('locale') == 'pa')

    <!--comment warp Start-->  
    <div class="comment_wrap" style="text-align: left">
        <h2 class="comment_title">
             <label for="comment">  {{$findEvents->Comments()->count()}} {{ __('lang.comments') }} </label>  
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
                    </div>
                </div>
            </li>
         
        </ul>
    </div>
    <!--comment warp end-->
     <!--leave comment Start-->  
    <div class="leave_comment">
        <h2 class="comment_title margin32">{{ __('lang.leave comments') }}</h2>

        <form  method="POST" enctype="multipart/form-data" action="/posts/{{ $findEvents->id }}/comments">
            {{csrf_field()}}
        <div class="leave_form">
            <textarea name="comment" style="text-align: right" placeholder="نظریه خودرا اینجا بنویسید" ></textarea>
            <div class="leave_field">
                <input class="margin_right30"style="text-align: right"  type="text" name="user_name" placeholder="اسم *" >
                <input type="text" style="text-align: right"  name="user_email" placeholder="آیمل *" >
            </div>
            <button class="theme_btn white_text bg_dark" href="#">ارسال</button>
        </div>
        <input type="hidden" name="posts_id" value="{{ $findEvents->id }}">
        </form>
    </div> 
    <!--leave comment end--> 


@else

     <!--comment warp Start-->  
     <div class="comment_wrap">
        <h2 class="comment_title">
            {{$findEvents->Comments()->count()}} {{ __('lang.comments') }}
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
                    </div>
                </div>
            </li>
         
        </ul>
    </div>
    <!--comment warp end-->
     <!--leave comment Start-->  
    <div class="leave_comment">
        <h2 class="comment_title margin32">{{ __('lang.leave comments') }}</h2>
        <form  method="POST" enctype="multipart/form-data" action="/posts/{{ $findEvents->id }}/comments">
            {{csrf_field()}}
        <div class="leave_form">
            <textarea name="comment" placeholder="comments here" ></textarea>
            <div class="leave_field">
                <input class="margin_right30" type="text" name="user_name" placeholder="Name *" >
                <input type="text" name="user_email" placeholder="Email *" >
            </div>
            <button class="theme_btn white_text bg_dark" href="#">{{ __('lang.send') }}</button>
        </div>
        <input type="hidden" name="posts_id" value="{{ $findEvents->id }}">
        </form>
    </div> 
    <!--leave comment end--> 

@endif