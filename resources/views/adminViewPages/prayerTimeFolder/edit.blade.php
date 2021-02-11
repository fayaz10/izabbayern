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
                                        <h3><center>Update Prayer time here</center></h3>
                                    </div>
                                        <div class="card container" >
                                            <div class="card-body card-block">
                                                <form action="{{url('admin/prayer',$prayer->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                              @csrf
                                              <div class="row form-group">
                                                <div class="col-12 col-md-6"><label for="menu title">prayer name(Farsi)</label>
                                                    <input type="text" id="fa_prayername" name="fa_prayername" value="{{$prayer->fa_prayername}}" placeholder="prayer name" class="form-control">
                                                    <small class="form-text text-muted">Edit prayer name here.</small>
                                                </div>
                                                <div class="col-12 col-md-6"><label for="menu title">prayer name(Pashtow)</label>
                                                    <input type="text" id="ps_prayername" name="ps_prayername" value="{{$prayer->ps_prayername}}" placeholder="prayer name" class="form-control">
                                                    <small class="form-text text-muted">Edit prayer name here.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-12 col-md-6"><label for="menu title">prayer name(German)</label>
                                                    <input type="text" id="de_prayername" name="de_prayername" value="{{$prayer->de_prayername}}" placeholder="prayer name" class="form-control">
                                                    <small class="form-text text-muted">Edit prayer name here.</small>
                                                </div>
                                                <div class="col-12 col-md-6"><label for="menu title">prayer name(English)</label>
                                                    <input type="text" id="en_prayername" name="en_prayername" value="{{$prayer->en_prayername}}" placeholder="prayer name" class="form-control">
                                                    <small class="form-text text-muted">Edit prayer name here.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-12 col-md-6"><label for="menu title">prayer Time</label>
                                                    <input type="text" id="prayertime" name="prayertime" value="{{$prayer->prayertime}}" placeholder="prayer time" class="form-control">
                                                    <small class="form-text text-muted">Edit prayer time here.</small>
                                                </div>
                                                        <div class="col-12 col-md-6"><label for="amorpm">AM|PM</label>
                                                            <select name="amorpm" id="amorpm" value="{{$prayer->amorpm}}" class="form-control">
                                                                @if($prayer->amorpm == 1)
                                                                <option value="1" selected >AM</option>
                                                                <option value="0" >PM</option>
                                                                @else
                                                                <option value="1" >AM</option>
                                                                <option value="0" selected>PM</option>
                                                                @endif
                                                        </select><small class="form-text text-muted">Select the AM | PM of Time</small>
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
