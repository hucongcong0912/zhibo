<!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' media="all" />
    <!-- //bootstrap -->
    <link href="{{ asset('css/dashboard.css') }} " rel="stylesheet">
    <!-- Custom Theme files -->
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' media="all" />
    <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <!--start-smoth-scrolling-->
    <!-- fonts -->
    <!-- <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Poiret+One' rel='stylesheet' type='text/css'> -->
    <!-- //fonts -->
</head>
<body>

@section('header')
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{asset('index/index')}}"><h1><img src="{{ asset('images/logo.png') }}" alt="" /></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="top-search">
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                    <input type="submit" value=" ">
                </form>
            </div>


            <div class="header-top-right">
                {{--<div class="file">--}}
                    {{--<a href="upload.html">Upload</a>--}}
                {{--</div>--}}

                <div class="signin">
                    <a href="#small-dialog2" class="play-icon popup-with-zoom-anim">注册</a>
                    <!-- pop-up-box -->
                    <script type="text/javascript" src="{{ asset('js/modernizr.custom.min.js') }}"></script>
                    <link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
                    <script src="{{asset('js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
                    <!--//pop-up-box -->
                    <div id="small-dialog2" class="mfp-hide">
                        <h3>注册</h3>
                        <div class="social-sits">
                            <div class="facebook-button">
                                <a href="javascript:void (0)">QQ登录</a>
                            </div>
                            <div class="chrome-button">
                                <a href="javascript:void (0)">微博登录</a>
                            </div>
                            <div class="button-bottom">
                                <p>已有账号去<a href="#small-dialog" class="play-icon popup-with-zoom-anim">登录</a></p>
                            </div>
                        </div>

                        <div class="signup">
                            <form>
                                <input type="text" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" required="required" placeholder="Enter email / mobile" class="email">
                                <input type="password" autocomplete="off" title="Minimum 6 characters required" pattern=".{6,}" required="required" placeholder="Password">
                                <input type="submit" value="注册">
                            </form>

                        </div>



                        <div class="clearfix"> </div>
                    </div>



                    <script>
                        $(document).ready(function() {
                            $('.popup-with-zoom-anim').magnificPopup({
                                type: 'inline',
                                fixedContentPos: false,
                                fixedBgPos: true,
                                overflowY: 'auto',
                                closeBtnInside: true,
                                preloader: false,
                                midClick: true,
                                removalDelay: 300,
                                mainClass: 'my-mfp-zoom-in'
                            });

                        });
                    </script>
                </div>


                <div class="signin">
                    <a href="#small-dialog" class="play-icon popup-with-zoom-anim">登录</a>
                    <div id="small-dialog" class="mfp-hide">
                        <h3>登录</h3>
                        <div class="social-sits">
                            <div class="facebook-button">
                                <a href="javascript:void (0)">QQ登录</a>
                            </div>
                            <div class="chrome-button">
                                <a href="javascript:void (0)">微博登录</a>
                            </div>
                            <div class="button-bottom">
                                <p>没有账号去<a href="#small-dialog2" class="play-icon popup-with-zoom-anim">注册</a></p>
                            </div>
                        </div>
                        <div class="signup">
                            <form>
                                <input type="text" class="email" placeholder="Enter email / mobile" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?"/>
                                <input type="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
                                <input type="submit"  value="登录"/>
                            </form>

                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>


        </div>
        <div class="clearfix"> </div>
    </div>
</nav>
@show()



@section('left')
    <div class="col-sm-3 col-md-2 sidebar">



        <div class="drop-navigation drop-navigation">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="{{url('index/index')}}" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>我的订阅</a></li>
                <li><a href="{{url('index/all')}}" class="user-icon"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>全部直播</a></li>
                <li><a href="{{url('index/index')}}" class="sub-icon"><span class="glyphicon glyphicon-home glyphicon-hourglass" aria-hidden="true"></span>全部分类</a></li>

                <li>
                    <a href="javascript:void (0)" class="menu1">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>网游竞技
                        <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
                    </a>
                </li>
                <ul class="cl-effect-1" style="display: none">
                    <li><a href="{{ asset('index/all') }}">英雄联盟</a></li>
                    <li><a href="movies.html">穿越火线</a></li>
                    <li><a href="movies.html">DNF</a></li>
                    <li><a href="movies.html">魔兽DOTA</a></li>
                </ul>
                <!-- script-for-menu -->
                <script>
                    $( "li a.menu1" ).click(function() {
                        $( "ul.cl-effect-1" ).slideToggle( 300, function() {
                            // Animation complete.
                        });
                    });
                </script>



                <li>
                    <a href="javascript:void (0)" class="menu2">
                        <span class="glyphicon glyphicon-film" aria-hidden="false"></span>手游休闲<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
                    </a>
                </li>
                <ul class="cl-effect-2" style="display: none">
                    <li><a href="movies.html">English</a></li>
                    <li><a href="movies.html">Chinese</a></li>
                    <li><a href="movies.html">Hindi</a></li>
                </ul>
                <!-- script-for-menu -->
                <script>
                    $( "li a.menu2" ).click(function() {
                        $( "ul.cl-effect-2" ).slideToggle( 300, function() {
                            // Animation complete.
                        });
                    });
                </script>






                <li>
                    <a href="javascript:void (0)" class="menu3">
                        <span class="glyphicon glyphicon-film glyphicon-king" aria-hidden="true"></span>单级热游<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
                    </a>
                </li>
                <ul class="cl-effect-3" style="display: none">
                    <li><a href="sports.html">Football</a></li>
                    <li><a href="sports.html">Cricket</a></li>
                    <li><a href="sports.html">Tennis</a></li>
                    <li><a href="sports.html">Shattil</a></li>
                </ul>
                <!-- script-for-menu -->
                <script>
                    $( "li a.menu3" ).click(function() {
                        $( "ul.cl-effect-3" ).slideToggle( 300, function() {
                            // Animation complete.
                        });
                    });
                </script>


                <li>
                    <a href="javascript:void (0)" class="menu4">
                        <span class="glyphicon glyphicon-film glyphicon-king" aria-hidden="true"></span>娱乐天地<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
                    </a>
                </li>
                <ul class="cl-effect-4" style="display: none">
                    <li><a href="sports.html">Football</a></li>
                    <li><a href="sports.html">Cricket</a></li>
                    <li><a href="sports.html">Tennis</a></li>
                    <li><a href="sports.html">Shattil</a></li>
                </ul>
                <!-- script-for-menu -->
                <script>
                    $( "li a.menu4" ).click(function() {
                        $( "ul.cl-effect-4" ).slideToggle( 300, function() {
                            // Animation complete.
                        });
                    });
                </script>



                <li>
                    <a href="javascript:void (0)" class="menu5" >
                        <span class="glyphicon glyphicon-film glyphicon-king" aria-hidden="true"></span>123<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
                    </a>
                </li>
                <ul class="cl-effect-5" style="display: none">
                    <li><a href="sports.html">Football</a></li>
                    <li><a href="sports.html">Cricket</a></li>
                    <li><a href="sports.html">Tennis</a></li>
                    <li><a href="sports.html">Shattil</a></li>
                </ul>
                <!-- script-for-menu -->
                <script>
                    $( "li a.menu5" ).click(function() {
                        $( "ul.cl-effect-5" ).slideToggle( 300, function() {
                            // Animation complete.
                        });
                    });
                </script>
                
            </ul>
            <!-- script-for-menu -->
            <script>
                $( ".top-navigation" ).click(function() {
                    $( ".drop-navigation" ).slideToggle( 300, function() {
                        // Animation complete.
                    });
                });
            </script>

        </div>


    </div>
@show()





{{--中部--}}
@yield('content')
{{--中部--}}




<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->


</body>
</html>