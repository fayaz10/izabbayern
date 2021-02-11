@extends('adminViewLayout.adminViewApp')

@section('adminContent')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Create contact</strong> Elements
                        </div>
                        <div class="card-body card-block">
                            <form id="submenuForm" method="post" enctype="multipart/form-data" action="{{url('admin/contact')}}">
                                <!-- <form id="submenuForm"> -->
                                @csrf 
                                <div class="row form-group">
                                    <label for="status">Top Header</label>
                                    <select name="header" id="header" class="form-control">
                                        <option value="no_header">No Header</option>
                                        <option value="header">Top Header</option>
                                        <option value="down_header">Down Header</option>
                                </select><small class="form-text text-muted">Select if its header or not</small>
                                </div> 
                                <div class="row form-group">
                                    <div class="col-12 col-md-6"><label for="menu title">title( Farsi) </label>
                                        <input type="text" id="fa_title" name="fa_title" placeholder="Title" class="form-control">
                                        <small class="form-text text-muted">Write  title( Farsi)  here.</small>
                                    </div>
                                    <div class="col-12 col-md-6"><label for="menu title">subtitle (Farsi)</label>
                                        <input type="text" id="subtitle" name="fa_subtitle" placeholder="Subtitle" class="form-control">
                                        <small class="form-text text-muted">Write subtitle here.</small>
                                    </div>
                                </div> <hr>
                                <div class="row form-group">
                                    <div class="col-12 col-md-6"><label for="menu title">title( Pashtow) </label>
                                        <input type="text" id="ps_title" name="ps_title" placeholder="Title" class="form-control">
                                        <small class="form-text text-muted">Write title here.</small>
                                    </div>
                                    <div class="col-12 col-md-6"><label for="menu title">subtitle (Pashtow)</label>
                                        <input type="text" id="ps_subtitle" name="ps_subtitle" placeholder="Subtitle" class="form-control">
                                        <small class="form-text text-muted">Write subtitle here.</small>
                                    </div>
                                </div> <hr>

                                <div class="row form-group">
                                    <div class="col-12 col-md-6"><label for="menu title">title (German)</label>
                                        <input type="text" id="de_title" name="de_title" placeholder="contact title" class="form-control">
                                        <small class="form-text text-muted">Write contact name here.</small>
                                    </div>
                                    <div class="col-12 col-md-6"><label for="menu title">subtitle (German)</label>
                                        <input type="text" id="de_subtitle" name="de_subtitle" placeholder="contact subtitle" class="form-control">
                                        <small class="form-text text-muted">Write contact Subtitle here.</small>
                                    </div>
                                </div><hr>
                                <div class="row form-group">
                                    <div class="col-12 col-md-6"><label for="menu title">title (English)</label>
                                        <input type="text" id="en_title" name="en_title" placeholder="contact title" class="form-control">
                                        <small class="form-text text-muted">Write contact name here.</small>
                                    </div>
                                    <div class="col-12 col-md-6"><label for="menu title">subtitle (English)</label>
                                        <input type="text" id="en_subtitle" name="en_subtitle" placeholder="contact subtitle" class="form-control">
                                        <small class="form-text text-muted">Write contact Subtitle here.</small>
                                    </div>
                                </div><hr>
                                <div class="row form-group">
                                    <div class="col-12 col-md-6"><label for="menu title"> Address (Farsi)</label>
                                        <input type="text" id="fa_address" name="fa_address" placeholder="Address" class="form-control">
                                        <small class="form-text text-muted">Write Address here.</small>
                                    </div>
                                    <div class="col-12 col-md-6"><label for="menu title"> Address (Pashtwo)</label>
                                        <input type="text" id="ps_address" name="ps_address" placeholder="Address" class="form-control">
                                        <small class="form-text text-muted">Write Address here.</small>
                                    </div>
                                </div><hr>
                                <div class="row form-group">
                                    <div class="col-12 col-md-6"><label for="menu title">address (German)</label>
                                        <input type="text" id="en_address" name="en_address" placeholder=" address" class="form-control">
                                        <small class="form-text text-muted">Write  address here.</small>
                                    </div>
                                    <div class="col-12 col-md-6"><label for="menu title">address (English)</label>
                                        <input type="text" id="en_address" name="en_address" placeholder=" address" class="form-control">
                                        <small class="form-text text-muted">Write  address here.</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-12 col-md-4"><label for="menu title">contact phone</label>
                                        <input type="text" id="phone" name="phone1" placeholder="phone" class="form-control">
                                        <small class="form-text text-muted">Write contact first phone here.</small>
                                    </div>
                                    <div class="col-12 col-md-4"><label for="menu title">phone two (Optional)</label>
                                        <input type="text" id="phone" name="phone2" placeholder="phone 2" class="form-control">
                                        <small class="form-text text-muted">Write contact second phone here.</small>
                                    </div>
                                    <div class="col-12 col-md-4"><label for="menu title"> phone three (Optional)</label>
                                        <input type="text" id="phone" name="phone3" placeholder="phone 3" class="form-control">
                                        <small class="form-text text-muted">Write contact third phone here.</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-12 col-md-4"><label for="email">contact email</label>
                                        <input type="email" id="email1" name="email1" placeholder="email" class="form-control">
                                        <small class="form-text text-muted">Write contact first email here.</small>
                                    </div>
                                    <div class="col-12 col-md-4"><label for="menu title">email two (Optional)</label>
                                        <input type="email" id="email2" name="email2" placeholder="email 2" class="form-control">
                                        <small class="form-text text-muted">Write contact second email here.</small>
                                    </div>
                                    <div class="col-12 col-md-4"><label for="menu title"> email three (Optional)</label>
                                        <input type="email" id="email3" name="email3" placeholder="email 3" class="form-control">
                                        <small class="form-text text-muted">Write contact third email here.</small>
                                    </div>
                                </div>
                                </div>
                             </div>
                        <div class="card-footer"><center>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button></center>
                        </div>
                    </form>
                    </div>
                </div>
@endsection
 

