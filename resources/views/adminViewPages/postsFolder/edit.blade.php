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
                                        <h3><center>Update posts here</center><a href="/admin/posts/{{$posts->id}}"><button type="button" class="btn btn-danger">Go Back</button></a></h3>
                                    </div>
                                        <div class="card">
                                            <div class="card-body card-block">
                                                <form action="{{url('admin/posts',$posts->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                              @csrf
                                              <div class="row form-group">
                                                <div class="col-3 col-md-3"><label for="category">Select category*</label>
                                                    <select name="category" id="category" class="form-control">
                                                     @switch($posts->category)
                                                            @case('services')
                                                            <option selected value="services">Services</option>
                                                            <option value="news">News</option>
                                                            <option value="events">Events</option>
                                                            <option value="announce">announcements</option>
                                                            <option value="donations">Donations</option>
                                                            <option  value="banner">Banner</option>
                                                            <option value="gallery">Gallery</option>
                                                            <option value="zakat">Zakat</option>
                                                            <option value="aboutus">About us</option>
                                                            <option  value="video">video</option>
                                                            <option  value="audio">audio</option>
                                                            <option  value="library">library</option>
                                                            <option  value="publish">our publishes</option>
                                                            @break
                                                            @case('video')
                                                            <option  value="services">Services</option>
                                                            <option value="news">News</option>
                                                            <option value="events">Events</option>
                                                            <option value="announce">announcements</option>
                                                            <option value="donations">Donations</option>
                                                            <option  value="banner">Banner</option>
                                                            <option value="gallery">Gallery</option>
                                                            <option value="zakat">Zakat</option>
                                                            <option value="aboutus">About us</option>
                                                            <option  value="faq">FAQ</option>
                                                            <option  selected value="video">video</option>
                                                            <option  value="audio">audio</option>
                                                            <option  value="library">library</option>
                                                            <option  value="publish">our publishes</option>
                                                            @break
                                                            @case('audio')
                                                            <option  value="services">Services</option>
                                                            <option value="news">News</option>
                                                            <option value="events">Events</option>
                                                            <option value="announce">announcements</option>
                                                            <option value="donations">Donations</option>
                                                            <option  value="banner">Banner</option>
                                                            <option value="gallery">Gallery</option>
                                                            <option value="zakat">Zakat</option>
                                                            <option value="aboutus">About us</option>
                                                            <option  value="faq">FAQ</option>
                                                            <option  value="video">video</option>
                                                            <option selected value="audio">audio</option>
                                                            <option  value="library">library</option>
                                                            <option  value="publish">our publishes</option>
                                                            @break
                                                            @case('library')
                                                            <option  value="services">Services</option>
                                                            <option value="news">News</option>
                                                            <option value="events">Events</option>
                                                            <option value="announce">announcements</option>
                                                            <option value="donations">Donations</option>
                                                            <option  value="banner">Banner</option>
                                                            <option value="gallery">Gallery</option>
                                                            <option value="zakat">Zakat</option>
                                                            <option value="aboutus">About us</option>
                                                            <option  value="faq">FAQ</option>
                                                            <option  value="video">video</option>
                                                            <option  value="audio">audio</option>
                                                            <option selected value="library">library</option>
                                                            <option  value="publish">our publishes</option>
                                                            @break
                                                            @case('publish')
                                                            <option value="services">Services</option>
                                                            <option value="news">News</option>
                                                            <option value="events">Events</option>
                                                            <option value="announce">announcements</option>
                                                            <option value="donations">Donations</option>
                                                            <option  value="banner">Banner</option>
                                                            <option value="gallery">Gallery</option>
                                                            <option value="zakat">Zakat</option>
                                                            <option value="aboutus">About us</option>
                                                            <option  value="faq">FAQ</option>
                                                            <option  value="video">video</option>
                                                            <option  value="audio">audio</option>
                                                            <option  value="library">library</option>
                                                            <option selected value="publish">our publishes</option>
                                                            @break
                                                             @case('banner')
                                                             <option  value="services">Services</option>
                                                             <option  value="news">News</option>
                                                             <option value="events">Events</option>
                                                             <option value="announce">announcements</option>
                                                             <option value="donations">Donations</option>
                                                             <option selected value="banner">Banner</option>
                                                             <option value="gallery">Gallery</option>
                                                             <option value="zakat">Zakat</option>
                                                             <option value="aboutus">About us</option>
                                                             <option  value="faq">FAQ</option>
                                                             <option  value="video">video</option>
                                                             <option  value="audio">audio</option>
                                                             <option  value="library">library</option>
                                                             <option  value="publish">our publishes</option>
                                                             @break
                                                             @case('aboutus')
                                                             <option  value="services">Services</option>
                                                             <option  value="news">News</option>
                                                             <option value="events">Events</option>
                                                             <option value="announce">announcements</option>
                                                             <option value="donations">Donations</option>
                                                             <option  value="banner">Banner</option>
                                                             <option value="gallery">Gallery</option>
                                                             <option value="zakat">Zakat</option>
                                                             <option selected value="aboutus">About us</option>
                                                             <option  value="faq">FAQ</option>
                                                             <option  value="video">video</option>
                                                             <option  value="audio">audio</option>
                                                             <option  value="library">library</option>
                                                             <option  value="publish">our publishes</option>
                                                             @break
                                                             @case('zakat')
                                                             <option  value="services">Services</option>
                                                             <option  value="news">News</option>
                                                             <option value="events">Events</option>
                                                             <option value="announce">announcements</option>
                                                             <option value="donations">Donations</option>
                                                             <option  value="banner">Banner</option>
                                                             <option value="gallery">Gallery</option>
                                                             <option selected value="zakat">Zakat</option>
                                                             <option value="aboutus">About us</option>
                                                             <option  value="faq">FAQ</option>
                                                             <option  value="video">video</option>
                                                             <option  value="audio">audio</option>
                                                             <option  value="library">library</option>
                                                             <option  value="publish">our publishes</option>
                                                             @break
                                                             @case('gallery')
                                                             <option  value="services">Services</option>
                                                             <option  value="news">News</option>
                                                             <option value="events">Events</option>
                                                             <option value="announce">announcements</option>
                                                             <option selected value="gallery">Gallery</option>
                                                             <option value="banner">Banner</option>
                                                             <option value="donations">Donations</option>
                                                             <option value="zakat">Zakat</option>
                                                             <option value="aboutus">About us</option>
                                                             <option  value="faq">FAQ</option>
                                                             <option  value="video">video</option>
                                                             <option  value="audio">audio</option>
                                                             <option  value="library">library</option>
                                                             <option  value="publish">our publishes</option>
                                                             @break
                                                             @case('news')
                                                             <option  value="services">Services</option>
                                                             <option selected value="news">News</option>
                                                             <option value="events">Events</option>
                                                             <option value="announce">announcements</option>
                                                             <option value="donations">Donations</option>
                                                             <option  value="banner">Banner</option>
                                                             <option value="gallery">Gallery</option>
                                                             <option value="zakat">Zakat</option>
                                                             <option value="aboutus">About us</option>
                                                             <option  value="faq">FAQ</option>
                                                             <option  value="video">video</option>
                                                             <option  value="audio">audio</option>
                                                             <option  value="library">library</option>
                                                             <option  value="publish">our publishes</option>
                                                             @break
                                                             @case('events')
                                                             <option  value="services">Services</option>
                                                             <option  value="news">News</option>
                                                             <option selected value="events">Events</option>
                                                             <option value="announce">announcements</option>
                                                             <option value="donations">Donations</option>
                                                             <option  value="banner">Banner</option>
                                                             <option value="gallery">Gallery</option>
                                                             <option value="zakat">Zakat</option>
                                                             <option value="aboutus">About us</option>
                                                             <option  value="faq">FAQ</option>
                                                             <option  value="video">video</option>
                                                             <option  value="audio">audio</option>
                                                             <option  value="library">library</option>
                                                             <option  value="publish">our publishes</option>
                                                             @break
                                                             @case('announce')
                                                             <option  value="services">Services</option>
                                                             <option  value="news">News</option>
                                                             <option  value="events">Events</option>
                                                             <option selected value="announce">announcements</option>
                                                             <option value="donations">Donations</option>
                                                             <option  value="banner">Banner</option>
                                                             <option value="gallery">Gallery</option>
                                                             <option value="zakat">Zakat</option>
                                                             <option value="aboutus">About us</option>
                                                             <option  value="faq">FAQ</option>
                                                             <option  value="video">video</option>
                                                             <option  value="audio">audio</option>
                                                             <option  value="library">library</option>
                                                             <option  value="publish">our publishes</option>
                                                             @break
                                                             @case('faq')
                                                             <option  value="services">Services</option>
                                                             <option  value="news">News</option>
                                                             <option  value="events">Events</option>
                                                             <option  value="announce">announcements</option>
                                                             <option value="donations">Donations</option>
                                                             <option  value="banner">Banner</option>
                                                             <option value="gallery">Gallery</option>
                                                             <option value="zakat">Zakat</option>
                                                             <option value="aboutus">About us</option>
                                                             <option selected value="faq">FAQ</option>
                                                             <option  value="video">video</option>
                                                             <option  value="audio">audio</option>
                                                             <option  value="library">library</option>
                                                             <option  value="publish">our publishes</option>
                                                             @break
                                                             @default
                                                             <option  value="services">Services</option>
                                                             <option  value="news">News</option>
                                                             <option  value="events">Events</option>
                                                             <option  value="announce">announcements</option>
                                                             <option selected value="donations">Donations</option>
                                                             <option  value="banner">Banner</option>
                                                             <option value="gallery">Gallery</option>
                                                             <option value="zakat">Zakat</option>
                                                             <option value="aboutus">About us</option>
                                                             <option  value="faq">FAQ</option>
                                                             <option  value="video">video</option>
                                                             <option  value="audio">audio</option>
                                                             <option  value="library">library</option>
                                                             <option  value="publish">our publishes</option>
                                                     @endswitch
                                                    </select><small class="form-text text-muted">Select the Category of Post</small>
                                                   </div>
                                                 <div class="col-3 col-md-3">
                                                    <label for="header">Select Header*</label>
                                                    <select name="header" id="header" class="form-control">
                                                     @switch($posts->header)
                                                            @case('no_header')
                                                            <option selected value="no_header">Not a header</option>
                                                            <option value="services_header">Services Header</option>
                                                            <option value="news_header">News header</option>
                                                            <option value="events_header">Events header</option>
                                                            <option value="announce_header">announcements Header</option>
                                                            <option value="donations_header">Donations header</option>
                                                            <option  value="banner_header">Banner Header</option>
                                                            <option  value="gallery_header">Gallery header</option>
                                                            <option  value="zakat_header">Zakat header</option>
                                                            <option  value="faq_header">FAQ header</option>
                                                            @break
                                                            @case('video_header')
                                                            <option value="services_header">Services header</option>
                                                            <option value="news_header">News header</option>
                                                            <option value="events_header">Events header</option>
                                                            <option value="announce_header">announcements header</option>
                                                            <option value="donations_header">Donations header</option>
                                                            <option  value="banner_header">Banner header</option>
                                                            <option value="gallery_header">Gallery header</option>
                                                            <option value="zakat_header">Zakat header</option>
                                                            <option value="aboutus_header">About us header</option>
                                                            <option  value="faq_header">FAQ header</option>
                                                            <option selected value="video_header">video header</option>
                                                            <option  value="audio_header">audio header</option>
                                                            <option  value="library_header">library header</option>
                                                            <option  value="publish_header">our publishes header</option>
                                                            @break
                                                            @case('audio_header')
                                                            <option value="services_header">Services header</option>
                                                            <option value="news_header">News header</option>
                                                            <option value="events_header">Events header</option>
                                                            <option value="announce_header">announcements header</option>
                                                            <option value="donations_header">Donations header</option>
                                                            <option  value="banner_header">Banner header</option>
                                                            <option value="gallery_header">Gallery header</option>
                                                            <option value="zakat_header">Zakat header</option>
                                                            <option value="aboutus_header">About us header</option>
                                                            <option  value="faq_header">FAQ header</option>
                                                            <option  value="video_header">video header</option>
                                                            <option selected value="audio_header">audio header</option>
                                                            <option  value="library_header">library header</option>
                                                            <option  value="publish_header">our publishes header</option>
                                                            @break
                                                            @case('library_header')
                                                            <option value="services_header">Services header</option>
                                                            <option value="news_header">News header</option>
                                                            <option value="events_header">Events header</option>
                                                            <option value="announce_header">announcements header</option>
                                                            <option value="donations_header">Donations header</option>
                                                            <option  value="banner_header">Banner header</option>
                                                            <option value="gallery_header">Gallery header</option>
                                                            <option value="zakat_header">Zakat header</option>
                                                            <option value="aboutus_header">About us header</option>
                                                            <option  value="faq_header">FAQ header</option>
                                                            <option  value="video_header">video header</option>
                                                            <option  value="audio_header">audio header</option>
                                                            <option selected value="library_header">library header</option>
                                                            <option  value="publish_header">our publishes header</option>
                                                            @break
                                                            @case('publish_header')
                                                            <option value="services_header">Services header</option>
                                                            <option value="news_header">News header</option>
                                                            <option value="events_header">Events header</option>
                                                            <option value="announce_header">announcements header</option>
                                                            <option value="donations_header">Donations header</option>
                                                            <option  value="banner_header">Banner header</option>
                                                            <option value="gallery_header">Gallery header</option>
                                                            <option value="zakat_header">Zakat header</option>
                                                            <option value="aboutus_header">About us header</option>
                                                            <option  value="faq_header">FAQ header</option>
                                                            <option  value="video_header">video header</option>
                                                            <option  value="audio_header">audio header</option>
                                                            <option  value="library_header">library header</option>
                                                            <option selected value="publish_header">our publishes header</option>
                                                            @break
                                                            @case('zakat_header')
                                                            <option  value="no_header">Not a header</option>
                                                            <option value="services_header">Services Header</option>
                                                            <option value="news_header">News header</option>
                                                            <option value="events_header">Events header</option>
                                                            <option value="announce_header">announcements Header</option>
                                                            <option value="donations_header">Donations header</option>
                                                            <option  value="banner_header">Banner Header</option>
                                                            <option  value="gallery_header">Gallery header</option>
                                                            <option selected value="zakat_header">Zakat header</option>
                                                            <option  value="faq_header">FAQ header</option>
                                                            <option  value="video_header">video header</option>
                                                            <option  value="audio_header">audio header</option>
                                                            <option  value="library_header">library header</option>
                                                            <option  value="publish_header">our publishes header</option>
                                                             @break
                                                             @case('aboutus_header')
                                                             <option  value="no_header">Not a header</option>
                                                             <option value="services_header">Services Header</option>
                                                             <option value="news_header">News header</option>
                                                             <option value="events_header">Events header</option>
                                                             <option value="announce_header">announcements Header</option>
                                                             <option value="donations_header">Donations header</option>
                                                             <option  value="banner_header">Banner Header</option>
                                                             <option  value="gallery_header">Gallery header</option>
                                                             <option  value="zakat_header">Zakat header</option>
                                                             <option selected value="aboutus_header">About us header</option>
                                                             <option  value="faq_header">FAQ header</option>
                                                             <option  value="video_header">video header</option>
                                                             <option  value="audio_header">audio header</option>
                                                             <option  value="library_header">library header</option>
                                                             <option  value="publish_header">our publishes header</option>
                                                              @break
                                                             @case('services_header')
                                                             <option  value="no_header">Not a header</option>
                                                             <option selected value="services_header">Services Header</option>
                                                             <option value="news_header">News header</option>
                                                             <option value="events_header">Events header</option>
                                                             <option value="announce_header">announcements Header</option>
                                                             <option value="donations_header">Donations header</option>
                                                             <option  value="banner_header">Banner Header</option>
                                                             <option  value="gallery_header">Gallery header</option>
                                                             <option  value="zakat_header">Zakat header</option>
                                                             <option  value="aboutus_header">About us header</option>
                                                             <option  value="faq_header">FAQ header</option>
                                                             <option  value="video_header">video header</option>
                                                             <option  value="audio_header">audio header</option>
                                                             <option  value="library_header">library header</option>
                                                             <option  value="publish_header">our publishes header</option>
                                                             @break
                                                             @case('banner_header')
                                                             <option  value="no_header">Not a header</option>
                                                             <option  value="services_header">Services Header</option>
                                                             <option value="news_header">News header</option>
                                                             <option value="events_header">Events header</option>
                                                             <option value="announce_header">announcements Header</option>
                                                             <option value="donations_header">Donations header</option>
                                                             <option selected value="banner_header">Banner Header</option>
                                                             <option value="gallery_header">Gallery header</option>
                                                             <option  value="zakat_header">Zakat header</option>
                                                             <option  value="aboutus_header">About us header</option>
                                                             <option  value="faq_header">FAQ header</option>
                                                             <option  value="video_header">video header</option>
                                                             <option  value="audio_header">audio header</option>
                                                             <option  value="library_header">library header</option>
                                                             <option  value="publish_header">our publishes header</option>
                                                             @break
                                                             @case('gallery_header')
                                                             <option  value="no_header">Not a header</option>
                                                             <option  value="services_header">Services Header</option>
                                                             <option value="news_header">News header</option>
                                                             <option value="events_header">Events header</option>
                                                             <option value="announce_header">announcements Header</option>
                                                             <option value="donations_header">Donations header</option>
                                                             <option  value="banner_header">Banner Header</option>
                                                             <option selected value="gallery_header">Gallery header</option>
                                                             <option  value="zakat_header">Zakat header</option>
                                                             <option  value="aboutus_header">About us header</option>
                                                             <option  value="faq_header">FAQ header</option>
                                                             <option  value="video_header">video header</option>
                                                             <option  value="audio_header">audio header</option>
                                                             <option  value="library_header">library header</option>
                                                             <option  value="publish_header">our publishes header</option>
                                                             @break
                                                             @case('news_header')
                                                             <option  value="no_header">Not a header</option>
                                                             <option value="services_header">Services Header</option>
                                                             <option selected value="news_header">News header</option>
                                                             <option value="events_header">Events header</option>
                                                             <option value="announce_header">announcements Header</option>
                                                             <option value="donations_header">Donations header</option>
                                                             <option  value="banner_header">Banner Header</option>
                                                             <option  value="gallery_header">Gallery header</option>
                                                             <option  value="zakat_header">Zakat header</option>
                                                             <option  value="aboutus_header">About us header</option>
                                                             <option  value="faq_header">FAQ header</option>
                                                             <option  value="video_header">video header</option>
                                                             <option  value="audio_header">audio header</option>
                                                             <option  value="library_header">library header</option>
                                                             <option  value="publish_header">our publishes header</option>
                                                             @break
                                                             @case('events_header')
                                                             <option  value="no_header">Not a header</option>
                                                             <option value="services_header">Services Header</option>
                                                             <option value="news_header">News header</option>
                                                             <option selected value="events_header">Events header</option>
                                                             <option value="announce_header">announcements Header</option>
                                                             <option value="donations_header">Donations header</option>
                                                             <option  value="banner_header">Banner Header</option>
                                                             <option  value="gallery_header">Gallery header</option>
                                                             <option  value="zakat_header">Zakat header</option>
                                                             <option  value="aboutus_header">About us header</option>
                                                             <option  value="faq_header">FAQ header</option>
                                                             <option  value="video_header">video header</option>
                                                             <option  value="audio_header">audio header</option>
                                                             <option  value="library_header">library header</option>
                                                             <option  value="publish_header">our publishes header</option>
                                                             @break
                                                             @case('announce_header')
                                                             <option  value="no_header">Not a header</option>
                                                             <option value="services_header">Services Header</option>
                                                             <option value="news_header">News header</option>
                                                             <option value="events_header">Events header</option>
                                                             <option selected value="announce_header">announcements Header</option>
                                                             <option value="donations_header">Donations header</option>
                                                             <option  value="banner_header">Banner Header</option>
                                                             <option  value="gallery_header">Gallery header</option>
                                                             <option  value="zakat_header">Zakat header</option>
                                                             <option  value="aboutus_header">About us header</option>
                                                             <option  value="faq_header">FAQ header</option>
                                                             <option  value="video_header">video header</option>
                                                             <option  value="audio_header">audio header</option>
                                                             <option  value="library_header">library header</option>
                                                             <option  value="publish_header">our publishes header</option>
                                                             @break
                                                             @case('faq_header')
                                                             <option  value="no_header">Not a header</option>
                                                             <option value="services_header">Services Header</option>
                                                             <option value="news_header">News header</option>
                                                             <option value="events_header">Events header</option>
                                                             <option  value="announce_header">announcements Header</option>
                                                             <option value="donations_header">Donations header</option>
                                                             <option  value="banner_header">Banner Header</option>
                                                             <option  value="gallery_header">Gallery header</option>
                                                             <option  value="zakat_header">Zakat header</option>
                                                             <option  value="aboutus_header">About us header</option>
                                                             <option selected value="faq_header">FAQ header</option>
                                                             <option  value="video_header">video header</option>
                                                             <option  value="audio_header">audio header</option>
                                                             <option  value="library_header">library header</option>
                                                             <option  value="publish_header">our publishes header</option>
                                                             @break
                                                             @default
                                                             <option  value="no_header">Not a header</option>
                                                             <option value="services_header">Services Header</option>
                                                             <option value="news_header">News header</option>
                                                             <option value="events_header">Events header</option>
                                                             <option  value="announce_header">announcements Header</option>
                                                             <option selected value="donations_header">Donations header</option>
                                                             <option  value="banner_header">Banner Header</option>
                                                             <option  value="gallery_header">Gallery header</option>
                                                             <option  value="zakat_header">Zakat header</option>
                                                             <option selected value="aboutus_header">About us header</option>
                                                             <option  value="video_header">video header</option>
                                                             <option  value="audio_header">audio header</option>
                                                             <option  value="library_header">library header</option>
                                                             <option  value="publish_header">our publishes header</option>
                                                     @endswitch
                                                    </select><small class="form-text text-muted">Select this Header should be displyed on which Category page</small>
                                                </div>
                                                <div class="col-3 col-md-3"><label for="sub_Header">Select sub_Header*</label>
                                                    <select name="sub_header" id="sub_header" class="form-control">
                                                      @switch($posts->sub_header)
                                                          @case('no_header')
                                                          <option selected value="no_header">Not a sub_Header</option>
                                                          <option value="top_header">Top header</option>
                                                          <option value="Down_header">Down Header</option>
                                                              @break
                                                          @case('top_header')
                                                          <option value="no_header">Not a sub_Header</option>
                                                          <option selected value="top_header">Top header</option>
                                                          <option value="Down_header">Down Header</option>
                                                              @break
                                                          @default
                                                          <option value="no_header">Not a sub_Header</option>
                                                          <option value="top_header">Top header</option>
                                                          <option selected value="Down_header">Down Header</option>
                                                      @endswitch                                                       
                                                    </select><small class="form-text text-muted">Select where the post gonna be Top header or Down header</small>
                                                </div>
                                            
                                                <div class="col-3 col-md-3">
                                                    <label for="post_type">Select Status of the post*</label>
                                                    <select name="post_type" id="post_type" class="form-control">
                                                     @switch($posts->post_type)
                                                         @case('simple_post')
                                                         <option selected value="simple_post">simple post</option>
                                                         <option value="breackin_news">Breacking news</option>
                                                         <option value="upcoming_event">Upcoming Event</option>
                                                         <option value="urgent_announce">Urgent Announcement</option>
                                                        @break
                                                        @case('breackin_news')
                                                        <option  value="simple_post">simple post</option>
                                                        <option selected value="breackin_news">Breacking news</option>
                                                        <option value="upcoming_event">Upcoming Event</option>
                                                        <option value="urgent_announce">Urgent Announcement</option>
                                                            @break
                                                            @case('upcoming_event')
                                                            <option  value="simple_post">simple post</option>
                                                            <option value="breackin_news">Breacking news</option>
                                                            <option selected value="upcoming_event">Upcoming Event</option>
                                                            <option value="urgent_announce">Urgent Announcement</option>
                                                             @break
                                                         @default
                                                         <option  value="simple_post">simple post</option>
                                                         <option value="breackin_news">Breacking news</option>
                                                         <option value="upcoming_event">Upcoming Event</option>
                                                         <option selected value="urgent_announce">Urgent Announcement</option>
                                                     @endswitch
                                                    </select><small class="form-text text-muted">Select the status of post and belongs to which satuations </small>
                                                </div>
                                            </div> <hr>
                                            <div class="row form-group">
                                                <div class="col-12 col-md-3"><label for="menu title">posts Title German</label>
                                                    <input type="text" id="de_title" name="de_title" value="{{$posts->de_title}}" placeholder="Title in German " class="form-control">
                                                    <small class="form-text text-muted">edit posts Title here.</small>
                                                </div>
                                              
                                                <div class="col-12 col-md-3"><label for="menu title">posts Title English</label>
                                                    <input type="text" id="en_title" name="en_title" value="{{$posts->en_title}}" placeholder="Title in English" class="form-control">
                                                    <small class="form-text text-muted">edit posts Title here.</small>
                                                </div>
                                             
                                                <div class="col-12 col-md-3"><label for="menu title">(فارسی) موضوع سرخظ</label>
                                                    <input  type="text"  value="{{$posts->fa_title}}" id="fa_title" name="fa_title" placeholder="موضوع سرخظ" required class="form-control">
                                                    <small class="form-text text-muted">Write posts title here.</small>
                                                </div>
                                            
                                                <div class="col-12 col-md-3"><label for="menu title">(پشتو) موضوع سرخظ</label>
                                                    <input  type="text"  value="{{$posts->ps_title}}" id="ps_title" name="ps_title" placeholder="موضوع سرخظ پشتو" required class="form-control">
                                                    <small class="form-text text-muted">Write posts title here.</small>
                                                </div>
                                            </div> <hr>
                                            <div class="row form-group">
                                                <div class="col-6 col-md-6"><label for="menu title">posts subtitle in German</label>
                                                    <input type="text" id="de_subtitle" name="de_subtitle" value="{{$posts->de_subtitle}}" placeholder="SubTitle in german " class="form-control">
                                                    <small class="form-text text-muted">edit posts subname here.</small>
                                                </div>
                                           
                                                <div class="col-6 col-md-6"><label for="menu title">posts subtitle in English</label>
                                                    <input type="text" id="en_subtitle" name="en_subtitle" value="{{$posts->en_subtitle}}" placeholder="SubTitle in English" class="form-control">
                                                    <small class="form-text text-muted">edit posts subname here.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-6 col-md-6"><label for="menu title">(فارسی)موضوع فرعی</label>
                                                    <input  type="text" value="{{$posts->fa_subtitle}}" id="fa_subtitle" name="fa_subtitle" placeholder="موضوع فرعی"required class="form-control">
                                                    <small class="form-text text-muted">Write posts Sub title here.</small>
                                                </div>
                                          
                                                <div class="col-6 col-md-6"><label for="menu title">(پشتو)موضوع فرعی</label>
                                                    <input  type="text" value="{{$posts->حa_subtitle}}" id="ps_subtitle" name="ps_subtitle" placeholder="موضوع فرعی"required class="form-control">
                                                    <small class="form-text text-muted">Write posts Sub title here.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-12 col-md-12"><label for="Link">Content in German </label>
                                                    <textarea  id="de_description" name="de_description" id="textarea-input" rows="19"   placeholder="posts Content..." class="ckeditor form-control">{{$posts->de_description}}</textarea>
                                                    <small class="form-text text-muted">edit the posts content here.</small>
                                                </div>
                                            </div> <hr>
                                            <div class="row form-group">
                                                <div class="col-12 col-md-12"><label for="Link">Content in English</label>
                                                    <textarea  id="en_description" name="en_description" id="textarea-input" rows="19"   placeholder="posts Content..." class="ckeditor form-control">{{$posts->en_description}}</textarea>
                                                    <small class="form-text text-muted">edit the posts content here.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group" >
                                                <div class="col-12 col-md-12"><label for="textarea-input" class=" form-control-label">(فارسی)جزیات در مورد پوست</label>
                                                    <textarea   id="fa_description" name="fa_description" id="textarea-input" rows="19"   placeholder="جزیات در مورد پوست" required class="ckeditor form-control">{{$posts->fa_description}}</textarea>
                                                </div>
                                            </div> 
                                            <div class="row form-group" >
                                                <div class="col-12 col-md-12"><label for="textarea-input" class=" form-control-label">(پشتو)جزیات در مورد پوست</label>
                                                    <textarea   id="fa_description" name="ps_description" id="textarea-input" rows="19"   placeholder="جزیات در مورد پوست" required class="ckeditor form-control">{{$posts->ps_description}}</textarea>
                                                </div>
                                            </div> 
                                      
                                            <div class="row form-group">
                                                <div class="col-3 col-md-3"><label for="menu title">posts speaker (optional) German</label>
                                                    <input type="text" id="de_speaker" name="de_speaker" value="{{$posts->de_speaker}}" placeholder="speaker/writer" class="form-control">
                                                    <small class="form-text text-muted">edit posts speaker here.</small>
                                                </div>
                                                <div class="col-3 col-md-3"><label for="menu title">posts speaker (optional) English</label>
                                                    <input type="text" id="en_speaker" name="en_speaker" value="{{$posts->en_speaker}}" placeholder="speaker/writer" class="form-control">
                                                    <small class="form-text text-muted">edit posts speaker here.</small>
                                                </div>
                                                <div class="col-3 col-md-3"><label for="menu title">(فارسی)posts speaker (optional)نویسینده/گوینده</label>
                                                    <input type="text" id="fa_speaker" name="fa_speaker" value="{{$posts->fa_speaker}}" placeholder="نویسینده/گوینده" class="form-control">
                                                    <small class="form-text text-muted">edit posts speaker here.</small>
                                                </div>
                                                <div class="col-3 col-md-3"><label for="menu title">(پشتو)posts speaker (optional)نویسینده/گوینده</label>
                                                    <input type="text" id="ps_speaker" name="ps_speaker" value="{{$posts->ps_speaker}}" placeholder="نویسنده/گوینده" class="form-control">
                                                    <small class="form-text text-muted">edit posts speaker here.</small>
                                                </div>
                                            </div><hr>
                                            <div class="row form-group">
                                                <div class="col-4 col-md-4"><label for="menu title">posts Timing (optional)/زمان</label>
                                                    <input type="text" id="timing" name="timing" value="{{$posts->timing}}" placeholder="timing" class="form-control">
                                                    <small class="form-text text-muted">edit posts timing here.</small>
                                                </div>
                                           
                                                <div class="col-4 col-md-4"><label for="menu title">posts date (optional)/ تاریخ</label>
                                                    <input type="text" id="date" name="date" value="{{$posts->date}}" placeholder="Date" class="form-control">
                                                    <small class="form-text text-muted">edit posts Date here.</small>
                                                </div>
                                                    <div class="col-4 col-md-4"><label for="status">Status/فعال یا غیر فعال</label>
                                                        <select name="status" id="status" value="{{$posts->status}}" class="form-control">
                                                            @if($posts->status == 1)
                                                            <option value="1" selected style="color: green">Active</option>
                                                            <option value="0" style="color: red">Diactivate</option>
                                                            @else
                                                            <option value="1" style="color: green">Active</option>
                                                            <option value="0" selected style="color: red">Diactive</option>
                                                            @endif
                                                    </select><small class="form-text text-muted">Select the status of menu</small>
                                                    </div>
                                            </div><hr>
                                            <div class="row form-group">
                                                <div class="col-3 col-md-3"><label for="menu location">posts location (optional) German</label>
                                                    <input type="text" id="de_location" name="de_location" value="{{$posts->de_location}}" placeholder="Location" class="form-control">
                                                    <small class="form-text text-muted">edit posts location here.</small>
                                                </div>
                                                <div class="col-3 col-md-3"><label for="menu location">posts location (optional) English</label>
                                                    <input type="text" id="en_location" name="en_location" value="{{$posts->en_location}}" placeholder="Location" class="form-control">
                                                    <small class="form-text text-muted">edit posts location here.</small>
                                                </div>
                                                <div class="col-3 col-md-3"><label for="menu location">posts location (optional)(فارسی)/ موقعیت</label>
                                                    <input type="text" id="fa_location" name="fa_location" value="{{$posts->fa_location}}" placeholder="Location" class="form-control">
                                                    <small class="form-text text-muted">edit posts location here.</small>
                                                </div>
                                                <div class="col-3 col-md-3"><label for="menu location">posts location (optional)(پشتو)/ موقعیت</label>
                                                    <input type="text" id="ps_location" name="ps_location" value="{{$posts->ps_location}}" placeholder="Location" class="form-control">
                                                    <small class="form-text text-muted">edit posts location here.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-6 col-md-6"><label for="Link">Image</label>
                                                    <input type="file" name="image" value="{{$posts->image}}">
                                                    <small class="form-text text-muted">pick up new posts cover image/ انتخاب عکس.</small>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                   <img class="card-img-top" src="/storage/MP4_MP3_PDF_Image_files/{{$posts->image}}" style="height:100px;width: auto"alt="{{$posts->title}}">
                                                    <small class="form-text text-muted">Current posts Cover image here.</small>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-6"><label for="Link">Audio or Videos youtube URL Links</label>
                                                <input type="file" name="image" value="{{$posts->youtubeLink}}">
                                                <small class="form-text text-muted">Audio or Videos youtube URL Links.</small>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-6 col-md-6"><label for="Link">File</label>
                                                    <input type="file" name="file" value="{{$posts->file}}">
                                                    <small class="form-text text-muted">pick up new posts  file/ انتخاب فایل.</small>
                                                </div>
                                                <div class="col-6 col-md-6">
                                                    @switch($posts->category)
                                                        @case('audio')
                                                        <audio controls>
                                                            <source src="horse.ogg" type="audio/ogg">
                                                            <source src="/storage/MP4_MP3_PDF_Image_files/{{$posts->file}}" type="audio/mpeg"  style="height:100px;width: auto">
                                                          </audio>
                                                            @break
                                                        @case('video')
                                                        <video  width="300"controls>
                                                            <source src="/storage/MP4_MP3_PDF_Image_files/{{$posts->file}}" type="video/mp4" style="height:100px;width: auto">
                                                            <source src="mov_bbb.ogg" type="video/ogg">
                                                          </video>
                                                            @break
                                                        @default
                                                            <p>no file to show</p>
                                                    @endswitch
                                                   {{-- <img class="card-img-top" src="/storage/MP4_MP3_PDF_files/{{$posts->file}}" style="height:100px;width: auto"alt="{{$posts->file}}">
                                                    <small class="form-text text-muted">Current posts file here.</small> --}}
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
