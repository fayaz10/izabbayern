<header class="header" >
    <!--TOP WRAP START --> 
    <div class="top_wrap">
        <div class="container">
            <div class="row top_row">
                <!-- <div class="col-md-4"></div> -->
                <div class="col-md-4">
                        <div style="margin-top: 12px" class="selectLang">
                            @switch(session('locale'))
                                @case('fa')
                                <a href="{{ asset('../../lang/en') }}">English</a>
                                <a href="{{ asset('../../lang/de') }}">German</a>
                                <a  class="active" href="{{ asset('../../lang/fa') }}">فارسی</a>
                                <a href="{{ asset('../../lang/ps') }}">پشتو</a>
                                    @break
                                @case('ps')
                                <a href="{{ asset('../../lang/en') }}">English</a>
                                <a  href="{{ asset('../../lang/de') }}">German</a>
                                <a href="{{ asset('../../lang/fa') }}">فارسی</a>
                                <a  class="active"  href="{{ asset('../../lang/ps') }}">پشتو</a>
                                    @break
                                @case('de')
                                <a href="{{ asset('../../lang/en') }}">English</a>
                                <a class="active" href="{{ asset('../../lang/de') }}">German</a>
                                <a href="{{ asset('../../lang/fa') }}">فارسی</a>
                                <a href="{{ asset('../../lang/ps') }}">پشتو</a>
                                    @break
                                @default
                                <a class="active" href="{{ asset('../../lang/en') }}">English</a>
                                <a href="{{ asset('../../lang/de') }}">German</a>
                                <a href="{{ asset('../../lang/fa') }}">فارسی</a>
                                <a href="{{ asset('../../lang/ps') }}">پشتو</a>
                            @endswitch
                          
                        </div>

                </div>
                <div class="col-md-6">
                    <div class="top_colume laguage_lst" id="logoNovUp">
                    <a href="/index"><img src="{{ asset('../../images/top-logo.png') }}" alt="IZAB-Bayern-Logo"></a>                
                    </div>
                </div>
                
                <div class="col-md-2">
                <div class="top_colume">
                    <div class="laguage_lst">
                     <a class="theme_btn white_text theme-bg-Donate theme-border margin_right26 animated" href="/donate">
                        {{ __('lang.Donate') }}
                    </a>
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
                <div class="col-md-1">
                    <div class="top_logo" id="logoNavDown" style="padding-bottom: 5%;margin:0% ">
                         <div class="col-md-1"  >
                        <a href="/index" ><img  src="{{ asset('../../images/top-logo.png') }}" ></a>

                        </div>
                    </div>
                </div>
                @php $lang= session()->get('locale');
                if( session()->get('locale')==null){
                    $lang='en';
                }
                @endphp
                <div class="col-md-11 mycustomeNav" >
                   <Center>
                       <nav class="navigation" >
                        <ul>
                           
                          @foreach ($menus as $item)
                            <li>
                                @if (count($item->submenu)>0)
                                <a  href="{{$item->urlLink}}">{{$item->{$lang.'_title'} }}</a>
                                    <ul class="child">
                                        @foreach ($item->submenu as $sub)
                                            <li ><a href="{{$sub->urlLink}}">{{$sub->{$lang.'_title'} }}</a></li>
                                        @endforeach
                                    </ul>
                            </li>
                                @else 
                                 <li><a  href="{{$item->urlLink}}" >{{$item->{$lang.'_title'} }}</a></li>

                                @endif
                            @endforeach
                            @guest
                            <li><a href="#" style="color: rgb(211, 208, 13)"> {{ __('lang.login') }}</a> 
                                <ul class="child">
                                    @if (Route::has('login'))
                                        <li>
                                            <a style="color: rgb(211, 208, 13)" class="nav-link" href="{{ route('login') }}">{{ __('lang.login') }}</a>
                                        </li>
                                    @endif
                                    @if (Route::has('register'))
                                        <li>
                                            <a style="color: rgb(211, 208, 13)" class="nav-link" href="{{ route('register') }}">{{ __('lang.register') }}</a>
                                        </li>
                                    @endif
                                </ul>
                            </li>
                        @else
                        <li><a href="#" style="color: rgb(211, 208, 13)"> {{ __('lang.welcome') }}{{ Auth::user()->name }}</a> 
                            <ul class="child">
                                <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        {{ __('lang.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                @can('manage-users')
                                <li><a class="dropdown-item" target="_blanck" href="/admin/dashboard">{{ __('lang.admin_page') }}</a></li>
                                @endcan
                            </ul>
                        </li>
                       
                    @endguest
                        </ul>
                    </nav>
                </Center>
                    <!--DL Menu Start-->
                    <div id="dl-menu" class="dl-menuwrapper" >
                        <button class="dl-trigger">{{ __('options') }}</button>
                        <ul class="dl-menu" >
                            @foreach ($menus as $item)
                            <li>
                                @if (count($item->submenu)>0)
                                <a style="text-align:right" href="{{$item->urlLink}}">{{ $item->{$lang.'_title'} }}</a>
                                    <ul class="dl-submenu" >
                                        @foreach ($item->submenu as $sub)
                                            <li ><a style="text-align:right"href="{{$sub->urlLink}}">{{$sub->{$lang.'_title'} }}</a></li>
                                        @endforeach
                                    </ul>
                            </li>
                                @else 
                                 <li><a style="text-align:right" href="{{$item->urlLink}}">{{$item->{$lang.'_title'} }}</a></li>
                            @endif
                            
                            @endforeach
                            <li><a style="text-align:right" href="/donate"> {{ __('lang.Donate') }}</a></li>
                        </ul>
                    </div>
                    <!--DL Menu END-->
                </div>
                <div class="col-md-0"></div>
            </div> 
         
                      
        </div>        
    </div>
    <!--TOP NAVI WRAP END--> 
</header>


