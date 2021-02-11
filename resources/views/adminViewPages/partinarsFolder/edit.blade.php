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
                                        <h3><center>Update partinarss here</center></h3>
                                    </div>
                                        <div class="card">
                                            <div class="card-body card-block">
                                                <form action="{{url('admin/partinars',$partinars->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                              @csrf
                                                    <div class="row form-group">
                                                        <div class="col-12 col-md-6"><label for="partinars title">partinars Name(Farsi)</label>
                                                            <input type="text" id="title" name="fa_title" value="{{$partinars->fa_title}}" placeholder="Title" class="form-control">
                                                            <small class="form-text text-muted">Write partinars name here.</small>
                                                        </div>
                                                        <div class="col-12 col-md-6"><label for="partinars title">partinars Name(Pashtow)</label>
                                                            <input type="text" id="title" name="ps_title" value="{{$partinars->ps_title}}" placeholder="Title" class="form-control">
                                                            <small class="form-text text-muted">Write partinars name here.</small>
                                                        </div>
                                                    </div>
                                                        <div class="row form-group">
                                                        <div class="col-12 col-md-6"><label for="partinars title">partinars Name(German)</label>
                                                            <input type="text" id="title" name="de_title" value="{{$partinars->de_title}}" placeholder="Title" class="form-control">
                                                            <small class="form-text text-muted">Write partinars name here.</small>
                                                        </div>
                                                        <div class="col-12 col-md-6"><label for="partinars title">partinars Name(English)</label>
                                                            <input type="text" id="title" name="en_title" value="{{$partinars->en_title}}" placeholder="Title" class="form-control">
                                                            <small class="form-text text-muted">Write partinars name here.</small>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"></div>

                                                        <div class="col-12 col-md-6"><label for="Link">Link</label>
                                                            <input type="text" id="urlLink" name="urlLink" value="{{$partinars->urlLink}}" placeholder="https//name..." class="form-control">
                                                            <small class="form-text text-muted">put the partinars link here.</small>
                                                        </div>
                                                        <div class="col col-md-3"></div>

                                                    </div>
                                             
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"></div>

                                                        <div class="col-12 col-md-6"><label for="status">Status</label>
                                                            <select name="status" id="status" value="{{$partinars->status}}" class="form-control">
                                                                @if($partinars->status == 1)
                                                                <option value="1" selected style="color: green">Active</option>
                                                                <option value="0" style="color: red">Diactivate</option>
                                                                @else
                                                                <option value="1" style="color: green">Active</option>
                                                                <option value="0" selected style="color: red">Diactive</option>
                                                                @endif
                                                        </select><small class="form-text text-muted">Select the status of partinars</small>
                                                        
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
