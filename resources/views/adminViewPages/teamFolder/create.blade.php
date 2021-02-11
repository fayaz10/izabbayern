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
                            <strong>Create team</strong> Elements
                        </div>
                        <div class="card-body card-block">
                            <form id="submenuForm" method="post" enctype="multipart/form-data" action="{{url('admin/team')}}">
                                <!-- <form id="submenuForm"> -->
                                @csrf
                                <div class="row form-group">
                                    <div class="col-4 col-md-6"><label for="category">Category</label>
                                        <select name="category" id="category" class="form-control">
                                            <option value="team">Team</option>
                                            <option value="teacher">Teacher</option>
                                        </select><small class="form-text text-muted">Select the status of team</small>
                                    </div>
                                    <div class="col-4 col-md-6"><label for="header">Header</label>
                                        <select name="header" id="header" class="form-control">
                                            <option value="no_header">Not a header</option>
                                            <option value="team_header">Team header</option>
                                            <option value="teacher_header">Teacher header</option>
                                        </select><small class="form-text text-muted">Select the status of team</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-12 col-md-3"><label for="menu name">(فارسی)اسم</label>
                                        <input type="text" id="fa_name" name="fa_name" placeholder="اسم" class="form-control">
                                        <small class="form-text text-muted">اسم شخص را اینجا بنویسید</small>
                                    </div>
                                    <div class="col-12 col-md-3"><label for="menu name">(پشتو)اسم</label>
                                        <input type="text" id="ps_name" name="ps_name" placeholder="اسم" class="form-control">
                                        <small class="form-text text-muted">اسم شخص را اینجا بنویسید</small>
                                    </div>
                                    <div class="col-12 col-md-3"><label for="menu name"> name German</label>
                                        <input type="text" id="de_name" name="de_name" placeholder="de_name" class="form-control">
                                        <small class="form-text text-muted">Write team name here.</small>
                                    </div>
                                    <div class="col-12 col-md-3"><label for="menu name"> name English</label>
                                        <input type="text" id="en_name" name="en_name" placeholder="en_name" class="form-control">
                                        <small class="form-text text-muted">Write team name here.</small>
                                    </div>
                                </div><hr>
                                <div class="row form-group">
                                    <div class="col-12 col-md-3"><label for="menu title">(فارسی)وظیفه</label>
                                        <input type="text" id="fa_subname" name="fa_subname" placeholder="وظیفه" class="form-control">
                                        <small class="form-text text-muted">وظیفه شخص را بنویسید</small>
                                    </div>
                                    <div class="col-12 col-md-3"><label for="menu title">(پشتو)وظیفه</label>
                                        <input type="text" id="ps_subname" name="ps_subname" placeholder="وظیفه" class="form-control">
                                        <small class="form-text text-muted">وظیفه شخص را بنویسید</small>
                                    </div>
                                    <div class="col-12 col-md-3"><label for="menu title">position/Job (German)</label>
                                        <input type="text" id="de_subname" name="de_subname" placeholder="posation or job" class="form-control">
                                        <small class="form-text text-muted">Write team posation or job  here.</small>
                                    </div>
                                    <div class="col-12 col-md-3"><label for="menu title">position/Job (English)</label>
                                        <input type="text" id="en_subname" name="en_subname" placeholder="posation or job" class="form-control">
                                        <small class="form-text text-muted">Write team posation or job  here.</small>
                                    </div>
                                 </div>
                                  <hr>
                                 <div class="row form-group">
                                     
                            
                                    <div class="col-12 col-md-12"><label for="textarea-input" class=" form-control-label">(فارسی)جزیات در مورد شخص</label>
                                        <textarea  id="fa_description" name="fa_description" id="textarea-input" rows="19"   placeholder="جزیات در مورد شخص" class="ckeditor form-control"></textarea>
                                    </div>
                                    <div class="col-12 col-md-12"><label for="textarea-input" class=" form-control-label">(پشتو)جزیات در مورد شخص</label>
                                        <textarea  id="ps_description" name="ps_description" id="textarea-input" rows="19"   placeholder="جزیات در مورد شخص" class="ckeditor form-control"></textarea>
                                    </div>
                                    <div class="col-12 col-md-12"><label for="textarea-input" class=" form-control-label">details (German)</label>
                                        <textarea  id="de_description" name="de_description" id="textarea-input" rows="19"   placeholder=" Content..." class="ckeditor form-control"></textarea>
                                    </div>
                                    <div class="col-12 col-md-12"><label for="textarea-input" class=" form-control-label"> Details (English)</label>
                                        <textarea  id="en_description" name="en_description" id="textarea-input" rows="19"   placeholder=" Content..." class="ckeditor form-control"></textarea>
                                    </div>
                                 </div> <hr>
                                 <div class="row form-group">
                                    <div class="col-12 col-md-3"><label for="menu title"> phone</label>
                                        <input type="text" id="phone" name="phone" placeholder=" phone" class="form-control">
                                        <small class="form-text text-muted">Write team phone here.</small>
                                    </div>
                        
                                    <div class="col-12 col-md-3"><label for="menu title"> email</label>
                                        <input type="text" id="email" name="email" placeholder=" email" class="form-control">
                                        <small class="form-text text-muted">Write team email here.</small>
                                    </div>
                                    <div class="col-12 col-md-3"><label for="menu title"> facebook Link </label>
                                        <input type="text" id="facebook" name="facebook" placeholder="https\\..." class="form-control">
                                        <small class="form-text text-muted">Write team facebook here.</small>
                                    </div>
                                    <div class="col-12 col-md-3"><label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1">Enable</option>
                                            <option value="0">Disable</option>
                                        </select><small class="form-text text-muted">Select the status of team</small>
                                    </div>
                                </div><hr>
                                    <div class="row form-group">
                                        <div class="col-12 col-md-12"><label for="file-input" class=" form-control-label">team  image</label>
                                            <input type="file" id="image" name="image" class="form-control-file">
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
 

