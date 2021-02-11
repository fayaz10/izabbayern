@extends('adminViewLayout.adminViewApp')
@section('adminContent')

		<!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
              <div class="container-fluid">
                  <div class="row">

                      <div class="col-md-12" style="background-color: white">

                        <label style="color: green; font-size:32px" for="category">category</label>
                        <h2>{{ $team->category }}
                            <div class="table-data-feature">
                            <a href="/admin/team"><button type="button"  title="Go Back"data-toggle="tooltip" class="btn btn-primary">Back</button></a>

                                <form method="get" action="{{url('admin/team/'.$team->id.'/edit')}}" enctype="multipart/form-data">
                               
                                 <button class="btn btn-success"  data-placement="top" title="Edit"data-toggle="tooltip" >Edit</button>
                                </form>
                                <form method="post" enctype="multipart/form-data" action="{{url('admin/team',$team->id)}}">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button  class="btn btn-danger" data-toggle="tooltip" data-placement="top" team="Delete">Delete</button>
                                </form>
                                </div>
                        </h2><hr>

                        @if ($team->image !=null)
                        <label style="color: green; font-size:32px" for="image">cover image</label>
                        <p><div class="adminImage"><img style="height: 300px;" src="/storage/MP4_MP3_PDF_Image_files/{{$team->image}}" alt="{{$team->image}}"></p><hr>
                        @endif
                          @switch($team->category)
                              @case('audio')
                              <label style="color: green; font-size:32px" for="file">Audio</label><br>
                              <audio controls>
                                  <source src="horse.ogg" type="audio/ogg">
                                  <source src="/storage/MP4_MP3_PDF_Image_files/{{$team->file}}" type="audio/mpeg">
                                </audio>
                                  @break
                              @case('video')
                              <label style="color: green; font-size:32px" for="file">Video</label><br>
                              <video  width="300"controls>
                                  <source src="/storage/MP4_MP3_PDF_Image_files/{{$team->file}}" type="video/mp4">
                                  <source src="mov_bbb.ogg" type="video/ogg">
                                </video>
                                  @break
                                  @case('library')
                                  <label style="color: green; font-size:32px" for="file">library</label><br>
                                  <a  href="/download-file/downloadmp4_mp3_pdf_image/{{$team->file}}" >Downlaod</a>
                                    @break
                                    @case('publish')
                                    <label style="color: green; font-size:32px" for="file">publish</label><br>
                                    <a  href="/download-file/downloadmp4_mp3_pdf_image/{{$team->file}}" >Downlaod</a>
                                      @break
                              @default
                                  
                          @endswitch
              
                        <br>
                        
                        @if ($team->header != 'no_header' )
                        <label style="color: green; font-size:32px"  for="header">Header</label>
                        <h4>{{ $team->header }}</h4><hr>
                        @endif                 

                        <label  style="color: green; font-size:32px" for="team">farsi name</label>
                       <h1>{{ $team->fa_name}}</h1><hr>
                       <label style="color: green; font-size:32px" for="fa_Sub team">farsi subname</label>
                       <h3>{{ $team->fa_subname }}</h3><hr>
                       <label style="color: green; font-size:32px" for="fa_description">Farsi description</label>
                       <p>{!! $team->fa_description !!}</p><hr>

                       <label  style="color: green; font-size:32px" for="name">pashtow tenameam</label>
                       <h1>{{ $team->ps_name}}</h1><hr>
                       <label style="color: green; font-size:32px"  for="Sub name">pashtow Subname</label>
                       <h3>{{ $team->ps_subname}}</h3><hr>
                       <label style="color: green; font-size:32px" for="description">pashtow description</label>
                      <p>{!! $team->ps_description !!}</p><hr>

                      <label  style="color: green; font-size:32px" for="name">German name</label>
                      <h1>{{ $team->de_name}}</h1><hr>
                      <label style="color: green; font-size:32px"  for="Sub name">German Subname</label>
                      <h3>{{ $team->de_subname }}</h3><hr>
                      <label style="color: green; font-size:32px" for="description">German description</label>
                     <p>{!! $team->de_description !!}</p><hr>

                     <label  style="color: green; font-size:32px" for="name">English name</label>
                       <h1>{{ $team->en_name }}</h1><hr>
                       <label style="color: green; font-size:32px" for="fa_Sub name">English Subname</label>
                       <h3>{{ $team->en_subname }}</h3><hr>
                       <label style="color: green; font-size:32px" for="fa_description">English description</label>
                       <p>{!! $team->en_description !!}</p><hr>


                       @if ($team->fa_speaker !=null)
                       <label style="color: green; font-size:32px" for="fa_speaker">writer/speaker</label>
                       <p>{!! $team->fa_speaker !!}</p><hr>
                       @endif
                       @if ($team->ps_speaker !=null)
                       <label style="color: green; font-size:32px" for="speaker">writer/speaker</label>
                       <p>{!! $team->ps_speaker !!}</p><hr>
                       @endif
                       @if ($team->de_speaker !=null)
                       <label style="color: green; font-size:32px" for="speaker">writer/speaker</label>
                       <p>{!! $team->de_speaker !!}</p><hr>
                       @endif
                       @if ($team->en_speaker !=null)
                       <label style="color: green; font-size:32px" for="speaker">writer/speaker</label>
                       <p>{!! $team->en_speaker !!}</p><hr>
                       @endif

                       @if ($team->facebook !=null)
                       <label style="color: green; font-size:32px" for="date">Facebook link</label>
                       <p>{!! $team->facebook !!}</p><hr>
                       @endif

                       @if ($team->email !=null)
                       <label style="color: green; font-size:32px" for="timing">email</label>
                       <p>{!! $team->email !!}</p><hr>
                       @endif

                       @if ($team->phone !=null)
                       <label style="color: green; font-size:32px" for="location">phone</label>
                       <p>{!! $team->phone !!}</p><hr>
                       @endif
                       <label style="color: green; font-size:32px" for="status">status</label><br>
                       @if ($team->status  == 1)
                       <label style="color: green; font-size:12px" for="status">active</label>
                       @else
                       <label style="color: red; font-size:12px" for="status">deactive</label>
                       @endif
                       <hr>
                       @if ($team->created_at !=null)
                       <label style="color: green; font-size:32px" for="created_at">created_at</label>
                       <p>{!! $team->created_at->diffForHumans() !!}</p><hr>
                       <label style="color: green; font-size:32px" for="updated_at">updated_at</label>
                       <p>{!! $team->updated_at->diffForHumans() !!}</p><hr>
                       @endif

                      </div>
                  </div>
                    
                  </div>
              </div>
            </div>
        </div>
        


@endsection