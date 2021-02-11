@extends('adminViewLayout.adminViewApp')

@section('adminContent')

		<!-- MAIN CONTENT-->
        <div class="main-content">
                  <div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">tags table</h3>
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
                                                <th>ّFa_title</th>
                                                <th>ّPs_title</th>
                                                <th>ّDe_title</th>
                                                <th>ّEn_title</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($tags as $tag)
                                            <tr class="tr-shadow">
                                                <td>{{$tag->id}}</td>
                                                <td style="color:green">{{ $tag->fa_name }}</td>
                                                <td style="color:green">{{ $tag->ps_name }}</td>
                                                <td style="color:green">{{ $tag->de_name }}</td>
                                                <td style="color:green">{{ $tag->en_name }}</td>
                                                 <td>{{$tag->created_at->diffForHumans()}}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                    <form method="get" action="{{url('admin/tags/'.$tag->id.'/edit')}}" enctype="multipart/form-data">
                                                    <button type="submit" class="item"  data-placetagt="top" title="Edit"data-toggle="tooltip" ><i class="zmdi zmdi-edit"></i> </button>
                                                    </form>
                                                    <form method="post"  action="{{url('admin/tags',$tag->id)}}" enctype="multipart/form-data">
                                                       @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="item" data-toggle="tooltip" data-placetagt="top" title="Delete"><i class="zmdi zmdi-delete"></i> </button>
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
			<!-- modal Create tags -->
			<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="docutagt">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Create New tags</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                            {{-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> --}}
                            <form method="post" enctype="multipart/form-data" action="{{url('admin/tags')}}">
                            @csrf  
                            <div class="row form-group">
                                <div class="col-12 col-md-6"><label for="tags name">(فارسی)اسم تاگ</label>
                                    <input type="text" id="fa_name" name="fa_name" placeholder=" اسم تاگ " class="form-control">
                                    <small class="form-text text-muted">Write tags name here.</small>
                                </div>
                                <div class="col-12 col-md-6"><label for="tags name">(پشتو)اسم تاگ</label>
                                    <input type="text" id="ps_name" name="ps_name" placeholder=" اسم تاگ " class="form-control">
                                    <small class="form-text text-muted">Write tags name here.</small>
                                </div>
						    </div>
                            <div class="row form-group">
                                <div class="col-12 col-md-6"><label for="tags name">tag Name(German)</label>
                                    <input type="text" id="de_name" name="de_name" placeholder="tag name" class="form-control">
                                    <small class="form-text text-muted">Write tags name here.</small>
                                </div>
                                <div class="col-12 col-md-6"><label for="tags name">tag Name(English)</label>
                                    <input type="text" id="en_name" name="en_name" placeholder="tag name" class="form-control">
                                    <small class="form-text text-muted">Write tags name here.</small>
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


