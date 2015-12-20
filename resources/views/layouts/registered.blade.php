<!DOCTYPE html>
<html lang="ar" dir='rtl'>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @section('title')
        نظام التعليم عن بعد :: 
        @show
    </title>

    <!-- Bootstrap core CSS -->

    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet"> <link href="{{ asset('template/css/bootstrap-rtl.min.css') }}" rel="stylesheet">

    <link href="{{ asset('template/fonts/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('template/css/icheck/flat/green.css') }}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ asset('template/css/custom.css') }}" rel="stylesheet">

    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/nprogress.js') }}"></script>
    <script>
    var ROOT_PATH = '{{ asset('')}}'
        jQuery(document).ready(function($) {
            NProgress.start();
        });
    </script>
    
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js') }}"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
        <![endif]-->
@section('head')
@show
</head>


<body class="{{ session('sidebar_hidden') ? 'nav-sm' : 'nav-md' }}">

    <div class="container body">


        <div class="main_container">
             <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                     <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle" href="{{ route('ajax.togglesidebar')}}"><i class="fa fa-bars"></i></a>
                        </div>
-
                        <ul class="nav navbar-nav navbar-left">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                @if(daress_registerd()->avatar)
                                    <img src="{{ asset(user()->avatar->url()) }}" alt="">
                                @endif
                                    {{ daress_registerd()->fullname }}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-left">
                                    <li><a href="{{ route('registration.registrar.logout') }}"><i class="fa fa-sign-out pull-left"></i> @lang('global.logout')</a>
                                    </li>
                                </ul>
                            </li>
                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <li>
                                        <a>
                                        
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                           <li>
                           <a >
                           <b class="text-danger">
                               <i class="fa fa-info-circle"></i> @lang('registration::registrar.you_are_in_step',['name'=>daress_registerd()->step->name])
                            </b>
                           </a>
                           </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->
            <!-- page content -->
            <div class="right_col" role="main">
                @yield('content')
            </div>
            <!-- /page content -->
            <div class="col-md-3 left_col">
                <div class="left_col {{ session('sidebar_hidden') ? null : 'scroll-view' }}">

                    <div class="navbar nav_title" style="border: 0;">
                    @if(daress_registerd())
                        <a href="{{ route('registration.registrar.index') }}" class="site_title">
                        <i class="fa fa-university"></i>
                        <span>دارس</span>
                        </a>
                    @elseif(user())
                        <a href="{{ route('welcome') }}" class="site_title">
                        <i class="fa fa-university"></i>
                        <span>دارس</span>
                        </a>
                    @endif
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                    @if(daress_registerd()->avatar)
                        <div class="profile_pic">
                            <img src="{{ asset(user()->avatar->url()) }}" alt="{{ user()->name }}" class="img-circle profile_img">
                        </div>
                    @endif
                        <div class="profile_info">
                            <span>مرحبا,</span>
                            <h2>{{ daress_registerd()->fullname }}</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                   @include('partials.sidebar')
                    <!-- /sidebar menu -->

                    
                </div>
            </div>

           


            

        </div>

    </div>

    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('template/js/icheck/icheck.min.js') }}"></script>

    <script src="{{ asset('template/js/custom.js') }}"></script>
    <script src="{{ asset('template/js/ecss.min.js') }}"></script>
   
    <script>
    jQuery(document).ready(function($) {
        $('input.tableflat').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });
         NProgress.done();
    });
    </script>

@include('partials.notifications')

@section('footer')
@show
</body>

</html>
