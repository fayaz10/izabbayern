@extends('userViewLayout.userViewApp')
@section('content')
 <!--SAB BANNER START-->
 <div class="sab_banner theme_overlay">
        <div class="container">
            <div class="sab_banner_text">
                <h2>Classes</h2>
                <p>Hampden-Sydney College in Virginiame looked up one of the more obscure<br> to Latin words, consect College.</p>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> Zuhause</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Classes</li>
                </ul>
            </div>
        </div>
    </div>
  {{-- <h1>{{ $classname }}</h1> --}}
    <!--SAB BANNER END-->
        <!--SAB BANNER END-->
        <section class="keo_contact_us_outer">
            <div class="container">
              
                <div class="row">
                    <div class="col-md-12">
                        <div class="keo_contact_form">
                              <!--SECTION HEADING START-->
                                <div class="section_heading text_center margin32">
                                    <!-- <span class="theme-color"><i class="fa icon- icon-islam-1"></i></span> -->
                                    <!-- <h2>Class</h2> -->
                                </div>
                                <!--SECTION HEADING END-->
                                <div class="row">
                                    <div class="col-lg-2"></div>
                                        <div class="col-lg-6">
                                        <div class="keo_contact_field contact_mrgn_btm">
                                            <input type="text" name="name" placeholder="Search by Title">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="keo_contact_field contact_mrgn_btm">
                                        <input type="submit" name="submit" value="Search">
                                       </div>
                                    </div>
                                </div>
           
                        </div>
                    </div>
                </div>
            </div>
        </section>
           <!-- 404 Page Wrap Start --> 
    <section class="keo_contact_us_outer">
        <div class="container">
            @if (count($videos)>0)
            <div class="row">
                <div class="col-md-12"><center><h3>Class A Videos</h3></center><br><hr>
                  
                        
                   
                    <div class="col-md-4 col-sm-6">
                        <div class="keo_price_wrap text-center">
                            <figure class="theme">
                                <video  width="300"controls>
                                    <source src="../images/Use_your_tongue_for_Good___Mufti_Menk(720p).mp4" type="video/mp4">
                                    <source src="mov_bbb.ogg" type="video/ogg">
                                  </video>
                            </figure><br style="padding:20px">
                            <h6>
                                <span class="theme-color">Use your thong for good</span> 
                            </h6>
                          <table>
                              <tr>
                                <th style="padding-left: 4px; color: green;">Teacher: </th>
                                <th style="padding-left: 4px;"><a href="our-teacher.html">Mufti Mink</a></th>
                                <th style="padding-left: 4px; color: green;">Date: </th>
                                <th style="padding-left: 4px;"><a href="our-teacher.html">Nav 20, 2020</a></th>
                              </tr>
                          </table><hr>
                          <p>Demo file Included
                            Commercial use Allowed
                            Appointment to the Molanas
                            Invited to our donations programs</p>
                            <a href="#">Download</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="keo_price_wrap text-center">
                            <figure class="theme">
                                <video  width="300"controls>
                                    <source src="../images/Use_your_tongue_for_Good___Mufti_Menk(720p).mp4" type="video/mp4">
                                    <source src="mov_bbb.ogg" type="video/ogg">
                                  </video>
                            </figure><br style="padding:20px">
                            <h6>
                                <span class="theme-color">Use your thong for good</span> 
                            </h6>
                          <table>
                              <tr>
                                <th style="padding-left: 4px; color: green;">Teacher: </th>
                                <th style="padding-left: 4px;"><a href="our-teacher.html">Mufti Mink</a></th>
                                <th style="padding-left: 4px; color: green;">Date: </th>
                                <th style="padding-left: 4px;"><a href="our-teacher.html">Nav 20, 2020</a></th>
                              </tr>
                          </table><hr>
                          <p>Demo file Included
                            Commercial use Allowed
                            Appointment to the Molanas
                            Invited to our donations programs</p>
                            <a href="#">Download</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="keo_price_wrap text-center">
                            <figure class="theme">
                                <video  width="300"controls>
                                    <source src="../images/Use_your_tongue_for_Good___Mufti_Menk(720p).mp4" type="video/mp4">
                                    <source src="mov_bbb.ogg" type="video/ogg">
                                  </video>
                            </figure><br style="padding:20px">
                            <h6>
                                <span class="theme-color">Use your thong for good</span> 
                            </h6>
                          <table>
                              <tr>
                                <th style="padding-left: 4px; color: green;">Teacher: </th>
                                <th style="padding-left: 4px;"><a href="our-teacher.html">Mufti Mink</a></th>
                                <th style="padding-left: 4px; color: green;">Date: </th>
                                <th style="padding-left: 4px;"><a href="our-teacher.html">Nav 20, 2020</a></th>
                              </tr>
                          </table><hr>
                          <p>Demo file Included
                            Commercial use Allowed
                            Appointment to the Molanas
                            Invited to our donations programs</p>
                            <a href="#">Download</a>
                        </div>
                    </div>
                                 
                </div>
             
            </div>
            @endif
            <div class="row">
                <div class="col-md-12"><center><h3>Related Audios</h3></center><br><hr>
                    <div class="col-md-4 col-sm-6">
                        <div class="keo_price_wrap text-center">
                            <figure class="theme">
                                <audio controls>
                                    <source src="horse.ogg" type="audio/ogg">
                                    <source src="../images/108_a.mp3" type="audio/mpeg">
                                  </audio>
                            </figure><br style="padding:20px">
                            <h6>
                                <span class="theme-color">Use your thong for good</span> 
                            </h6>
                          <table>
                              <tr>
                                <th style="padding-left: 4px; color: green;">Teacher: </th>
                                <th style="padding-left: 4px;"><a href="our-teacher.html">Mufti Mink</a></th>
                                <th style="padding-left: 4px; color: green;">Date: </th>
                                <th style="padding-left: 4px;"><a href="our-teacher.html">Nav 20, 2020</a></th>
                              </tr>
                          </table><hr>
                          <p>Demo file Included
                            Commercial use Allowed
                            Appointment to the Molanas
                            Invited to our donations programs</p>
                            <a href="#">Download</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="keo_price_wrap text-center">
                            <figure class="theme">
                                <audio controls>
                                    <source src="horse.ogg" type="audio/ogg">
                                    <source src="../images/108_a.mp3" type="audio/mpeg">
                                  </audio>
                            </figure><br style="padding:20px">
                            <h6>
                                <span class="theme-color">Use your thong for good</span> 
                            </h6>
                          <table>
                              <tr>
                                <th style="padding-left: 4px; color: green;">Teacher: </th>
                                <th style="padding-left: 4px;"><a href="our-teacher.html">Mufti Mink</a></th>
                                <th style="padding-left: 4px; color: green;">Date: </th>
                                <th style="padding-left: 4px;"><a href="our-teacher.html">Nav 20, 2020</a></th>
                              </tr>
                          </table><hr>
                          <p>Demo file Included
                            Commercial use Allowed
                            Appointment to the Molanas
                            Invited to our donations programs</p>
                            <a href="#">Download</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="keo_price_wrap text-center">
                            <figure class="theme">
                                <audio controls>
                                    <source src="horse.ogg" type="audio/ogg">
                                    <source src="../images/108_a.mp3" type="audio/mpeg">
                                  </audio>
                            </figure><br style="padding:20px">
                            <h6>
                                <span class="theme-color">Use your thong for good</span> 
                            </h6>
                          <table>
                              <tr>
                                <th style="padding-left: 4px; color: green;">Teacher: </th>
                                <th style="padding-left: 4px;"><a href="our-teacher.html">Mufti Mink</a></th>
                                <th style="padding-left: 4px; color: green;">Date: </th>
                                <th style="padding-left: 4px;"><a href="our-teacher.html">Nav 20, 2020</a></th>
                              </tr>
                          </table><hr>
                          <p>Demo file Included
                            Commercial use Allowed
                            Appointment to the Molanas
                            Invited to our donations programs</p>
                            <a href="#">Download</a>
                        </div>
                    </div>
                                 
                </div>
             
            </div>
        </div>
        <!-- <section class="keo_404_wrap"> -->
            <div class="container"><center><h3>Related books</h3></center><br><hr>
                <div class="row">          
                    <div class="col-md-3 col-sm-6">
                        <div class="keo_price_wrap text-center">
                            <figure class="theme">
                                <img src="extra-images/book.png" alt="">
                            </figure><br style="padding:20px">
                            <h5>
                                <span class="theme-color"> Name of Book here  </span> 
                            </h5>
                          <p>Demo file Included
                            Commercial use Allowed
                            Appointment to the Molanas
                            Invited to our donations programs</p>
                            <a href="#">Downloawd</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="keo_price_wrap text-center">
                            <figure class="theme">
                                <img src="extra-images/book.png" alt="">
                            </figure><br style="padding:20px">
                            <h5>
                                <span class="theme-color"> Name of Book here  </span> 
                            </h5>
                          <p>Demo file Included
                            Commercial use Allowed
                            Appointment to the Molanas
                            Invited to our donations programs</p>
                            <a href="#">Downloawd</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="keo_price_wrap text-center">
                            <figure class="theme">
                                <img src="extra-images/book.png" alt="">
                            </figure><br style="padding:20px">
                            <h5>
                                <span class="theme-color"> Name of Book here  </span> 
                            </h5>
                          <p>Demo file Included
                            Commercial use Allowed
                            Appointment to the Molanas
                            Invited to our donations programs</p>
                            <a href="#">Downloawd</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="keo_price_wrap text-center">
                            <figure class="theme">
                                <img src="extra-images/book.png" alt="">
                            </figure><br style="padding:20px">
                            <h5>
                                <span class="theme-color"> Name of Book here  </span> 
                            </h5>
                            
                          <p>Demo file Included
                            Commercial use Allowed
                            Appointment to the Molanas
                            Invited to our donations programs</p>
                            <a href="#">Downloawd</a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </section> -->
    </section>


@endsection