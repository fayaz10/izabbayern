<header class="header" >
    <!--TOP WRAP START --> 
    <div class="top_wrap">
        <div class="container">
            <div class="row top_row">
                <!-- <div class="col-md-4"></div> -->
                <div class="col-md-4">
                    <div class="top_colume">
                        <div class="laguage_list">
                          <form action="/locale" id="myform" method="get">
                            <select class="small" name="language" onchange='submitForm();'>
                                <option data-display="Language">Language </option>
                                <option value="en" data-title="english">English</option>
                                <option value="pe" data-title="urdu">فارسی</option>
                                <option value="ge" data-title="urdu">German</option>

                            </select>
                          </form>
                          <!-- Script --> 
                        <script type='text/javascript'> 
                            function submitForm(){ 
                            // Call submit() method on <form id='myform'>
                            document.getElementById('myform').submit(); 
                            } 
                            </script>
                            {{-- <a href="/locale/ge">Gereman</a>
                            <a href="/locale/pe">persion</a>
                            <a href="/locale/en">english</a> --}}


                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top_colume laguage_lst" id="logoNovUp">
                    <a href="/index"><img src="../images/top-logo.png" alt="IZAB-Bayern-Logo"></a>                
                    </div>
                </div>
                <div class="col-md-2">
                <div class="top_colume">
                    <div class="laguage_lst">
                     <a class="theme_btn white_text theme-bg-Donate theme-border margin_right26 animated" href="/donate">Donate</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!--TOP WRAP END -->
    <!--TOP NAVI WRAP START -->
    <div class="top_navi_wrap" >
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="top_logo" id="logoNavDown">
                        <a href="/index" ><img src="../images/top-logo.png" alt="IZAB-Bayern-Logo"></a>
                    </div>
                </div>
                <div class="col-md-10">
                    <nav class="navigation" >
                        <ul>
                            @foreach ($menus as $item)
                            <li>
                                @if (count($item->submenu)>0)
                                <a href="{{$item->urlLink}}">{{$item->title}}</a>
                                    <ul class="child">
                                        @foreach ($item->submenu as $sub)
                                            <li><a href="{{$sub->urlLink}}">{{$sub->title}}</a></li>
                                        @endforeach
                                    </ul>
                            </li>
                                @else 
                                 <li><a href="{{$item->urlLink}}">{{$item->title}}</a></li>
                            @endif
                            @endforeach
                        </ul>
                    </nav>
                    <!--DL Menu Start-->
                    <div id="dl-menu" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <li class="menu-item keo-parent-menu"><a href="#">Language</a>
                                <ul class="dl-submenu">
                                    <li><a href="/locale/ge">German</a></li>
                                    <li><a href="/locale/pe">فارسی</a></li>

                                </ul>
                            </li>
                            @foreach ($menus as $item)
                            <li>
                                @if (count($item->submenu)>0)
                                <a href="{{$item->urlLink}}">{{$item->title}}</a>
                                    <ul class="dl-submenu">
                                        @foreach ($item->submenu as $sub)
                                            <li><a href="{{$sub->urlLink}}">{{$sub->title}}</a></li>
                                        @endforeach
                                    </ul>
                            </li>
                                @else 
                                 <li><a href="{{$item->urlLink}}">{{$item->title}}</a></li>
                            @endif
                            
                            @endforeach
                            <li><a href="/donate">Donate</a></li>
                        </ul>
                    </div>
                    <!--DL Menu END-->
                </div>
            </div>            
        </div>        
    </div>
    <!--TOP NAVI WRAP END--> 
</header>
{{-- <div class="wrapper">
    <div class="content">
         Your content
            <a href="/index" ><img src="images/top-logo.png" alt=""></a>
    </div>
    <div class="notice">
         viewable screen size is too small
         <a href="/index" ><img src="images/top-logo.png" alt=""></a>
     </div>
</div> --}}

