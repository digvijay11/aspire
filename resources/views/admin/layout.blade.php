<!DOCTYPE html>
<html>

<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>Accomplice</title>
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('public/img/favicon.png')}}">

    <!-- Angular material -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/skin/css/angular-material.min.css')}}">
    
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
    
    <!-- CSS - theme -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/skin/default_skin/select2.min.css')}}">
    <!-- IE8 HTML5 support -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
    body{ min-height:600px; }
    aside#sidebar_left{padding-top: 0px !important; margin-top:0px !important; }
    #content_wrapper{margin-left: 0px;}
    body.sb-top #sidebar_left{text-align: left;}
    body.sb-top.sb-top-lg #sidebar_left.affix + #content_wrapper{padding-top: 0px !important;}
    li.logo{
    width: 150px;
    border-radius: 0px !important;}
    body.sb-top #sidebar_left .sidebar-menu > li + li{margin-left: 1px;}
    #content{padding: 117px 2px 10px 2px !important;}
    body.sb-top #sidebar_left .sidebar-menu > li > ul{padding: 0px;}
    #trigger{ margin-left: 0px; position: fixed;  z-index: 100; }
    #slider.crawler-widget ul.crawler-list .crawler-item{
        border-bottom:1px solid #000;
        border-top:0px solid #000;
    }
    #slider.crawler-widget ul.crawler-list .crawler-item+.crawler-item{margin-top: 0px;}
    #slider.crawler-widget ul.crawler-list .crawler-item .crawler-desc{
    margin-left: 0px;
    padding: 4px 10px;
    font-size: 12px;
    display: block;
    padding-left: 10px !important; }

    #slider.crawler-widget ul.crawler-list .crawler-item .crawler-date{
    max-width: 38px;
    font-size: 12px;
    padding: 7px 1px;
    right: 5px;}
    #trigger{       
    margin-left: -30px;
    position: fixed;
    z-index: 100;
    height: 100vh;
    background-color: red;
    width: 11px;
    margin-top:0spx;
    border-radius: 0px;
    }
    #trigger .fa{font-size: 3em; margin-left: -2px;}
    .tab-pill li{ height: auto !important;; }
    .tab-pill > li > a > i{display: none !important;}
    .tab-pill > li > a {padding: 15px 0px 15px !important;}
    .content_container .content-right{
    width: 90%; 
    background-color: #fff !important;
    -webkit-box-shadow:none;
    }
    #content {
        padding: 135px 30px 50px 31px !important;
    }
    #content .panel{ 
        border-radius: 0px;    
        -webkit-box-shadow:none;
        box-shadow:0 0px 0 #e5eaee;
        margin-bottom: 0px !important;
        padding: 0px 15px !important; 
    }
    .panel-body{padding:15px 0px;}
    .content_container .nav-content > li.active, .content_container .nav-content > li:hover, .content_container .nav-content > li:focus{background-color: #fff;}

</style>
<!----In Page -->
@yield('style')

</head>

<body class="sb-top sb-top-lg">

<!-- Body Wrap -->
<div id="main">
@include('admin.sidebar')
    <!-- Main Wrapper -->
    <!--section id="left_sidebar">
        <ul class="crawler-list">
            <li class="crawler-item primary">
                <div class="crawler-handle">
                    <i class="imoon imoon-google"></i>
                </div>
                <div class="crawler-desc">
                    Google Bot
                    <span class="crawler-date">17%</span>
                </div>
            </li>
            <li class="crawler-item item-alert">
                <div class="crawler-handle">
                    <i class="imoon imoon-blogger"></i>
                </div>
                <div class="crawler-desc">
                    Bing Bot
                    <span class="crawler-date">24%</span>
                </div>
            </li>
        </ul>    
    </section-->    
                <button id='trigger' class="btn"><i class="fa fa-angle-right"></i></button>
    <section id="content_wrapper" class="container1">
        <section class="content_container">
            <!-- Content -->
            <section id="content" class="animated fadeIn">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
                @yield('content')
            </section>
            <!-- /Content -->
        </section>
    </section>

</div>
<div id='slider' class="crawler-widget" style="margin-top:100px;background-color: #fff;z-index: 100">
     <ul class="crawler-list">
        <li class="crawler-item primary">
            <div class="crawler-desc">
                Google Bot
                <span class="crawler-date text-center">112</span>
            </div>
        </li>
        <li class="crawler-item item-alert">
            <div class="crawler-desc">
                Bing Bot
                <span class="crawler-date text-center">242</span>
            </div>
        </li>
        <li class="crawler-item item-alert">
            <div class="crawler-desc">
                Bing Bot
                <span class="crawler-date text-center">242</span>
            </div>
        </li>
        <li class="crawler-item item-alert">
            <div class="crawler-desc">
                Bing Bot
                <span class="crawler-date text-center">242</span>
            </div>
        </li>
        <li class="crawler-item item-alert">
            <div class="crawler-desc">
                Bing Bot
                <span class="crawler-date text-center">242</span>
            </div>
        </li>
        <li class="crawler-item system">
            <div class="crawler-desc">
                Managed Properties
                <span class="crawler-date text-center">314</span>
            </div>
        </li>
        <li class="crawler-item item-alert">
            <div class="crawler-desc">
                To Let Properties
                <span class="crawler-date text-center">242</span>
            </div>
        </li>
        <li class="crawler-item item-alert">
            <div class="crawler-desc">
                Bing Bot
                <span class="crawler-date text-center">242</span>
            </div>
        </li>
        <li class="crawler-item item-alert">
            <div class="crawler-desc">
                Bing Bot
                <span class="crawler-date text-center">242</span>
            </div>
        </li>
        <li class="crawler-item item-alert">
            <div class="crawler-desc">
                Bing Bot
                <span class="crawler-date text-center">242</span>
            </div>
        </li>
        <li class="crawler-item system">
            <div class="crawler-desc">
                For Sales Properties
                <span class="crawler-date text-center">314</span>
            </div>
        </li>
        <li class="crawler-item item-alert">
            <div class="crawler-desc">
                Bing Bot
                <span class="crawler-date text-center">242</span>
            </div>
        </li>
        <li class="crawler-item item-alert">
            <div class="crawler-desc">
                Bing Bot
                <span class="crawler-date text-center">242</span>
            </div>
        </li>
        <li class="crawler-item item-alert">
            <div class="crawler-desc">
                Bing Bot
                <span class="crawler-date text-center">242</span>
            </div>
        </li>
        
    </ul>


</div>
<!-- /Body Wrap  -->
<!-- Scripts -->
<!-- jQuery -->
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
<script src="{{ URL::asset('public/js/slideReveal.min.js')}}"></script>
<!-- Theme Scripts -->
<script src="{{ URL::asset('public/js/utility/utility.js')}}"></script>
<script src="{{ URL::asset('public/js/demo/demo.js')}}"></script>
<script src="{{ URL::asset('public/js/main.js')}}"></script>
<script src="{{ URL::asset('public/js/demo/widgets_sidebar.js')}}"></script>
<script src="{{ URL::asset('public/js/pages/dashboard_init.js')}}"></script>
<script src="{{ URL::asset('public/js/select2.min.js')}}"></script>
<script src="{{ URL::asset('public/js/plugins/pnotify/pnotify.js')}}"></script>


<script src="{{ URL::asset('public/allcp/forms/js/jquery-ui-datepicker.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(".select2").select2();
    $('#slider').slideReveal({
  trigger: $("#trigger")
});
    $(".datepicker").datepicker({dateFormat: "dd-mm-yy"});
    // body...
})
function notify(title,text,noteStyle)
{   
    if(title!='')
       { 
        new PNotify({
                    title:title, text: text,
                    addclass: 'stack_top_right',
                    type:noteStyle,
                    stack: {"dir1": "down","dir2": "right","push": "top","spacing1": 0,"spacing2": 0},
                    width: '30%',
                    delay: 3000
                });
       } 
}
function formError()
{
    var html='';
@if ($errors->has())
    @foreach ($errors->all() as $error)
        html+="{{$error}}<br/>"
    @endforeach
    notify('Errors',html,'danger');
@endif

}
@if(Session::has('success'))
    notify("{{Session::get('success')}}",'','success');
@elseif (Session::has('error'))
    notify("{{Session::get('error')}}",'','danger');
@elseif (Session::has('info'))
    notify("{{Session::get('info')}}",'','info');
@endif
formError();
</script>
<!-- /Scripts -->

</body>

</html>