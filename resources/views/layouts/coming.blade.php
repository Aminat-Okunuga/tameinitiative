<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>{{config('app.motto',"The African Music Evolution")}}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Css Files -->
    <link href="{{asset('assets')}}/css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/font-awesome.css" rel="stylesheet">
    <link href={{asset('assets')}}/css/flaticon.css" rel="stylesheet">
    <link href="{{asset('assets')}}/style.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/color.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/color-one.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/color-two.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/slick-slider.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/prettyphoto.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/jplayer.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="wm-main-wrapper">
        <div class="muscibeat-loading-section">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        @yield('content')
        <div class="clearfix"></div>
    </div>

    <!-- jQuery (necessary for JavaScript plugins) -->
    <script type="text/javascript" src="{{asset('assets')}}/script/jquery.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/modernizr.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/jquery-ui.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/jquery.prettyphoto.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/fitvideo.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/skills.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/slick.slider.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/jquery.jplayer.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/jplayer.playlist.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/moment.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/fullcalendar.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/waypoints-min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/isotope.min.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/functions.js"></script>
    <script type="text/javascript" src="{{asset('assets')}}/script/jplayer.functions.js"></script>

    <script src="js/app.js"></script>
    @yield('requiredJs')
</body>

</html>
