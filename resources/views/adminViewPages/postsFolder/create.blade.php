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
                            <strong>Create posts</strong> Elements
                        </div>
                        <div class="card-body card-block">
                            {{-- <form method="POST" action="admin/posts" enctype="multipart/form-data"> --}}
                            <form method="post" enctype="multipart/form-data" action="{{url('admin/posts')}}">
                                <!-- <form id="submenuForm"> -->
                                @csrf  
                                <div class="row form-group">
                                    <div class="col-3 col-md-3"><label for="category">Select category*</label>
                                        <select name="category" id="category" class="form-control">
                                            <option value="services">Services</option>
                                            <option value="news">News</option>
                                            <option value="events">Events</option>
                                            <option value="announce">Announcements</option>
                                            <option value="donations">Donations</option>
                                            <option value="gallery">Gallery</option>
                                            <option value="banner">Banner</option>
                                            <option value="zakat">Zakat</option>
                                            <option value="aboutus">About us</option>
                                            <option value="faq">FAQ</option>
                                            <option value="library">library</option>
                                            <option value="publish">our publihes</option>
                                            <option value="video">video</option>
                                            <option value="audio">audio</option>
                                        </select><small class="form-text text-muted">Select the Category of Post</small>
                                    </div>
                               
                                    <div class="col-3 col-md-3"><label for="header">Select Header*</label>
                                        <select name="header" id="header" class="form-control">
                                            <option value="no_header">Not a header</option>
                                            <option value="services_header">Services Header</option>
                                            <option value="news_header">News header</option>
                                            <option value="events_header">Events header</option>
                                            <option value="announce_header">announcements Header</option>
                                            <option value="donations_header">Donations header</option>
                                            <option value="gallery_header">Gallery header</option>
                                            <option value="banner_header">Banner header</option>
                                            <option value="zakat_header">zakat header</option>
                                            <option value="aboutus_header">about us header</option>
                                            <option value="faq_header">FAQ header</option>
                                            <option value="library_header">library header</option>
                                            <option value="publish_header">our publihes header</option>
                                            <option value="video_header">video header</option>
                                            <option value="audio_header">audio header</option>
                                        </select><small class="form-text text-muted">Select this Header should be displyed on which Category page</small>
                                    </div>
                                    <div class="col-3 col-md-3"><label for="sub_header">Select sub_Header*</label>
                                        <select name="sub_header" id="sub_header" class="form-control">
                                            <option value="no_sub_header">Not a sub_Header</option>
                                            <option value="top_header">Top header</option>
                                            <option value="Down_header">Down Header</option>
                                           
                                        </select><small class="form-text text-muted">Select where the post gonna be Top header or Down header</small>
                                    </div>
                                    <div class="col-3 col-md-3">
                                        <label for="post_type">Select Status of the post*</label>
                                        <select name="post_type" id="post_type" class="form-control">
                                            <option value="simple_post">simple post</option>
                                            <option value="breackin_news">Breacking news</option>
                                            <option value="upcoming_event">Upcoming Event</option>
                                            <option value="urgent_announce">Urgent Announcement</option>
                                        </select><small class="form-text text-muted">Select the status of post and belongs to which satuations </small>
                                    </div>
                                </div> <hr>
                                <div class="row form-group">
                                    <div class="col-12 col-md-12"><label for="name">Select post Tags,press <b>Ctrl</b> and <b>Click</b> to select multiple tags</label>
                                        <select name="tags[]" id="tags" class="form-control" multiple="multiple">
                                            @foreach ($tags as $tag)
                                            <option style="color: black" value="{{ $tag->id }}">{{ $tag->en_name }}-{{ $tag->fa_name }}</option>
                                            @endforeach
                                            
                                        </select><small class="form-text text-muted">Select Tags </small>
                                    </div>
                                 </div>
                                 <div class="row form-group">
                                    <div class="col-3 col-md-3"><label for="menu title">German title</label>
                                        <input type="text" id="de_title" name="de_title" placeholder="posts title" class="form-control">
                                        <small class="form-text text-muted">Write posts title here.</small>
                                    </div>
                                    <div class="col-3 col-md-3"><label for="menu title">English title</label>
                                        <input type="text" id="en_title" name="en_title" placeholder="posts title" class="form-control">
                                        <small class="form-text text-muted">Write posts title here.</small>
                                    </div>
                                    <div class="col-3 col-md-3"><label for="menu title">(فارسی)موضوع سرخظ</label>
                                        <input  type="text" id="fa_title" name="fa_title" placeholder="موضوع سرخظ" required class="form-control">
                                        <small class="form-text text-muted">Write posts title here.</small>
                                    </div>
                                    <div class="col-3 col-md-3"><label for="menu title">(پشتو)موضوع سرخظ</label>
                                        <input  type="text" id="ps_title" name="ps_title" placeholder="موضوع سرخظ" required class="form-control">
                                        <small class="form-text text-muted">Write posts title here.</small>
                                    </div>
                                </div> <hr>
                                <div class="row form-group">
                                    <div class="col-6 col-md-6"><label for="menu title">German posts Subtitle</label>
                                        <input type="text" id="de_subtitle" name="de_subtitle" placeholder="posts subtitle" class="form-control">
                                        <small class="form-text text-muted">Write posts subname here.</small>
                                    </div>
                              
                                    <div class="col-6 col-md-6"><label for="menu title">Englih posts Subtitle</label>
                                        <input type="text" id="en_subtitle" name="en_subtitle" placeholder="posts subtitle" class="form-control">
                                        <small class="form-text text-muted">Write posts subname here.</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-6 col-md-6"><label for="menu title">(فارسی)موضوع فرعی</label>
                                        <input  type="text" id="fa_subtitle" name="fa_subtitle" placeholder="موضوع فرعی"required class="form-control">
                                        <small class="form-text text-muted">Write posts Sub title here.</small>
                                    </div>
                                
                                    <div class="col-6 col-md-6"><label for="menu title">(پشتو)موضوع فرعی</label>
                                        <input  type="text" id="ps_subtitle" name="ps_subtitle" placeholder="موضوع فرعی"required class="form-control">
                                        <small class="form-text text-muted">Write posts Sub title here.</small>
                                    </div>
                                </div> <hr>
                                <div class="row form-group">
                                    <div class="col-12 col-md-12"><label for="textarea-input" class=" form-control-label">German posts content</label>
                                        <textarea  id="de_description" name="de_description" id="textarea-input" rows="19"   placeholder="posts Content..." class="ckeditor form-control"></textarea>
                                    </div>
                                </div> 
                                <div class="row form-group">
                                    <div class="col-12 col-md-12"><label for="textarea-input" class=" form-control-label">English posts content</label>
                                        <textarea  id="en_description" name="en_description" id="textarea-input" rows="19"   placeholder="posts Content..." class="ckeditor form-control"></textarea>
                                    </div>
                                </div> 
                                <div class="row form-group" >
                                    <div class="col-12 col-md-12"><label for="textarea-input" class=" form-control-label">(فارسی)جزیات در مورد پوست</label>
                                        <textarea   id="fa_description" name="fa_description" id="textarea-input" rows="19"   placeholder="جزیات در مورد پوست" required class="ckeditor form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group" >
                                    <div class="col-12 col-md-12"><label for="textarea-input" class=" form-control-label">(پشتو)جزیات در مورد پوست</label>
                                        <textarea   id="ps_description" name="ps_description" id="textarea-input" rows="19"   placeholder="جزیات در مورد پوست" required class="ckeditor form-control"></textarea>
                                    </div>
                                </div> 
                                <hr>
                                <div class="row form-group">
                                    <div class="col-6 col-md-6"><label for="file-input" class=" form-control-label">posts cover image/ انتخاب عکس</label>
                                        <input type="file" id="image" name="image" class="form-control-file"> <br>
                                                                          
                                    </div>
                                    <div class="col-6 col-md-6"><label for="file-input" class=" form-control-label">posts cover File (optional)/ انتخاب فایل</label>
                                        <input type="file" id="file" name="file" class="form-control-file"><br>
                                    </div>
                                    <div class="col-3 col-md-6"><label for="speaker ">Import Audios or Viedos URL Links from Youtube (optional)</label>
                                        <input type="text" id="youtubeLink" name="youtubeLink" placeholder="youtube URL Link" class="form-control">
                                        <small class="form-text text-muted">Write post speaker here.</small>
                                    </div>
                                    {{-- <div class="col-md-12">
                                        <div class="progress">
                                            <div class="bar"></div >
                                            <div class="percent">0%</div >
                                        </div> 
                                    </div> --}}
                                 </div> <hr>
                                 <div class="row form-group">
                                    <div class="col-3 col-md-3"><label for="speaker ">German posts Speaker/writer (optional)</label>
                                        <input type="text" id="de_speaker" name="de_speaker" placeholder="name" class="form-control">
                                        <small class="form-text text-muted">Write post speaker here.</small>
                                    </div>

                                    <div class="col-3 col-md-3"><label for="speaker ">English posts Speaker/writer (optional)</label>
                                        <input type="text" id="en_speaker" name="en_speaker" placeholder="name" class="form-control">
                                        <small class="form-text text-muted">Write post speaker here.</small>
                                    </div>
                                
                                    <div class="col-3 col-md-3"><label for="speaker ">(فارسی)posts Speaker (optional)نویسینده/گوینده</label>
                                        <input type="text" id="fa_speaker" name="fa_speaker" placeholder="name/اسم" class="form-control">
                                        <small class="form-text text-muted">Write post speaker here.</small>
                                    </div>
                                
                                    <div class="col-3 col-md-3"><label for="speaker ">(پشتو)posts Speaker (optional)نویسینده/گوینده</label>
                                        <input type="text" id="ps_speaker" name="ps_speaker" placeholder="name/اسم" class="form-control">
                                        <small class="form-text text-muted">Write post speaker here.</small>
                                    </div>
                                </div>          <hr>    
                                     <div class="row form-group">
                                        <div class="col-4 col-md-4"><label for="status">Status/فعال یا غیر فعال</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="1">Activate/فعال</option>
                                                <option value="0">Deactivate/غیر فعال</option>
                                            </select><small class="form-text text-muted">Select the status of posts</small>
                                        </div>
                                        <div class="col-4 col-md-4"><label for="menu title">posts Timing (optional)/زمان</label>
                                            <input type="text" id="timing" name="timing" placeholder="09:00 AM - 12:00 PM" class="form-control">
                                            <small class="form-text text-muted">Write posts Timing here.</small>
                                        </div>
                                        <div class="col-4 col-md-4"><label for="menu title">posts date (optional)/ تاریخ</label>
                                            <input type="text" id="date" name="date" placeholder="Des-20-21" class="form-control">
                                            <small class="form-text text-muted">Write posts date here.</small>
                                        </div>
                                    </div> <hr>
                                    <div class="row form-group">
                                        <div class="col-3 col-md-3"><label for="menu location">German posts location (optional)</label>
                                            <input type="text" id="de_location" name="de_location" placeholder="Munchen IZAB-Musjid" class="form-control">
                                            <small class="form-text text-muted">Write posts location here.</small>
                                        </div>
                                        <div class="col-3 col-md-3"><label for="menu location">English posts location (optional)</label>
                                            <input type="text" id="en_location" name="en_location" placeholder="Munchen IZAB-Musjid" class="form-control">
                                            <small class="form-text text-muted">Write posts location here.</small>
                                        </div>
                                        <div class="col-3 col-md-3"><label for="menu location">(فارسی)posts location (optional)/ موقعیت</label>
                                            <input type="text" id="fa_location" name="fa_location" placeholder="Munchen IZAB-Musjid" class="form-control">
                                            <small class="form-text text-muted">Write posts location here.</small>
                                        </div>
                                        <div class="col-3 col-md-3"><label for="menu location">(پشتو)posts location (optional)/ موقعیت</label>
                                            <input type="text" id="ps_location" name="ps_location" placeholder="Munchen IZAB-Musjid" class="form-control">
                                            <small class="form-text text-muted">Write posts location here.</small>
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
 

