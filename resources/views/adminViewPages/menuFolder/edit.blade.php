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
                                        <h3><center>Update Menus here</center></h3>
                                    </div>
                                        <div class="card">
                                            <div class="card-body card-block">
                                                <form action="{{url('admin/menu',$menu->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                              @csrf
                                      
                                              <div class="row form-group">
                                                 <div class="col-12 col-md-6"><label for="menu title">(فارسی)اسم</label>
                                                    <input type="text" id="fa_title" name="fa_title" value="{{$menu->fa_title}}" placeholder="اسم" class="form-control">
                                                    <small class="form-text text-muted">Write menu name here.</small>
                                                </div>
                                                <div class="col-12 col-md-6"><label for="menu title">(پشتو)اسم</label>
                                                    <input type="text" id="ps_title" name="ps_title" value="{{$menu->ps_title}}" placeholder="اسم" class="form-control">
                                                    <small class="form-text text-muted">Write menu name here.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-12 col-md-6"><label for="menu title">Menu Name(German)</label>
                                                    <input type="text" id="title" name="de_title" value="{{$menu->de_title}}" placeholder="Title" class="form-control">
                                                    <small class="form-text text-muted">Write menu name here.</small>
                                                </div>
                                                <div class="col-12 col-md-6"><label for="menu title">Menu Name(English)</label>
                                                    <input type="text" id="title" name="en_title" value="{{$menu->en_title}}" placeholder="Title" class="form-control">
                                                    <small class="form-text text-muted">Write menu name here.</small>
                                                </div>
                                            </div>
                                                    <div class="row form-group">
                                                        <div class="col-12 col-md-6"><label for="Link">Link</label>
                                                            <input type="text" id="urlLink" name="urlLink" value="{{$menu->urlLink}}" placeholder="https//name..." class="form-control">
                                                            <small class="form-text text-muted">put the menu link here.</small>
                                                        </div>
                                                        <div class="col-12 col-md-6"><label for="status">Status</label>
                                                            <select name="status" id="status" value="{{$menu->status}}" class="form-control">
                                                                @if($menu->status == 1)
                                                                <option value="1" selected style="color: green">Active</option>
                                                                <option value="0" style="color: red">Diactivate</option>
                                                                @else
                                                                <option value="1" style="color: green">Active</option>
                                                                <option value="0" selected style="color: red">Diactive</option>
                                                                @endif
                                                        </select><small class="form-text text-muted">Select the status of menu</small>
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
