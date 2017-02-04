<!DOCTYPE html>
<html>
<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>Proect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('public/img/favicon.png')}}">

    <!-- Angular material -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/skin/css/angular-material.min.css') }}">
    
    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/fonts/icomoon/icomoon.css')}}">    
    
    <!-- AnimatedSVGIcons -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/fonts/animatedsvgicons/css/codropsicons.css')}}">
    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/allcp/forms/css/forms.css')}}">
    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css')}}">
    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/skin/default_skin/less/theme.css')}}">

    <!-- IE8 HTML5 support -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="utility-page sb-l-c sb-r-c">

<!-- Body Wrap -->
<div id="main" class="animated fadeIn">

    <!-- Main Wrapper -->
    <section id="content_wrapper">
        <!-- Content -->
        <section id="content">
            @yield('content')
        </section>
        <!-- /Content -->

    </section>
    <!-- /Main Wrapper -->

</div>


<script src="{{ URL::asset('public/js/jquery/jquery-1.12.3.min.js')}}"></script>
<script src="{{ URL::asset('public/js/jquery/jquery_ui/jquery-ui.min.js')}}"></script>
<!-- AnimatedSVGIcons -->
<script src="{{ URL::asset('public/fonts/animatedsvgicons/js/snap.svg-min.js')}}"></script>
<script src="{{ URL::asset('public/fonts/animatedsvgicons/js/svgicons-config.js')}}"></script>
<script src="{{ URL::asset('public/fonts/animatedsvgicons/js/svgicons.js')}}"></script>
<script src="{{ URL::asset('public/fonts/animatedsvgicons/js/svgicons-init.js')}}"></script>
<!-- HighCharts Plugin -->
<script src="{{ URL::asset('public/js/plugins/highcharts/highcharts.js')}}"></script>
<!-- Scroll -->
<script src="{{ URL::asset('public/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ URL::asset('public/js/select2.min.css')}}"></script>
<script type="text/javascript">
   $(document).ready(function() {
       $(".select2").select2();
   });
</script>
<!-- Theme Scripts --
<script src="{{ URL::asset('public/js/utility/utility.js')}}"></script>
<script src="{{ URL::asset('public/js/demo/demo.js')}}"></script>
<script src="{{ URL::asset('public/js/main.js')}}"></script>
<script src="{{ URL::asset('public/js/demo/widgets_sidebar.js')}}"></script>
<script src="{{ URL::asset('public/js/pages/dashboard_init.js')}}"></script>
<!-- /Scripts -->
</body>

</html>

