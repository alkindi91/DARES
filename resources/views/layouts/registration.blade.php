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
        نظام التعليم عن بعد |
        @show
    </title>

    <!-- Bootstrap core CSS -->

    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/bootstrap-rtl.min.css') }}" rel="stylesheet">

    <link href="{{ asset('template/fonts/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ asset('template/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/icheck/flat/green.css') }}" rel="stylesheet">


    <script src="{{ asset('template/js/jquery.min.js') }}"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
@section('header')
@show
</head>

<body style="background:#F7F7F7;">
    
   
      

        <div id="container" class='container' style='width: 1170px;'>
           <div class="row">
               <div class="col-md-12">
               <img src="{{ asset('assets/img/logo.png') }}" alt="@lang('global.title')" style='margin:20px auto 20px auto;display:block'>
                   <div class="panel panel-white">
                       <div class="panel-heading text-center">
                           <h3>طلب التحاق بالتعليم عن بعد</h3>
                           <h2>@section('heading') @show</h2>
                       </div>
                       <div class="panel-body">
                          @yield('content')
                       </div>
                   </div>
               </div>
           </div>
        </div>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/custom.js') }}"></script>
@section('footer')
@show
</body>

</html>