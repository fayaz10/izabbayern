@extends('adminViewLayout.adminViewApp')

@section('adminContent')

		<!-- MAIN CONTENT-->
        <div class="main-content">
                  <div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Menu table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#mediumModal">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                        {{--  --}}
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>ّFa_title</th>
                                                <th>ّps_title</th>
                                                <th>ّDe_title</th>
                                                <th>ّEn_title</th>
                                                <th>URL-Link</th>
                                                <th>status</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($menu as $men)
                                            <tr class="tr-shadow">
                                                <td>{{$men->id}}</td>
                                                
                                                     <td style="color:green">{{ $men->fa_title }}</td>
                                                     <td style="color:green">{{ $men->ps_title }}</td>
                                                     <td style="color:green">{{ $men->de_title }}</td>
                                                     <td style="color:green">{{ $men->en_title }}</td>
                                                <td><a href="{{$men->urlLink}}"><span class="block-email">{{$men->urlLink}}</span></a></td>
                                                 <th> 
                                                 <?php if( $men->status == 1){
                                                     echo '<span class="status--process"><small>Active</small></span>';
                                                    }else{ echo '<span class="status--denied"><small>Deactive</small></span>';}
                                                  ?>
                                                 </th>
                                                <td>{{$men->created_at->diffForHumans()}}</td>
                                                <td>
                                                    <div class="table-data-feature">

                                                    <form method="get" action="{{url('admin/menu/'.$men->id.'/edit')}}" enctype="multipart/form-data">
                                                    <button type="submit" class="item"  data-placement="top" title="Edit"data-toggle="tooltip" ><i class="zmdi zmdi-edit"></i> </button>
                                                    </form>

                                                    <form method="post"  action="{{url('admin/menu',$men->id)}}" enctype="multipart/form-data">
                                                       @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i> </button>
                                                    </form>

                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            @endforeach                                       
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
						</div>
					</div>
				</div>
			</div>
			<!-- modal Create Menu -->
			<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Create New Menu</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                            {{-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> --}}
                            <form method="post" enctype="multipart/form-data" action="{{url('admin/menu')}}">
                            @csrf  
                            <div class="row form-group">
                                <div class="col-12 col-md-6"><label for="menu title">Farsi Name</label>
                                    <input type="text" id="title" name="fa_title" placeholder=" Farsi Title" class="form-control">
                                    <small class="form-text text-muted">Write menu name here.</small>
                                </div>
                                <div class="col-12 col-md-6"><label for="menu title">Pashtow Name</label>
                                    <input type="text" id="ps_title" name="ps_title" placeholder=" Pashtow Title" class="form-control">
                                    <small class="form-text text-muted">Write menu name here.</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-12 col-md-6"><label for="menu title">German Name</label>
                                    <input type="text" id="de_title" name="de_title" placeholder="German Title" class="form-control">
                                    <small class="form-text text-muted">Write menu name here.</small>
                                </div>
                                <div class="col-12 col-md-6"><label for="menu title">English Name</label>
                                    <input type="text" id="en_title" name="en_title" placeholder=" English Title" class="form-control">
                                    <small class="form-text text-muted">Write menu name here.</small>
                                </div>
                            </div>
                                <div class="row form-group">
                                    <div class="col-12 col-md-6"><label for="Link">Link</label>
                                        <input type="text" id="urlLink" name="urlLink" placeholder="https//name..." class="form-control">
                                        <small class="form-text text-muted">put the menu link here.</small>
                                    </div>
                                     <div class="col-12 col-md-6"><label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1">Enable</option>
                                            <option value="0">Disable</option>
                                    </select><small class="form-text text-muted">Select the status of menu</small>
                                    
                                    </div>
                                </div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="submit"  class="btn btn-primary">Submit</button>
                        </div>
                    </form>
					</div>
				</div>
            </div>


@endsection


