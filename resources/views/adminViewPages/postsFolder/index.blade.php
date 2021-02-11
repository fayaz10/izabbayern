@extends('adminViewLayout.adminViewApp')

@section('adminContent')

		<!-- MAIN CONTENT-->
        <div class="main-content">
                  <div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">posts table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <form action="/selectCatFormRoute" id="myCatform" method="get">
                                                <select class="js-select2" name="selectCat"  submitCatForm();>
                                                <option value="">All Posts</option>
                                                <option value="services">Services</option>
                                                <option value="news">News</option>
                                                <option value="events">Events</option>
                                                <option value="announce">Announcements</option>
                                                <option value="donations">Donations</option>
                                                <option value="gallery">Gallery</option>
                                                <option value="banner">Banner</option>
                                                <option value="zakat">Zakat</option>
                                                <option value="aboutus">About us</option>
                                                <option value="faq">FAQ</option>
                                                <option value="library">library</option>
                                                <option value="publish">our publihes</option>
                                                <option value="video">video</option>
                                                <option value="audio">audio</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button type="submit" class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters
                                        </button>
                                    </div>
                                </form>
                                  <!-- Script --> 
                            <script type='text/javascript'> 
                                function submitCatForm(){ 
                                document.getElementById('myCatform').submit(); 
                                } 
                            </script>
                            <div>
                                {{-- @foreach($posts as $post)
                                <h1>{{ $post->category }}</h1>
                                @endforeach --}}
                            </div>
                                    <div class="table-data__tool-right">
                                      <a href="posts/create">  <button class="au-btn au-btn-icon au-btn--green au-btn--small" >
                                            <i class="zmdi zmdi-plus"></i>add item</button></a>
                                     
                                    </div>
                                </div><hr>
                               
                                @foreach($posts as $post)
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="submenuTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Category</th>
                                                <th>fa_Title</th>
                                                <th>fa_subTitle</th>
                                                <th>fa_Description</th>
                                                <th>Title</th>
                                                <th>subTitle</th>
                                                <th>Description</th>
                                                <th>Header</th>
                                                <th>Sub_Header</th>
                                                <th>Post_Type</th>
                                                <th>status</th>
                                                <th>Speaker/writer</th>
                                                <th>Timing</th>
                                                <th>Date</th>
                                                <th>Location</th>
                                                <th>Cover_Image</th>
                                                <th>File</th>
                                                <th>Downlaod</th>
                                                <th>created_at</th>
                                                <th>Updated_at</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td><a href="posts/{{$post->id}}">{{$post->id}}</td></a> 
                                                <td><a href="posts/{{$post->id}}"><h1>{{$post->category}}</h1></td></a>
                                                <td><a href="posts/{{$post->id}}">{{$post->fa_title}}</td></a>
                                                <td><a href="posts/{{$post->id}}"><div class="subScroll">{{str_limit($post->fa_subtitle,130)}}</div></td></a>
                                                <td><a href="posts/{{$post->id}}"><div class="descScroll">{!! str_limit($post->fa_description,130)!!}</div></td></a>
                                                <td><a href="posts/{{$post->id}}">{{$post->title}}</td></a>
                                                <td><a href="posts/{{$post->id}}"><div class="subScroll">{{str_limit($post->de_subtitle,130)}}</div></td></a>
                                                <td><a href="posts/{{$post->id}}"><div class="descScroll">{!! str_limit($post->de_description,130)!!}</div></td></a>
                                                <td><a href="posts/{{$post->id}}">{{$post->header}}</td></a>
                                                <td><a href="posts/{{$post->id}}">{{$post->sub_header}}</td></a>
                                                <td><a href="posts/{{$post->id}}">{{$post->post_type}}</td></a>
                                                <td>
                                                 <?php if( $post->status == 1){
                                                     echo '<span class="status--process">Active</span>';
                                                    }else{ echo '<span class="status--denied">Deactive</span>';}
                                                  ?>
                                                 </td>
                                                 <td>@if ($post->fa_speaker !=null)
                                                    {{$post->fa_speaker}}
                                                @else
                                                    No Speaker or Writer name.
                                                @endif</td>

                                                <td>@if ($post->timing !=null)
                                                    {{$post->timing}}
                                                @else
                                                    No timing.
                                                @endif</td>

                                                <td>@if ($post->date !=null)
                                                    {{$post->date}}
                                                @else
                                                    No date.
                                                @endif</td>

                                                <td>@if ($post->fa_location !=null)
                                                    {{$post->fa_location}}
                                                @else
                                                    No location name.
                                                @endif</td>
                                             

                                                @switch($post->category)
                                                @case('audio')
                                                <td><img src="/storage/MP4_MP3_PDF_Image_files/{{$post->image}}" alt="{{$post->image}}" srcset="" style="width: 300px; hight:300px"></td>
                                                <td><audio controls>
                                                     <source src="horse.ogg" type="audio/ogg">
                                                    <source src="/storage/MP4_MP3_PDF_Image_files/{{$post->file}}" type="audio/mpeg">
                                                  </audio></td>
                                                  <td><a  href="/download-file/downloadmp4_mp3_pdf_image/{{$post->file}}" >Downlaod</a></td>
                                                    @break
                                                @case('video')
                                                <td><img src="/storage/MP4_MP3_PDF_Image_files/{{$post->image}}" alt="{{$post->image}}" srcset="" style="width: 300px; hight:300px"></td>
                                                <td> <video  width="300"controls>
                                                    <source src="/storage/MP4_MP3_PDF_Image_files/{{$post->file}}" type="video/mp4">
                                                    <source src="mov_bbb.ogg" type="video/ogg">
                                                    </video></td>
                                                    <td><a  href="/download-file/downloadmp4_mp3_pdf_image/{{$post->file}}" >Downlaod</a></td> 
                                                    @break
                                                @case('library')
                                                <td><img src="/storage/MP4_MP3_PDF_Image_files/{{$post->image}}" alt="{{$post->image}}" srcset="" style="width: 300px; hight:300px"></td>
                                                <td><a  href="/download-file/downloadmp4_mp3_pdf_image/{{$post->file}}" >Downlaod</a></td> 
                                                @break
                                                @case('publish')
                                                <td><img src="/storage/MP4_MP3_PDF_Image_files/{{$post->image}}" alt="{{$post->image}}" srcset="" style="width: 300px; hight:300px"></td>
                                                    <td><a  href="/download-file/downloadmp4_mp3_pdf_image/{{$post->file}}" >Downlaod</a></td> 
                                                    @break
                                                @default
                                                <td><img src="/storage/MP4_MP3_PDF_Image_files/{{$post->image}}" alt="{{$post->image}}" srcset="" style="width: 300px; hight:300px"></td>
                                                <td>No File</td>
                                                <td>No download</td>
                                            @endswitch
                                            
                                           
                                                <td>{{$post->created_at->diffForHumans()}}</td>
                                                <td>{{$post->updated_at->diffForHumans()}}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                    <form method="get" action="{{url('admin/posts/'.$post->id.'/edit')}}" enctype="multipart/form-data">
                                                   
                                                     <button class="item"  data-placement="top" title="Edit"data-toggle="tooltip" data-target="#largeModal"><i class="zmdi zmdi-edit"></i> </button>
                                                    </form>
                                                    <form method="post" enctype="multipart/form-data" action="{{url('admin/posts',$post->id)}}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i> </button>
                                                    </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                        </tbody>
                                    </table>
                                </div>
                                @endforeach                                       
                                <!-- END DATA TABLE -->
                            </div>
						</div>
					</div>
                </div>
                <br><hr>
                <div style="height: 30px">
                    <center>  {{ $posts->links() }}</center>
                  </div> <br><hr>
			</div>


   
@endsection
 

