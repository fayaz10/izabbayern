@extends('adminViewLayout.adminViewApp')

@section('adminContent')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                       <br>
                      <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3><center>Edit User {{$user->name}} </center></h3>
                                    </div>
                                        <div class="card">
                                            <div class="card-body card-block">
                                                <form action="{{url('admin/ruler',$user->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                              @csrf
                                              <div class="row form-group">
                                                <div class="col col-md-3"></div>
                                                <div class="col-12 col-md-6"><label for="role">Select User Roles</label>
                                                @foreach ($roles as $role)
                                                    <div class="form-check">
                                                        <input type="checkbox"  name="roles[]"  value="{{ $role->id }}"
                                                        @if($user->roles->pluck('id')->contains($role->id)) checked @endif> <label for="role name">{{ $role->role_name }}</label>
                                                    </div>
                                                @endforeach
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"></div>
                                                <div class="col-12 col-md-6"><label for="user name">user Name</label>
                                                    <input type="text" id="name" name="name" value="{{$user->name}}" placeholder="name" class="form-control">
                                                    <small class="form-text text-muted">Write user name here.</small>
                                                </div>
                                                <div class="col col-md-3"></div>
                                            </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"></div>
                                                        <div class="col-12 col-md-6"><label for="Link">email</label>
                                                            <input type="email" id="email" name="email" value="{{$user->email}}" placeholder="email..." class="form-control">
                                                            <small class="form-text text-muted">put the user email here.</small>
                                                        </div>
                                                        <div class="col col-md-3"></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"></div>
                                                        <div class="col-12 col-md-6"><label for="Link">password</label>
                                                            <input type="text" id="password" name="password" value="{{$user->password}}" placeholder="password..." class="form-control">
                                                            <small class="form-text text-muted">put the user password here.</small>
                                                        </div>
                                                        <div class="col col-md-3"></div>
                                                    </div>
                                              
                                                  </div>
                                                 <div class="card-footer">
                                                  <center>  <button type="submit" class="btn btn-primary btn-sm">Update</button></center>
                                               
                                            </div>
                                            <input type="hidden" name="_method" value="PATCH">
                                            </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
@endsection
