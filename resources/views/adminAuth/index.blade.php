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
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">PDF</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#mediumModal">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">PDF</option>
                                                <option value="">EXCEL</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                @foreach($users as $user)
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Role</th>
                                                {{-- <th>Status</th> --}}
                                                <th>Name</th>
                                                <th>Email</th>
                                                @can('manage-users')
                                                <th>password</th>
                                                @endcan
                                                <th>Date</th>
                                                <th>Update</th>
                                                @can('edit-users')
                                                <th>Actions</th>
                                                @endcan
                                            </tr>
                                        </thead>
                                        <tbody>
                                       
                                            <tr class="tr-shadow">
                                                <td>{{$user->id}}</td>
                                                {{-- <td>{{ $user->roles()->get() }}</td> --}}
                                                <td style="color: green">{{ implode(',',$user->roles()->pluck('role_name')->toArray())}}</td>
                                                
                                                <td>{{$user->name}}</td>
                                                <td><a href="mailto:{{$user->email}}"><span class="block-email">{{$user->email}}</span></a></td>
                                                @can('manage-users')
                                                <td>{{$user->password}}</td>
                                                @endcan
                                                <td>{{$user->created_at->diffForHumans()}}</td>
                                                <td>{{$user->updated_at->diffForHumans()}}</td>
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                        @can('edit-users')
                                                    <form method="get" action="{{url('admin/ruler/'.$user->id.'/edit')}}" enctype="multipart/form-data">
                                                    <button type="submit" class="item"  data-placement="top" title="Edit"data-toggle="tooltip" ><i class="zmdi zmdi-edit"></i> </button>
                                                    </form>
                                                    @endcan
                                                    @can('delete-users')
                                                    <form method="post"  action="{{url('admin/ruler',$user->id)}}" enctype="multipart/form-data">
                                                       @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i> </button>
                                                    </form>
                                                    @endcan
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                                                               
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                                @endforeach  
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
                            <form method="post" enctype="multipart/form-data" action="{{url('admin/ruler')}}">
                            @csrf  
                            <div class="row form-group">
                                <div class="col col-md-3"></div>

                                <div class="col-12 col-md-6"><label for="role">Role</label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="admin" style="color: green">Admin</option>
                                        <option value="author" style="color: yellow">Author</option>
                                </select><small class="form-text text-muted">Select the Role of user</small>
                                
                                </div>
                                <div class="col col-md-3"></div>

                            </div>           
                            <div class="row form-group">
                                <div class="col col-md-3"></div>
                                <div class="col-12 col-md-6"><label for="menu name">user Name</label>
                                    <input type="text" id="name" name="name" placeholder="name" class="form-control">
                                    <small class="form-text text-muted">Write user name here.</small>
                                </div>
                                <div class="col col-md-3"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"></div>
                                <div class="col-12 col-md-6"><label for="menu email"> E-mail</label>
                                    <input type="email" id="email" name="email" placeholder="email" class="form-control">
                                    <small class="form-text text-muted">Write menu name here.</small>
                                </div>
                                <div class="col col-md-3"></div>
                            </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"></div>

                                    <div class="col-12 col-md-6"><label for="Link">password</label>
                                        <input type="text" id="password" name="password" placeholder="password" class="form-control">
                                        <small class="form-text text-muted">put the user password here.</small>
                                    </div>
                                    <div class="col col-md-3"></div>

                                </div>
                         
                                <div class="row form-group">
                                    <div class="col col-md-3"></div>

                                    <div class="col-12 col-md-6"><label for="status">status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1">Enable</option>
                                            <option value="0">Disable</option>
                                    </select><small class="form-text text-muted">Select the status of user</small>
                                    
                                    </div>
                                    <div class="col col-md-3"></div>

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


