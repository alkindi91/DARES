<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>نظام التعليم عن بعد |</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet"> <link href="css/bootstrap-rtl.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/progressbar/bootstrap-progressbar-3.3.0.css">

    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Anthony Fernando</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <?php require_once('includes/sidebar.php') ?>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-left">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">John Doe
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="images/img.jpg" alt="Profile Image" />
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                                            <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where... 
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a>
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Widget Designs</h3>
                        </div>

                        <div class="title_right">
                            <div class="pull-right">
                                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                                <input style="padding: 5px 16px;" type="text" placeholder="Search..." class="autocomplete-input input tooltip-button ui-autocomplete-input" data-placement="bottom" title="" name="" data-original-title="Type 'jav' to see the available tags..." autocomplete="off">
                                <i class="glyph-icon icon-search"></i>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="">
                                <div class="x_content">


                                    <div class="row">
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                                                </div>
                                                <div class="count">179</div>

                                                <h3>New Sign ups</h3>
                                                <p>Lorem ipsum psdea itgum rixt.</p>
                                            </div>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-comments-o"></i>
                                                </div>
                                                <div class="count">179</div>

                                                <h3>New Sign ups</h3>
                                                <p>Lorem ipsum psdea itgum rixt.</p>
                                            </div>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                                                </div>
                                                <div class="count">179</div>

                                                <h3>New Sign ups</h3>
                                                <p>Lorem ipsum psdea itgum rixt.</p>
                                            </div>
                                        </div>
                                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="tile-stats">
                                                <div class="icon"><i class="fa fa-check-square-o"></i>
                                                </div>
                                                <div class="count">179</div>

                                                <h3>New Sign ups</h3>
                                                <p>Lorem ipsum psdea itgum rixt.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row top_tiles" style="margin: 10px 0;">
                                        <div class="col-md-3 tile">
                                            <span>Total Sessions</span>
                                            <h2>231,809</h2>
                                            <span class="sparkline_one" style="height: 160px;">
                                    <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                </span>
                                        </div>
                                        <div class="col-md-3 tile">
                                            <span>Total Revenue</span>
                                            <h2>$ 1,231,809</h2>
                                            <span class="sparkline_one" style="height: 160px;">
                                    <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                </span>
                                        </div>
                                        <div class="col-md-3 tile">
                                            <span>Total Sessions</span>
                                            <h2>231,809</h2>
                                            <span class="sparkline_two" style="height: 160px;">
                                    <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                </span>
                                        </div>
                                        <div class="col-md-3 tile">
                                            <span>Total Sessions</span>
                                            <h2>231,809</h2>
                                            <span class="sparkline_one" style="height: 160px;">
                                    <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                </span>
                                        </div>
                                    </div>




                                    <br />
                                    <div class="row">
                                        <div class="col-md-3 col-xs-12 widget widget_tally_box">
                                            <div class="x_panel fixed_height_390">
                                                <div class="x_title">
                                                    <h2>Tally Design</h2>
                                                    <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Settings 1</a>
                                                                </li>
                                                                <li><a href="#">Settings 2</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">

                                                    <div style="text-align: center; overflow: hidden; margin: 10px 5px 0;">
                                                        <canvas id="canvas_line1" height="200"></canvas>
                                                    </div>

                                                    <div style="text-align: center; margin-bottom: 15px;">
                                                        <div class="btn-group" role="group" aria-label="First group">
                                                            <button type="button" class="btn btn-default btn-sm">Day</button>
                                                            <button type="button" class="btn btn-default btn-sm">Month</button>
                                                            <button type="button" class="btn btn-default btn-sm">Year</button>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <ul class="list-inline widget_tally">
                                                            <li>
                                                                <p>
                                                                    <span class="month">12 December 2014 </span>
                                                                    <span class="count">+12%</span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <span class="month">29 December 2014 </span>
                                                                    <span class="count">+12%</span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <span class="month">16 January 2015 </span>
                                                                    <span class="count">+12%</span>
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-3 col-xs-12 widget widget_tally_box">
                                            <div class="x_panel fixed_height_390">
                                                <div class="x_title">
                                                    <h2>Sales Close</h2>
                                                    <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Settings 1</a>
                                                                </li>
                                                                <li><a href="#">Settings 2</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">

                                                    <div style="text-align: center; margin-bottom: 17px">
                                                        <ul class="verticle_bars list-inline">
                                                            <li>
                                                                <div class="progress vertical progress_wide bottom">
                                                                    <div class="progress-bar progress-bar-dark" role="progressbar" data-transitiongoal="65"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="progress vertical progress_wide bottom">
                                                                    <div class="progress-bar progress-bar-gray" role="progressbar" data-transitiongoal="85"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="progress vertical progress_wide bottom">
                                                                    <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="45"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="progress vertical progress_wide bottom">
                                                                    <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="75"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="divider"></div>

                                                    <ul class="legend list-unstyled">
                                                        <li>
                                                            <p>
                                                                <span class="icon"><i class="fa fa-square dark"></i></span> <span class="name">Item One Name</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span class="icon"><i class="fa fa-square grey"></i></span> <span class="name">Item Two Name</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span class="icon"><i class="fa fa-square blue"></i></span> <span class="name">Item Three Name</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <span class="icon"><i class="fa fa-square green"></i></span> <span class="name">Item Four Name</span>
                                                            </p>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-3 col-xs-12 widget widget_tally_box">
                                            <div class="x_panel ui-ribbon-container fixed_height_390">
                                                <div class="ui-ribbon-wrapper">
                                                    <div class="ui-ribbon">
                                                        30% Off
                                                    </div>
                                                </div>
                                                <div class="x_title">
                                                    <h2>User Mail</h2>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">

                                                    <div style="text-align: center; margin-bottom: 17px">
                                                        <span class="chart" data-percent="86">
                                                <span class="percent"></span>
                                                        </span>
                                                    </div>

                                                    <h3 class="name_title">Finance</h3>
                                                    <p>Short Description</p>

                                                    <div class="divider"></div>

                                                    <p>If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.</p>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-3 col-xs-12 widget widget_tally_box">
                                            <div class="x_panel fixed_height_390">
                                                <div class="x_content">

                                                    <div class="flex">
                                                        <ul class="list-inline widget_profile_box">
                                                            <li>
                                                                <a>
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <img src="http://localhost/personal/njoroge/assets3/130.jpg" alt="..." class="img-circle profile_img">
                                                            </li>
                                                            <li>
                                                                <a>
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <h3 class="name">Musimbi</h3>

                                                    <div class="flex">
                                                        <ul class="list-inline count2">
                                                            <li>
                                                                <h3>123</h3>
                                                                <span>Articles</span>
                                                            </li>
                                                            <li>
                                                                <h3>1234</h3>
                                                                <span>Followers</span>
                                                            </li>
                                                            <li>
                                                                <h3>123</h3>
                                                                <span>Following</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <p>
                                                        If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-xs-12 widget widget_tally_box">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Tally Design1</h2>
                                                    <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Settings 1</a>
                                                                </li>
                                                                <li><a href="#">Settings 2</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">

                                                    <div style="text-align: center; margin-bottom: 17px">
                                                        <span class="chart" data-percent="86">
                                                <span class="percent"></span>
                                                        </span>
                                                    </div>

                                                    <div class="pie_bg" style="text-align: center; display: none; margin-bottom: 17px">
                                                        <canvas id="canvas_doughnut" height="130"></canvas>
                                                    </div>

                                                    <div style="text-align: center;">
                                                        <div class="btn-group" role="group" aria-label="First group">
                                                            <button type="button" class="btn btn-default btn-sm">1 D</button>
                                                            <button type="button" class="btn btn-default btn-sm">1 W</button>
                                                            <button type="button" class="btn btn-default btn-sm">1 M</button>
                                                            <button type="button" class="btn btn-default btn-sm">1 Y</button>
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center; overflow: hidden; margin: 10px 5px 3px;">
                                                        <canvas id="canvas_line" height="190"></canvas>
                                                    </div>
                                                    <div>
                                                        <ul class="list-inline widget_tally">
                                                            <li>
                                                                <p>
                                                                    <span class="month">12 December 2014 </span>
                                                                    <span class="count">+12%</span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <span class="month">29 December 2014 </span>
                                                                    <span class="count">+12%</span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <span class="month">16 January 2015 </span>
                                                                    <span class="count">+12%</span>
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-3 col-xs-12 widget widget_tally_box">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Tally Design2</h2>
                                                    <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Settings 1</a>
                                                                </li>
                                                                <li><a href="#">Settings 2</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">

                                                    <div style="text-align: center; margin-bottom: 17px">
                                                        <span class="chart" data-percent="86">
                                                <span class="percent"></span>
                                                        </span>
                                                    </div>

                                                    <div class="pie_bg" style="text-align: center; display: none; margin-bottom: 17px">
                                                        <canvas id="canvas_doughnut2" height="130"></canvas>
                                                    </div>

                                                    <div style="text-align: center;">
                                                        <div class="btn-group" role="group" aria-label="First group">
                                                            <button type="button" class="btn btn-default btn-sm">1 D</button>
                                                            <button type="button" class="btn btn-default btn-sm">1 W</button>
                                                            <button type="button" class="btn btn-default btn-sm">1 M</button>
                                                            <button type="button" class="btn btn-default btn-sm">1 Y</button>
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center; overflow: hidden; margin: 10px 5px 3px;">
                                                        <canvas id="canvas_line2" height="190"></canvas>
                                                    </div>
                                                    <div>
                                                        <ul class="list-inline widget_tally">
                                                            <li>
                                                                <p>
                                                                    <span class="month">12 December 2014 </span>
                                                                    <span class="count">+12%</span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <span class="month">29 December 2014 </span>
                                                                    <span class="count">+12%</span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <span class="month">16 January 2015 </span>
                                                                    <span class="count">+12%</span>
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-3 col-xs-12 widget widget_tally_box">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Tally Design3</h2>
                                                    <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Settings 1</a>
                                                                </li>
                                                                <li><a href="#">Settings 2</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">

                                                    <div style="text-align: center; margin-bottom: 17px">
                                                        <span class="chart" data-percent="86">
                                                <span class="percent"></span>
                                                        </span>
                                                    </div>

                                                    <div class="pie_bg" style="text-align: center; display: none; margin-bottom: 17px">
                                                        <canvas id="canvas_doughnut3" height="130"></canvas>
                                                    </div>

                                                    <div style="text-align: center;">
                                                        <div class="btn-group" role="group" aria-label="First group">
                                                            <button type="button" class="btn btn-default btn-sm">1 D</button>
                                                            <button type="button" class="btn btn-default btn-sm">1 W</button>
                                                            <button type="button" class="btn btn-default btn-sm">1 M</button>
                                                            <button type="button" class="btn btn-default btn-sm">1 Y</button>
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center; overflow: hidden; margin: 10px 5px 3px;">
                                                        <canvas id="canvas_line3" height="190"></canvas>
                                                    </div>
                                                    <div>
                                                        <ul class="list-inline widget_tally">
                                                            <li>
                                                                <p>
                                                                    <span class="month">12 December 2014 </span>
                                                                    <span class="count">+12%</span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <span class="month">29 December 2014 </span>
                                                                    <span class="count">+12%</span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <span class="month">16 January 2015 </span>
                                                                    <span class="count">+12%</span>
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-3 col-xs-12 widget widget_tally_box">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Tally Design4</h2>
                                                    <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Settings 1</a>
                                                                </li>
                                                                <li><a href="#">Settings 2</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">

                                                    <div style="text-align: center; margin-bottom: 17px">
                                                        <span class="chart" data-percent="86">
                                                <span class="percent"></span>
                                                        </span>
                                                    </div>

                                                    <div class="pie_bg" style="text-align: center; display: none; margin-bottom: 17px">
                                                        <canvas id="canvas_doughnut4" height="130"></canvas>
                                                    </div>

                                                    <div style="text-align: center;">
                                                        <div class="btn-group" role="group" aria-label="First group">
                                                            <button type="button" class="btn btn-default btn-sm">1 D</button>
                                                            <button type="button" class="btn btn-default btn-sm">1 W</button>
                                                            <button type="button" class="btn btn-default btn-sm">1 M</button>
                                                            <button type="button" class="btn btn-default btn-sm">1 Y</button>
                                                        </div>
                                                    </div>
                                                    <div style="text-align: center; overflow: hidden; margin: 10px 5px 3px;">
                                                        <canvas id="canvas_line4" height="190"></canvas>
                                                    </div>
                                                    <div>
                                                        <ul class="list-inline widget_tally">
                                                            <li>
                                                                <p>
                                                                    <span class="month">12 December 2014 </span>
                                                                    <span class="count">+12%</span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <span class="month">29 December 2014 </span>
                                                                    <span class="count">+12%</span>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <span class="month">16 January 2015 </span>
                                                                    <span class="count">+12%</span>
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        
                                    </div>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |
                            <span class="lead"> <i class="fa fa-paw"></i> Gentelella Alela!</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
                
            </div>
            <!-- /page content -->

        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>

    <script src="js/custom.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- sparkline -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <!-- easypie -->
    <script src="js/easypie/jquery.easypiechart.min.js"></script>
    <script>
        $(function () {
            $('.chart').easyPieChart({
                easing: 'easeOutElastic',
                delay: 3000,
                barColor: '#26B99A',
                trackColor: '#fff',
                scaleColor: false,
                lineWidth: 20,
                trackWidth: 16,
                lineCap: 'butt',
                onStep: function (from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
            var chart = window.chart = $('.chart').data('easyPieChart');
            $('.js_update').on('click', function () {
                chart.update(Math.random() * 200 - 100);
            });
        });
    </script>

    <script>
        var lineChartData = {
            labels: ["", "", "", "", "", "", ""],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(38, 185, 154, 0.11)", //rgba(220,220,220,0.2)
                    strokeColor: "rgba(38, 185, 154, 0.7)", //rgba(220,220,220,1)
                    pointColor: "rgba(38, 185, 154, 0.7)", //rgba(220,220,220,1)
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [10, 30, 42, 23, 35, 55, 77]
            }
        ]

        }

        $(document).ready(function () {
            new Chart(document.getElementById("canvas_line").getContext("2d")).Line(lineChartData, {
                responsive: true,
                scaleShowLabels: false,
                tooltipFillColor: "rgba(51, 51, 51, 0.55)"
            });
        });
        $(document).ready(function () {
            new Chart(document.getElementById("canvas_line1").getContext("2d")).Line(lineChartData, {
                responsive: true,
                scaleShowLabels: false,
                tooltipFillColor: "rgba(51, 51, 51, 0.55)"
            });
        });
        $(document).ready(function () {
            new Chart(document.getElementById("canvas_line2").getContext("2d")).Line(lineChartData, {
                responsive: true,
                scaleShowLabels: false,
                tooltipFillColor: "rgba(51, 51, 51, 0.55)"
            });
        });
        $(document).ready(function () {
            new Chart(document.getElementById("canvas_line3").getContext("2d")).Line(lineChartData, {
                responsive: true,
                scaleShowLabels: false,
                tooltipFillColor: "rgba(51, 51, 51, 0.55)"
            });
        });
        $(document).ready(function () {
            new Chart(document.getElementById("canvas_line4").getContext("2d")).Line(lineChartData, {
                responsive: true,
                scaleShowLabels: false,
                tooltipFillColor: "rgba(51, 51, 51, 0.55)"
            });
        });

        var sharePiePolorDoughnutData = [
            {
                value: 125,
                color: "rgba(38, 185, 154, 0.7)",
                highlight: "rgba(38, 185, 154, 0.7)",
                label: ""
        },
            {
                value: 25,
                color: "rgba(38, 185, 154, 0.01)",
                highlight: "rgba(38, 185, 154, 0.01)",
                label: ""
        }
    ];
        $(document).ready(function () {
            window.myDoughnut = new Chart(document.getElementById("canvas_doughnut").getContext("2d")).Doughnut(sharePiePolorDoughnutData, {
                responsive: true,
                scaleShowLabels: false,
                segmentStrokeWidth: 2,
                tooltipFillColor: "rgba(51, 51, 51, 0.55)"
            });
        });
         $(document).ready(function () {
            window.myDoughnut = new Chart(document.getElementById("canvas_doughnut2").getContext("2d")).Doughnut(sharePiePolorDoughnutData, {
                responsive: true,
                scaleShowLabels: false,
                segmentStrokeWidth: 2,
                tooltipFillColor: "rgba(51, 51, 51, 0.55)"
            });
        });
         $(document).ready(function () {
            window.myDoughnut = new Chart(document.getElementById("canvas_doughnut3").getContext("2d")).Doughnut(sharePiePolorDoughnutData, {
                responsive: true,
                scaleShowLabels: false,
                segmentStrokeWidth: 2,
                tooltipFillColor: "rgba(51, 51, 51, 0.55)"
            });
        });
         $(document).ready(function () {
            window.myDoughnut = new Chart(document.getElementById("canvas_doughnut4").getContext("2d")).Doughnut(sharePiePolorDoughnutData, {
                responsive: true,
                scaleShowLabels: false,
                segmentStrokeWidth: 2,
                tooltipFillColor: "rgba(51, 51, 51, 0.55)"
            });
        });
    </script>
    <script>
        $('document').ready(function () {
            $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
                type: 'bar',
                height: '40',
                barWidth: 9,
                colorMap: {
                    '7': '#a1a1a1'
                },
                barSpacing: 2,
                barColor: '#26B99A'
            });

            $(".sparkline_two").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
                type: 'line',
                width: '200',
                height: '40',
                lineColor: '#26B99A',
                fillColor: 'rgba(223, 223, 223, 0.57)',
                lineWidth: 2,
                spotColor: '#26B99A',
                minSpotColor: '#26B99A'
            });
        })
    </script>
</body>

</html>