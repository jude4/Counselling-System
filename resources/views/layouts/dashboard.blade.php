<!DOCTYPE HTML>
<html>
<head>
<title>Counselling System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="{{ asset('assets/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="{{ asset('assets/css/style.css')}}" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="{{ asset('assets/css/font-awesome.css')}}" rel="stylesheet">
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href="{{ asset('assets/css/SidebarNav.min.css')}}" media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->

 <!-- js-->
<script src="{{ asset('assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{ asset('assets/js/modernizr.custom.js')}}"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->

<!-- Metis Menu -->
<script src="{{ asset('assets/js/metisMenu.min.js')}}"></script>
<script src="{{ asset('assets/js/custom.js')}}"></script>
<link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet">
<!--//Metis Menu -->

</head>

        <body class="cbp-spmenu-push">
            <div class="main-content">
            <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                <!--left-fixed -navigation-->
                <aside class="sidebar-left">
              <nav class="navbar navbar-inverse">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <h4><a class="navbar-brand" href="index.html">Counselling System</a></h4>
                  </div>
                  <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="sidebar-menu">
                      <li class="header">MAIN NAVIGATION</li>
                      @if(Auth::user()->role_id == 1)
                      <li class="treeview">
                        <a href="{{ url('/dashboard') }}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                      </li>
                      <li class="treeview">
                        <a href="#">
                        <i class="fa fa-user"></i>
                        <span>Manage Users</span>
                        <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ url('manage/adviser') }}"><i class="fa fa-angle-right"></i> Create Course Adviser</a></li>
                          <li><a href="{{ url('manage/counsellor') }}"><i class="fa fa-angle-right"></i> Create Counsellor</a></li>
                          <li><a href="{{ url('manage/student') }}"><i class="fa fa-angle-right"></i> Create Student</a></li>

                          <li><a href="{{ url('/manage/show/1') }}"><i class="fa fa-angle-right"></i> View Course Adviser</a></li>
                          <li><a href="{{ url('manage/show/2') }}"><i class="fa fa-angle-right"></i> View Counsellor</a></li>
                          <li><a href="{{ url('manage/show/3') }}"><i class="fa fa-angle-right"></i> View Student</a></li>
                        </ul>
                      </li>
                      {{--  <li class="treeview">
                        <a href="#">
                        <i class="fa fa-info"></i>
                        <span>Manage FAQ</span>
                        <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('faq.create') }}"><i class="fa fa-angle-right"></i> Create FAQ</a></li>
                          <li><a href="{{ url('/faq/view') }}"><i class="fa fa-angle-right"></i> View FAQ</a></li>
                        </ul>
                      </li>  --}}

                      {{--  <li class="treeview">
                            <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Tags</span>
                            <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                              <li><a href="{{ route('cat.create') }}"><i class="fa fa-angle-right"></i> Create Tags</a></li>
                              <li><a href="{{ url('/cat/view') }}"><i class="fa fa-angle-right"></i> View Tags</a></li>
                            </ul>
                      </li>  --}}
                      @endif
                      @if (Auth::user()->role_id == 2)
                      <li class="treeview">
                            <a href="{{ url('/dashboard') }}">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="#">
                            <i class="fa fa-envelope"></i> <span>Mange Messages</span>
                            {{--  <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>  --}}
                            <ul class="treeview-menu">
                                <li><a href="{{url('chats/counsellor')}}"><i class="fa fa-angle-right"></i> Mail Inbox</a></li>
                                <li><a href="{{url('boardcast')}}"><i class="fa fa-angle-right"></i> Broadcast Message</a></li>

                            </ul>
                          </li>
                      @endif

                      @if(Auth::user()->role_id == 3)
                      <li class="treeview">
                            <a href="{{ url('/dashboard') }}">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                      <li class="treeview">
                            <a href="#">
                            <i class="fa fa-envelope"></i> <span>View Message</span>
                            {{--  <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>  --}}
                            <ul class="treeview-menu">
                              <li><a href="{{url('chats/student')}}"><i class="fa fa-angle-right"></i> Mail Inbox</a></li>

                              <li><a href="{{url('chats/speaktolect')}}"><i class="fa fa-angle-right"></i> Speak to Lecturer </a></li>

                              <li><a href="{{url('chats/speaktocon')}}"><i class="fa fa-angle-right"></i> Speak to Counsellor </a></li>
                            </ul>
                          </li>
                      @endif
                      @if (Auth::user()->role_id == 4)
                      <li class="treeview">
                            <a href="{{ url('/dashboard') }}">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="treeview">
                                <a href="#">
                                <i class="fa fa-envelope"></i> <span>View Message</span>
                                {{--  <i class="fa fa-angle-left pull-right"></i><small class="label pull-right label-info1">08</small><span class="label label-primary1 pull-right">02</span></a>  --}}
                                <ul class="treeview-menu">
                                  <li><a href="{{url('chats/lecturer')}}"><i class="fa fa-angle-right"></i> Mail Inbox</a></li>

                              <li><a href="{{url('chats/speaktocon')}}"><i class="fa fa-angle-right"></i> Speak to Counsellor </a></li>
                                </ul>
                              </li>
                      @endif

                    </ul>
                  </div>
                  <!-- /.navbar-collapse -->
              </nav>
            </aside>
            </div>
                <!--left-fixed -navigation-->

                <!-- header-starts -->
                <div class="sticky-header header-section ">
                    <div class="header-left">

                        <!--toggle button start-->
                        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
                        <!--toggle button end-->
                        <div class="profile_details_left"><!--notifications of menu start -->
                            <ul class="nofitications-dropdown">
                                <li class="dropdown head-dpdn">
                                    <a href="{{ url('/')}}" class="dropdown-toggle text-white"><i class="fa fa-home"></i></a>
                                    <ul class="dropdown-menu">
                                        {{--  <li>
                                            <div class="notification_header">
                                                <h3>You have 3 new messages</h3>
                                            </div>
                                        </li>  --}}
                                        {{--  <li><a href="#">
                                           <div class="user_img"><img src="images/1.jpg" alt=""></div>
                                           <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet</p>
                                            <p><span>1 hour ago</span></p>
                                            </div>
                                           <div class="clearfix"></div>
                                        </a></li>  --}}
                                        {{--  <li class="odd"><a href="#">
                                            <div class="user_img"><img src="images/4.jpg" alt=""></div>
                                           <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                            </div>
                                          <div class="clearfix"></div>
                                        </a></li>
                                        <li><a href="#">
                                           <div class="user_img"><img src="images/3.jpg" alt=""></div>
                                           <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                            </div>
                                           <div class="clearfix"></div>
                                        </a></li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#">See all messages</a>
                                            </div>
                                        </li>  --}}
                                    </ul>
                                </li>
                                <li class="dropdown head-dpdn">
                                    {{--  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i>
                                        @if (auth()->user()->unreadNotifications->count()!= 0 )

                                        <span class="badge blue">
                                                  {{ auth()->user()->unreadNotifications->count()}}

                                        </span>
                                        @endif

                                    </a>  --}}
                                    <ul class="dropdown-menu">
                                        {{--  <li>
                                            <div class="notification_header">
                                                <h3>You have 3 new notification</h3>
                                            </div>
                                        </li>
                                        @foreach(auth()->user()->unreadNotifications as $notification)
                                        <li><a href="#">
                                            <div class="user_img"><img src="images/4.jpg" alt=""></div>
                                           <div class="notification_desc">
                                            <p>{{$notification->data['message']}}</p>
                                            <p><span>1 hour ago</span></p>
                                            </div>
                                          <div class="clearfix"></div>
                                         </a></li>
                                         @endforeach

                                         @foreach(auth()->user()->notifications as $notification)
                                         <li class="odd"><a href="#">
                                            <div class="user_img"><img src="images/1.jpg" alt=""></div>
                                           <div class="notification_desc">
                                            <p>Lorem ipsum dolor amet </p>
                                            <p><span>1 hour ago</span></p>
                                            </div>
                                           <div class="clearfix"></div>
                                         </a></li>
                                         @endforeach  --}}

                                    </ul>
                                </li>
                                <li class="dropdown head-dpdn">
                                    {{--  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">8</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 8 pending task</h3>
                                            </div>
                                        </li>
                                        <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar yellow" style="width:40%;"></div>
                                            </div>
                                        </a></li>
                                        <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                               <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                 <div class="bar green" style="width:90%;"></div>
                                            </div>
                                        </a></li>
                                        <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                           <div class="progress progress-striped active">
                                                 <div class="bar red" style="width: 33%;"></div>
                                            </div>
                                        </a></li>
                                        <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                               <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                 <div class="bar  blue" style="width: 80%;"></div>
                                            </div>
                                        </a></li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#">See all pending tasks</a>
                                            </div>
                                        </li>
                                    </ul>  --}}
                                </li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>
                        <!--notification menu end -->
                        <div class="clearfix"> </div>
                    </div>
                    <div class="header-right">


                        <!--search-box-->
                        {{--  <div class="search-box">
                            <form class="input">
                                <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31">
                                <label class="input__label" for="input-31">
                                    <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                        <path d="m0,0l404,0l0,77l-404,0l0,-77z"></path>
                                    </svg>
                                </label>
                            </form>
                        </div><!--//end-search-box-->  --}}

                        <div class="profile_details">
                            <ul>
                                <li class="dropdown profile_details_drop">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <div class="profile_img">
                                            <span class="prfil-img"><img src="/emma/storage/app/public/public/cover_image/{{Auth::user()->cover_image}}" width="50px" alt="logo"> </span>
                                            <div class="user-name">
                                                <p>{{ Auth::user()->name}}</p>
                                                @if (Auth::user()->role_id == 1)
                                                <span>Administrator</span>
                                                @endif
                                                @if (Auth::user()->role_id == 2)
                                                <span>Counsellor</span>
                                                @endif
                                                @if (Auth::user()->role_id == 3)
                                                <span>Student</span>
                                                @endif
                                                @if (Auth::user()->role_id == 4)
                                                <span>Lecturer</span>
                                                @endif
                                            </div>
                                            <i class="fa fa-angle-down lnr"></i>
                                            <i class="fa fa-angle-up lnr"></i>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu drp-mnu">
                                        <li> <a href="{{ url('manage/account') }}"><i class="fa fa-user"></i> My Account</a> </li>
                                        @if(auth()->user()->role_id > 1)
                                          <li> <a href="{{ url('/manage/pic') }}"><i class="fa fa-suitcase"></i> Profile</a> </li>
                                        @endif
                                        <li> <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a> </li>


                                        {{--  <a class="dropdown-item scroll" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>  --}}

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!-- //header-ends -->
                <!-- main content start-->
    <div id="page-wrapper" style="min-height: 699px;">
            @include('inc.message')
                     @yield('content')
    </div>
                     <!--footer-->
                <div class="footer">
                   <p>© 2018 Uniben Counselling System Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">Emma</a></p>
               </div>
                <!--//footer-->
            </div>






            <!-- side nav js -->
            <script src="{{ asset('assets/js/SidebarNav.min.js')}}" type="text/javascript"></script>
            <script>
              $('.sidebar-menu').SidebarNav()
            </script>
            <!-- //side nav js -->

            <!-- Classie --><!-- for toggle left push menu script -->

            <script src="{{ asset('assets/js/classie.js') }}"></script>
                <script>
                    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
                        showLeftPush = document.getElementById( 'showLeftPush' ),
                        body = document.body;

                    showLeftPush.onclick = function() {
                        classie.toggle( this, 'active' );
                        classie.toggle( body, 'cbp-spmenu-push-toright' );
                        classie.toggle( menuLeft, 'cbp-spmenu-open' );
                        disableOther( 'showLeftPush' );
                    };

                    function disableOther( button ) {
                        if( button !== 'showLeftPush' ) {
                            classie.toggle( showLeftPush, 'disabled' );
                        }
                    }
                </script>
            <!-- //Classie --><!-- //for toggle left push menu script -->

            <!--scrolling js-->
            <script src="{{ asset('assets/js/jquery.nicescroll.js')}}"></script>
            <script src="{{ asset('assets/js/scripts.js')}}"></script><div id="ascrail2000" class="nicescroll-rails" style="width: 6px; z-index: 1000; background: rgb(66, 79, 99) none repeat scroll 0% 0%; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 743px; background-color: rgb(242, 179, 63); border: 0px none; background-clip: padding-box; border-radius: 10px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 6px; z-index: 1000; background: rgb(66, 79, 99) none repeat scroll 0% 0%; position: fixed; left: 0px; width: 100%; bottom: 0px; cursor: default; display: none; opacity: 0;"><div style="position: relative; top: 0px; height: 6px; width: 1010px; background-color: rgb(242, 179, 63); border: 0px none; background-clip: padding-box; border-radius: 10px;"></div></div>
            <!--//scrolling js-->

            <!-- Bootstrap Core JavaScript -->
           <script src="{{ asset('assets/js/bootstrap.js')}}"> </script>


        </body>
        </html>
