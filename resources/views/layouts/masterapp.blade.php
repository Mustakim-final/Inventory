<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Moltran - Responsive Admin Dashboard Template</title>

        <!-- Base Css Files -->
        <link href="{{ asset('front') }}/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{ asset('front') }}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="{{ asset('front') }}/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="{{ asset('front') }}/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="{{ asset('front') }}/css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{ asset('front') }}/css/waves-effect.css" rel="stylesheet">

        <!-- Custom Files -->
        <link href="{{ asset('front') }}/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('front') }}/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ asset('front') }}/js/modernizr.min.js"></script>

    </head>

    <body class="fixed-left">

        @yield('content')

	    <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('front') }}/js/jquery.min.js"></script>
        <script src="{{ asset('front') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('front') }}/js/waves.js"></script>
        <script src="{{ asset('front') }}/js/wow.min.js"></script>
        <script src="{{ asset('front') }}/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="{{ asset('front') }}/js/jquery.scrollTo.min.js"></script>
        <script src="{{ asset('front') }}/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="{{ asset('front') }}/assets/jquery-detectmobile/detect.js"></script>
        <script src="{{ asset('front') }}/assets/fastclick/fastclick.js"></script>
        <script src="{{ asset('front') }}/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="{{ asset('front') }}/assets/jquery-blockui/jquery.blockUI.js"></script>


        <!-- CUSTOM JS -->
        <script src="{{ asset('front') }}/js/jquery.app.js"></script>

	</body>
</html>
