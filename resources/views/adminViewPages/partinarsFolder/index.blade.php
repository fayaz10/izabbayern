@extends('adminViewLayout.adminViewApp')

@section('adminContent')

		<!-- MAIN CONTENT-->
        <div class="main-content">
                  <div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">partinars table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                       
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#mediumModal">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                      
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Fa_Name</th>
                                                <th>Ps_Name</th>
                                                <th>De_Name</th>
                                                <th>En_Name</th>
                                                <th>URL-Link</th>
                                                <th>status</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($partinars as $part)
                                            <tr class="tr-shadow">
                                                <td>{{$part->id}}</td>
                                                <td>{{$part->fa_title}}</td>
                                                <td>{{$part->ps_title}}</td>
                                                <td>{{$part->de_title}}</td>
                                                <td>{{$part->en_title}}</td>
                                                <td><a href="{{$part->urlLink}}"><span class="block-email">{{$part->urlLink}}</span></a></td>
                                                 <th> 
                                                 <?php if( $part->status == 1){
                                                     echo '<span class="status--process"><small>Active</small></span>';
                                                    }else{ echo '<span class="status--denied"><small>Deactive</small></span>';}
                                                  ?>
                                                 </th>
                                                <td>{{$part->created_at->diffForHumans()}}</td>
                                                <td>
                                                    <div class="table-data-feature">

                                                    <form method="get" action="{{url('admin/partinars/'.$part->id.'/edit')}}" enctype="multipart/form-data">
                                                    <button type="submit" class="item"  data-placepartt="top" title="Edit"data-toggle="tooltip" ><i class="zmdi zmdi-edit"></i> </button>
                                                    </form>

                                                    <form method="post"  action="{{url('admin/partinars',$part->id)}}" enctype="multipart/form-data">
                                                       @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="item" data-toggle="tooltip" data-placepartt="top" title="Delete"><i class="zmdi zmdi-delete"></i> </button>
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
			<!-- modal Create partinars -->
			<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="docupartt">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Create New partinars</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                            <form method="post" enctype="multipart/form-data" action="{{url('admin/partinars')}}">
                            @csrf             
                            <div class="row form-group">
                                <div class="col-12 col-md-6"><label for="partinars title">name (Farsi)</label>
                                    <input type="text" id="title" name="fa_title" placeholder="(فارسی) name" class="form-control">
                                    <small class="form-text text-muted">Write name here.</small>
                                </div>
                                <div class="col-12 col-md-6"><label for="partinars title">Name (Pashtwo)</label>
                                    <input type="text" id="title" name="ps_title" placeholder="(پشتو)name" class="form-control">
                                    <small class="form-text text-muted">Write name here.</small>
                                </div>
                            </div>
                                <div class="row form-group">
                                <div class="col-12 col-md-6"><label for="partinars title">name (German)</label>
                                    <input type="text" id="title" name="de_title" placeholder="name German" class="form-control">
                                    <small class="form-text text-muted">Write name here.</small>
                                </div>
                                <div class="col-12 col-md-6"><label for="partinars title">name (English)</label>
                                    <input type="text" id="title" name="en_title" placeholder="name English" class="form-control">
                                    <small class="form-text text-muted">Write name here.</small>
                                </div>
                            </div>
                                <div class="row form-group">
                                    <div class="col-12 col-md-6"><label for="Link">Link</label>
                                        <input type="text" id="urlLink" name="urlLink" placeholder="https//name..." class="form-control">
                                        <small class="form-text text-muted">put the partinars link here.</small>
                                    </div>
                                        <div class="col-12 col-md-6"><label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1">Enable</option>
                                            <option value="0">Disable</option>
                                        </select>
                                    <small class="form-text text-muted">Select the status of partinars</small>
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


