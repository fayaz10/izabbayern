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
                                        <div class="bg-overlay bg-overlay--blue">
                                           <a href="/admin/team"> <button class="btn btn-danger">Back</button></a>
                                        </div>

                                        <h3><center>Update Team memeber here</center></h3>
                                    </div>
                                        <div class="card">
                                            <div class="card-body card-block">
                                                <form action="{{url('admin/team',$team->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                              @csrf
                                              <div class="row form-group">
                                                <div class="col-12 col-md-6"><label for="header">Header</label>
                                                    <select name="header" id="header" value="{{$team->header}}" class="form-control">
                                                       
                                                     @switch($team->header)
                                                         @case('no_header')
                                                         <option value="no_header" selected >Not a header</option>
                                                         <option value="teacher_header"  >Teacher header</option>
                                                         <option value="team_header" >Team header</option>
                                                             @break
                                                         @case('teacher_header')
                                                         <option value="no_header" >Not a header</option>
                                                         <option value="teacher_header" selected >Teacher header</option>
                                                         <option value="team_header" >Team header</option>
                                                             @break
                                                         @default
                                                         <option value="no_header" >Not a header</option>
                                                         <option value="teacher_header"  >Teacher header</option>
                                                         <option value="team_header" selected >Team header</option>
                                                     @endswitch
                                                </select><small class="form-text text-muted">Select the top header page</small>
                                                </div>
                                                 <div class="col-12 col-md-6"><label for="status">category</label>
                                                    <select name="category" id="category" value="{{$team->category}}" class="form-control">
                                                        @if($team->header == 'teacher')
                                                        <option value="teacher" selected >Teacher </option>
                                                        <option value="team" >Team </option>
                                                        @else
                                                        <option value="teacher" >Teacher </option>
                                                        <option value="team" selected >team </option>
                                                        @endif
                                                </select><small class="form-text text-muted">Select the top header page</small>
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col-12 col-md-3"><label for="menu name">(فارسی)اسم</label>
                                                    <input type="text" id="fa_name" name="fa_name" value="{{$team->fa_name}}" placeholder="اسم" class="form-control">
                                                    <small class="form-text text-muted">اسم شخص را اینجا بنویسید</small>
                                                </div>
                                                <div class="col-12 col-md-3"><label for="menu name">(پشتو)اسم</label>
                                                    <input type="text" id="ps_name" name="ps_name" value="{{$team->ps_name}}" placeholder="اسم" class="form-control">
                                                    <small class="form-text text-muted">اسم شخص را اینجا بنویسید</small>
                                                </div>
                                                <div class="col-12 col-md-3"><label for="menu name">team Name(German)</label>
                                                    <input type="text" id="de_name" name="de_name" value="{{$team->de_name}}" placeholder="name" class="form-control">
                                                    <small class="form-text text-muted">edit team name here.</small>
                                                </div>
                                                <div class="col-12 col-md-3"><label for="menu name">team Name(English)</label>
                                                    <input type="text" id="en_name" name="en_name" value="{{$team->en_name}}" placeholder="name" class="form-control">
                                                    <small class="form-text text-muted">edit team name here.</small>
                                                </div>
                                            </div> <hr>
                                               <div class="row form-group">
                                                <div class="col-12 col-md-3"><label for="menu title">(فارسی)وظیفه</label>
                                                    <input type="text" id="fa_subname"value="{{$team->fa_subname}}" name="fa_subname" placeholder="وظیفه" class="form-control">
                                                    <small class="form-text text-muted">وظیفه شخص را بنویسید</small>
                                                </div>
                                                <div class="col-12 col-md-3"><label for="menu title">(پشتو)وظیفه</label>
                                                    <input type="text" id="ps_subname"value="{{$team->ps_subname}}" name="ps_subname" placeholder="وظیفه" class="form-control">
                                                    <small class="form-text text-muted">وظیفه شخص را بنویسید</small>
                                                </div>
                                                <div class="col-12 col-md-3"><label for="menu name">posiation (German)</label>
                                                    <input type="text" id="de_subname" name="de_subname" value="{{$team->de_name}}" placeholder="Dr,Eng,scholar..." class="form-control">
                                                    <small class="form-text text-muted">edit team Subname here.</small>
                                                </div>
                                                <div class="col-12 col-md-3"><label for="menu name">posiation (English)</label>
                                                    <input type="text" id="en_subname" name="en_subname" value="{{$team->en_name}}" placeholder="Dr,Eng,scholar..." class="form-control">
                                                    <small class="form-text text-muted">edit team Subname here.</small>
                                                </div>
                                             </div> <hr>
                                             <div class="row form-group">
                                                <div class="col-12 col-md-12"><label for="textarea-input" class=" form-control-label">(فارسی)جزیات در مورد شخص</label>
                                                    <textarea  id="fa_description" name="fa_description" id="textarea-input" rows="19"   placeholder="جزیات در مورد شخص" class="ckeditor form-control">{{$team->fa_description}}</textarea>
                                                </div>
                                                <div class="col-12 col-md-12"><label for="textarea-input" class=" form-control-label">(پشتو)جزیات در مورد شخص</label>
                                                    <textarea  id="ps_description" name="ps_description" id="textarea-input" rows="19"   placeholder="جزیات در مورد شخص" class="ckeditor form-control">{{$team->ps_description}}</textarea>
                                                </div>
                                                <div class="col-12 col-md-12"><label for="Link">Details (German)</label>
                                                    <textarea  id="de_description" name="de_description" id="textarea-input" rows="19"   placeholder="team Content..." class="ckeditor form-control">{{$team->de_description}}</textarea>
                                                    <small class="form-text text-muted">edit the team content here.</small>
                                                </div>
                                                <div class="col-12 col-md-12"><label for="Link">Details (English)</label>
                                                    <textarea  id="en_description" name="en_description" id="textarea-input" rows="19"   placeholder="team Content..." class="ckeditor form-control">{{$team->en_description}}</textarea>
                                                    <small class="form-text text-muted">edit the team content here.</small>
                                                </div>
                                           </div>
                                           
                                            <div class="row form-group">
                                                <div class="col-12 col-md-3"><label for="menu email">team email</label>
                                                    <input type="text" id="email" name="email" value="{{$team->email}}" placeholder="Email" class="form-control">
                                                    <small class="form-text text-muted">edit team email here.</small>
                                                </div>
                                                       <div class="col-12 col-md-3"><label for="menu phone">team phone</label>
                                                    <input type="text" id="phone" name="phone" value="{{$team->phone}}" placeholder="phone" class="form-control">
                                                    <small class="form-text text-muted">edit team phone here.</small>
                                                </div>
                                                <div class="col-12 col-md-3"><label for="menu facebook">team facebook</label>
                                                    <input type="text" id="facebook" name="facebook" value="{{$team->facebook}}" placeholder="facebook" class="form-control">
                                                    <small class="form-text text-muted">edit team facebook here.</small>
                                                </div>
                                                <div class="col-12 col-md-3"><label for="status">Status</label>
                                                    <select name="status" id="status" value="{{$team->status}}" class="form-control">
                                                        @if($team->status == 1)
                                                        <option value="1" selected style="color: green">Active</option>
                                                        <option value="0" style="color: red">Diactivate</option>
                                                        @else
                                                        <option value="1" style="color: green">Active</option>
                                                        <option value="0" selected style="color: red">Diactive</option>
                                                        @endif
                                                </select><small class="form-text text-muted">Select the status of menu</small>
                                                </div>
                                            </div> <hr>
                                           <div class="row form-group">
                                                <div class="col-6 col-md-6"><label for="Link">Image</label>
                                                    <input type="file" name="image" value="{{$team->image}}">
                                                    <small class="form-text text-muted">pick up new team  image.</small>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                   <img class="card-img-top" src="../../../storage/MP4_MP3_PDF_Image_files/{{$team->image}}" style="height:100px;width: auto"alt="{{$team->title}}">
                                                    <small class="form-text text-muted">Current team  image here.</small>
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
