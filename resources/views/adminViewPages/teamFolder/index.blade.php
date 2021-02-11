@extends('adminViewLayout.adminViewApp')

@section('adminContent')

		<!-- MAIN CONTENT-->
        <div class="main-content">
                  <div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">team table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href="/admin/team/create">    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#mediumModal">
                                            <i class="zmdi zmdi-plus"></i>add item</button></a>
                                        
                                    </div>
                                </div>
                                @foreach($team as $member_team)
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="submenuTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Category</th>
                                                <th>Header</th>
                                                <th>Fa_Name</th>
                                                <th>fa_Posiation</th>
                                                <th>fa_Description</th>

                                                <th>status</th>
                                                <th>Email_Link</th>
                                                <th>Facebook_Link</th>
                                                <th>Phone</th>
                                                <th>Cover_Image</th>
                                                <th>created_at</th>
                                                <th>Updated_at</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>{{$member_team->id}}</td>
                                                <td><a href="team/{{$member_team->id}}">{{$member_team->category}}</a></td>
                                                <td>{{$member_team->header}}</td>
                                                <td>{{$member_team->fa_name}}</td>
                                                <td>{{$member_team->fa_subname}}</td>
                                                <td><div class="descScroll">{!!$member_team->fa_description!!}</div></td>
                                                 <td> 
                                                 <?php if( $member_team->status == 1){
                                                     echo '<span class="status--process">Active</span>';
                                                    }else{ echo '<span class="status--denied">Deactive</span>';}
                                                  ?>
                                                 </td>
                                                <td><a href="mailto:{{$member_team->email}}">{{$member_team->email}}</a></td>
                                                <td><a href="{{$member_team->facebook}}">{{$member_team->facebook}}</a></td>
                                                <td>{{$member_team->phone}}</td>
                                                <td><div class="adminImage"> <img  src="../../storage/MP4_MP3_PDF_Image_files/{{$member_team->image}}"alt="{{$member_team->name}}"></div></td>
                                                <td>{{$member_team->created_at->diffForHumans()}}</td>
                                                <td>{{$member_team->updated_at->diffForHumans()}}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                    <form method="get" action="{{url('admin/team/'.$member_team->id.'/edit')}}" enctype="multipart/form-data">
                                                   
                                                     <button class="item"  data-placement="top" title="Edit"data-toggle="tooltip" data-target="#largeModal"><i class="zmdi zmdi-edit"></i> </button>
                                                    </form>
                                                    <form method="post" enctype="multipart/form-data" action="{{url('admin/team',$member_team->id)}}">
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
			</div>



@endsection
 

