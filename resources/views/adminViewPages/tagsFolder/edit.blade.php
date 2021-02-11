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
                                        <h3><center>Update tags here</center></h3>
                                    </div>
                                        <div class="card">
                                            <div class="card-body card-block">
                                                <form action="{{url('admin/tags',$tags->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                              @csrf
                                              <div class="row form-group">
                                                <div class="col-12 col-md-6"><label for="tags title">(فارسی)اسم</label>
                                                    <input type="text" id="fa_name" name="fa_name" value="{{$tags->fa_name}}" placeholder="اسم" class="form-control">
                                                    <small class="form-text text-muted">Write tags name here.</small>
                                                </div>
                                                <div class="col-12 col-md-6"><label for="tags title">(پشتو)اسم</label>
                                                    <input type="text" id="ps_name" name="ps_name" value="{{$tags->ps_name}}" placeholder="اسم" class="form-control">
                                                    <small class="form-text text-muted">Write tags name here.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-12 col-md-6"><label for="tags name">tags Name(German)</label>
                                                    <input type="text" id="de_name" name="de_name" value="{{$tags->de_name}}" placeholder="name" class="form-control">
                                                    <small class="form-text text-muted">Write tags name here.</small>
                                                </div>
                                                <div class="col-12 col-md-6"><label for="tags name">tags Name(English)</label>
                                                    <input type="text" id="en_name" name="en_name" value="{{$tags->name}}" placeholder="name" class="form-control">
                                                    <small class="form-text text-muted">Write tags name here.</small>
                                                </div>
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
