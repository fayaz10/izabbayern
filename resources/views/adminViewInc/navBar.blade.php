

    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{asset('images/top-logo.png')}}" alt="IZABBayen" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                    
                        </li>
                        <li class="has-suba">
                            <a class="js-arrow" href="{{asset('admin/prayer')}}">
                                <i class="fas fa-clock"></i>Prayer Times
                            </a>
                            </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="{{asset('admin/menu')}}">
                                <i class="fas fa-tasks"></i>Main Menus
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="{{asset('admin/submenu')}}">
                                <i class="fas fa-tasks"></i>Sub-Menus
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="{{asset('admin/tags')}}">
                                <i class="fas fa-tasks"></i>Tags 
                            </a>
                        </li>
                        {{-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-group"></i>Users
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{asset('admin/user/create')}}">Create User</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/user')}}">Show User List</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="has-sub">
                            <a class="js-arrow" href="{{asset('admin/ruler')}}">
                                <i class="fas fa-group"></i>Controllers
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-group"></i>our team
                                <span class="arrow">
                                   <i class="fas fa-angle-down"></i>
                               </span></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{asset('admin/team/create')}}">Create our team</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/team')}}">Show our team List</a>
                                </li>
                            </ul>
                        </li>
                         <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>contact us
                                <span class="arrow">
                                   <i class="fas fa-angle-down"></i>
                               </span></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{asset('admin/contact/create')}}">Create contact us</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/contact')}}">Show contact us</a>
                                </li>
                            </ul>
                        </li> 
                   
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-book"></i> <i class="fas fa-film"></i><i class="fas fa-music"></i>Posts
                                <span class="arrow">
                                   <i class="fas fa-angle-down"></i>
                               </span></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{asset('admin/posts/create')}}">Create post</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/posts')}}">Show posts list</a>
                                </li>
                            </ul>
                        </li>
                    
                        <li class="has-sub">
                            <a class="js-arrow" href="{{asset('admin/our-subscribers')}}">
                             <i class="fas fa-email"></i>Subscribers
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="{{asset('admin/partinars')}}">
                             <i class="fas fa-person"></i>Partiners</a>
                        </li>
                        <li class="has-sub" style="margin-bottom: 50px"></li>
                        
                    </ul>              
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('images/top-logo.png')}}" alt="IZAB Bayen" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                  
                        </li>
                        <li class="has-suba">
                            <a class="js-arrow" href="{{asset('admin/prayer')}}">
                                <i class="fas fa-clock"></i>Prayer Times
                            </a>
                         </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="{{asset('admin/menu')}}">
                                <i class="fas fa-tasks"></i>Main Menus
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="{{asset('admin/submenu')}}">
                                <i class="fas fa-tasks"></i>Sub-Menus
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="{{asset('admin/tags')}}">
                                <i class="fas fa-tasks"></i>Tags 
                            </a>
                        </li>
                        {{-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-group"></i>Users
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{asset('admin/user/create')}}">Create User</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/user')}}">Show User List</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="has-sub">
                            <a class="js-arrow" href="{{asset('admin/ruler')}}">
                                <i class="fas fa-group"></i>Controllers
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-group"></i>our team
                                <span class="arrow">
                                   <i class="fas fa-angle-down"></i>
                               </span></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{asset('admin/team/create')}}">Create our team</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/team')}}">Show our team List</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>contact us
                                <span class="arrow">
                                   <i class="fas fa-angle-down"></i>
                               </span></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{asset('admin/contact/create')}}">Create contact us</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/contact')}}">Show contact us</a>
                                </li>
                            </ul>
                        </li> 
                     
                   
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-book"></i> <i class="fas fa-film"></i><i class="fas fa-music"></i>Posts
                                <span class="arrow">
                                   <i class="fas fa-angle-down"></i>
                               </span></a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{asset('admin/posts/create')}}">Create post</a>
                                </li>
                                <li>
                                    <a href="{{asset('admin/posts')}}">Show posts list</a>
                                </li>
                            </ul>
                        </li>
                     
                       
                        <li class="has-sub">
                            <a class="js-arrow" href="{{asset('admin/our-subscribers')}}">
                             <i class="fas fa-box"></i>Subscribers</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="{{asset('admin/partinars')}}">
                             <i class="fas fa-group"></i>Partiners</a>
                        </li>
                         <li class="has-sub" style="margin-bottom: 50px"></li>

                    </ul>
                 </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

     		<!-- PAGE CONTAINER-->
		<div class="page-container">
			<!-- HEADER DESKTOP-->
			<header class="header-desktop">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="header-wrap">
							<form class="form-header" action="" method="POST">
								{{-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." /> --}}
								{{-- <button class="au-btn--submit" type="submit">
									<i class="zmdi zmdi-search"></i>
								</button> --}}
							</form>
							<div class="header-button">
								<div class="noti-wrap"></div>
								<div class="account-wrap">
									<div class="account-item clearfix js-item-menu">
										<div class="image">
											<img src="{{asset('images/avatar-01.jpg')}}" alt="John Doe" />
										</div>
										<div class="content">
											<a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
										</div>
										<div class="account-dropdown js-dropdown">
											<div class="info clearfix">
												<div class="image">
													<a href="#">
														<img src="{{asset('images/avatar-01.jpg')}}" alt="John Doe" />
													</a>
												</div>
												<div class="content">
													<h5 class="name">
														<a href="#">{{ Auth::user()->name }}</a>
													</h5>
													<span class="email">{{ Auth::user()->email }}</span>
												</div>
											</div>
											<div class="account-dropdown__footer">
                                            <a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- END HEADER DESKTOP-->