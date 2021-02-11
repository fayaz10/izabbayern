@extends('adminViewLayout.adminViewApp')
@section('adminContent')

		<!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
              <div class="container-fluid">
                  <div class="row">

                      <div class="col-md-12" style="background-color: white">

                        <label style="color: green; font-size:32px" for="category">category</label>
                        <h2>{{ $posts->category }}
                            <div class="table-data-feature">
                            <a href="/admin/posts"><button type="button"  title="Go Back"data-toggle="tooltip" class="btn btn-primary">Back</button></a>

                                <form method="get" action="{{url('admin/posts/'.$posts->id.'/edit')}}" enctype="multipart/form-data">
                               
                                 <button class="btn btn-success"  data-placement="top" title="Edit"data-toggle="tooltip" >Edit</button>
                                </form>
                                <form method="post" enctype="multipart/form-data" action="{{url('admin/posts',$posts->id)}}">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button  class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete">Delete</button>
                                </form>
                                </div>
                        </h2><hr>

                        @if ($posts->image !=null)
                        <label style="color: green; font-size:32px" for="image">cover image</label>
                        <p><div class="adminImage"><img style="height: 300px;" src="/storage/MP4_MP3_PDF_Image_files/{{$posts->image}}" alt="{{$posts->image}}"></p><hr>
                        @endif
                          @switch($posts->category)
                              @case('audio')
                              <label style="color: green; font-size:32px" for="file">Audio</label><br>
                              <audio controls>
                                  <source src="horse.ogg" type="audio/ogg">
                                  <source src="/storage/MP4_MP3_PDF_Image_files/{{$posts->file}}" type="audio/mpeg">
                                </audio>
                                  @break
                              @case('video')
                              <label style="color: green; font-size:32px" for="file">Video</label><br>
                              <video  width="300"controls>
                                  <source src="/storage/MP4_MP3_PDF_Image_files/{{$posts->file}}" type="video/mp4">
                                  <source src="mov_bbb.ogg" type="video/ogg">
                                </video>
                                  @break
                                  @case('library')
                                  <label style="color: green; font-size:32px" for="file">library</label><br>
                                  <a  href="/download-file/downloadmp4_mp3_pdf_image/{{$posts->file}}" >Downlaod</a>
                                    @break
                                    @case('publish')
                                    <label style="color: green; font-size:32px" for="file">publish</label><br>
                                    <a  href="/download-file/downloadmp4_mp3_pdf_image/{{$posts->file}}" >Downlaod</a>
                                      @break
                              @default
                                  
                          @endswitch
              
                        <br>
                        
                        @if ($posts->header != 'no_header' )
                        <label style="color: green; font-size:32px"  for="header">Header</label>
                        <h4>{{ $posts->header }}</h4><hr>
                        @endif

                        @if ($posts->sub_header != 'no_sub_header' )
                        <label  style="color: green; font-size:32px" for="subheader">subheader</label>
                        <h4>{{ $posts->sub_header }}</h4><hr>
                        @endif

                        @if ($posts->post_type != 'simple_post' )
                        <label style="color: green; font-size:32px"  for="post_type">post_type</label>
                        <h4>{{ $posts->post_type }}</h4><hr>
                        @endif

                     

                        <label  style="color: green; font-size:32px" for="title">farsi Title</label>
                       <h1>{{ $posts->fa_title }}</h1><hr>
                       <label style="color: green; font-size:32px" for="fa_Sub title">farsi subTitle</label>
                       <h3>{{ $posts->fa_subtitle }}</h3><hr>
                       <label style="color: green; font-size:32px" for="fa_description">Farsi description</label>
                       <p>{!! $posts->fa_description !!}</p><hr>

                       <label  style="color: green; font-size:32px" for="title">pashtow Title</label>
                       <h1>{{ $posts->ps_title }}</h1><hr>
                       <label style="color: green; font-size:32px"  for="Sub title">pashtow SubTitle</label>
                       <h3>{{ $posts->ps_subtitle }}</h3><hr>
                       <label style="color: green; font-size:32px" for="description">pashtow description</label>
                      <p>{!! $posts->ps_description !!}</p><hr>

                      <label  style="color: green; font-size:32px" for="title">German Title</label>
                      <h1>{{ $posts->de_title }}</h1><hr>
                      <label style="color: green; font-size:32px"  for="Sub title">German SubTitle</label>
                      <h3>{{ $posts->de_subtitle }}</h3><hr>
                      <label style="color: green; font-size:32px" for="description">German description</label>
                     <p>{!! $posts->de_description !!}</p><hr>

                     <label  style="color: green; font-size:32px" for="title">English Title</label>
                       <h1>{{ $posts->en_title }}</h1><hr>
                       <label style="color: green; font-size:32px" for="fa_Sub title">English SubTitle</label>
                       <h3>{{ $posts->en_subtitle }}</h3><hr>
                       <label style="color: green; font-size:32px" for="fa_description">English description</label>
                       <p>{!! $posts->en_description !!}</p><hr>


                       @if ($posts->fa_speaker !=null)
                       <label style="color: green; font-size:32px" for="fa_speaker">writer/speaker</label>
                       <p>{!! $posts->fa_speaker !!}</p><hr>
                       @endif
                       @if ($posts->ps_speaker !=null)
                       <label style="color: green; font-size:32px" for="speaker">writer/speaker</label>
                       <p>{!! $posts->ps_speaker !!}</p><hr>
                       @endif
                       @if ($posts->de_speaker !=null)
                       <label style="color: green; font-size:32px" for="speaker">writer/speaker</label>
                       <p>{!! $posts->de_speaker !!}</p><hr>
                       @endif
                       @if ($posts->en_speaker !=null)
                       <label style="color: green; font-size:32px" for="speaker">writer/speaker</label>
                       <p>{!! $posts->en_speaker !!}</p><hr>
                       @endif

                       @if ($posts->date !=null)
                       <label style="color: green; font-size:32px" for="date">date</label>
                       <p>{!! $posts->date !!}</p><hr>
                       @endif

                       @if ($posts->timing !=null)
                       <label style="color: green; font-size:32px" for="timing">titming</label>
                       <p>{!! $posts->timing !!}</p><hr>
                       @endif

                       @if ($posts->fa_location !=null)
                       <label style="color: green; font-size:32px" for="location">location</label>
                       <p>{!! $posts->fa_location !!}</p><hr>
                       @endif
                       @if ($posts->ps_location !=null)
                       <label style="color: green; font-size:32px" for="location">location</label>
                       <p>{!! $posts->ps_location !!}</p><hr>
                       @endif
                       @if ($posts->de_location !=null)
                       <label style="color: green; font-size:32px" for="location">location</label>
                       <p>{!! $posts->de_location !!}</p><hr>
                       @endif
                       @if ($posts->en_location !=null)
                       <label style="color: green; font-size:32px" for="location">location</label>
                       <p>{!! $posts->en_location !!}</p><hr>
                       @endif

                       <label style="color: green; font-size:32px" for="status">status</label><br>
                       @if ($posts->status  == 1)
                       <label style="color: green; font-size:12px" for="status">active</label>
                       @else
                       <label style="color: red; font-size:12px" for="status">deactive</label>
                       @endif

                       <hr>
                    

                       @if ($posts->created_at !=null)
                       <label style="color: green; font-size:32px" for="created_at">created_at</label>
                       <p>{!! $posts->created_at->diffForHumans() !!}</p><hr>
                       <label style="color: green; font-size:32px" for="updated_at">updated_at</label>
                       <p>{!! $posts->updated_at->diffForHumans() !!}</p><hr>
                       @endif

                      </div>
                  </div>
                    
                  </div>
              </div>
            </div>
        </div>
        


@endsection