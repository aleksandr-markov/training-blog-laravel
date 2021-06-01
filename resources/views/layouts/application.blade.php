{{--<!DOCTYPE html>--}}
{{--<head>--}}
{{--    <title>Skadi</title>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">--}}
{{--    <link href="user/styles/layout.css" rel="stylesheet" type="text/css" media="all">--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"--}}
{{--          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body id="top">--}}


{{--<div class="wrapper row1">--}}
{{--    <header id="header" class="hoc clear">--}}
{{--        <section>--}}

{{--            <div>--}}
{{--                <h1 id="logo"><a href="/">Skadi</a></h1>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <form class="clear" method="post" action="#">--}}
{{--                    <fieldset>--}}
{{--                        <legend>Search:</legend>--}}
{{--                        <input type="search" value="" placeholder="Search Here&hellip;">--}}
{{--                        <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>--}}
{{--                    </fieldset>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--            <!-- ################################################################################################ -->--}}
{{--        </section>--}}
{{--        <nav id="mainav">--}}
{{--            <!-- ################################################################################################ -->--}}
{{--            <ul class="clear">--}}
{{--                <li class="active"><a href="/">Home</a></li>--}}

{{--                <li><a class="drop" href="#">Category</a>--}}
{{--                    <ul>--}}
{{--                        @foreach($navCategories as $category)--}}
{{--                            @if(count($category->children) == 0)--}}
{{--                                <li><a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a></li>--}}
{{--                            @elseif(count($category->children) >= 1)--}}
{{--                                <li><a class="drop"--}}
{{--                                       href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a>--}}
{{--                                    <ul>--}}
{{--                                        @foreach($category->children as $child)--}}
{{--                                            <li>--}}
{{--                                                <a href="{{ route('category.show', $child->id) }}">{{ $child->name }}</a>--}}
{{--                                            </li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                            @endif--}}
{{--                                                                                    <li><a href="#">{{ $category->name }}</a></li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li><a href="/login">Login</a></li>--}}
{{--                <li><a href="/register">Registration</a></li>--}}
{{--                                <li><a href="#">Link Text</a></li>--}}
{{--                                <li><a href="#">Long Link Text</a></li>--}}
{{--            </ul>--}}
{{--            <!-- ################################################################################################ -->--}}
{{--        </nav>--}}
{{--    </header>--}}

{{--    <body>--}}
{{--    @yield('content')--}}
{{--    </body>--}}
{{--</div>--}}


    <!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="/user/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/user/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/user/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/user/css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="/user/css/flexslider.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="/user/css/style.css">
{{--    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">--}}

<!-- Modernizr JS -->
    <script src="/user/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="/user/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>


<div class="fh5co-loader"></div>

<div id="page">

    <nav class="fh5co-nav" role="navigation">
        <div class="container-wrap">
            <div class="top-menu">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="/">Skadi</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            {{--                            <li><a href="index.html">Home</a></li>--}}
                            {{--                            <li><a href="about.html">About</a></li>--}}
                            {{--                            <li><a href="contact.html">Contact</a></li>--}}
                            <li class="has-dropdown active">
                                <a href="/">Blog</a>
                                <ul class="dropdown">
                                    @foreach($navCategories as $category)
                                        <li><a href="{{ route('category', $category->id) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                            @if(Auth::user())
                                <li class="has-dropdown ">
                                    <a href="/">{{ Auth::user()->name }}</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Account</a></li>
                                        <li><a href="{{ route('homePage') }}">Admin Panel</a></li>
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit"> Logout</button>
                                        </form>
                                    </ul>
                                </li>
                            @else
                                <li><a href="/login">login</a></li>
                                <li><a href="/registr">sign up</a></li>
                            @endif
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    @yield('content')

    <div class="container-wrap">
        <footer id="fh5co-footer" role="contentinfo">
            <div class="row">
                <div class="col-md-3 fh5co-widget">
                    <h4>About Skadi</h4>
                    <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta
                        adipisci architecto culpa amet.</p>
                </div>
                <div class="col-md-3 col-md-push-1">
                    <h4>Latest Posts</h4>
                    <ul class="fh5co-footer-links">
                        @foreach($postsLatest as $post)
                        <li><a href="{{ route('post', $post->id) }}">{{ $post->title }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-3 col-md-push-1">
                    <h4>Links</h4>
                    <ul class="fh5co-footer-links">
                        @foreach($navCategories as $category)
                        <li><a href="{{ route('category', $category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-3">
                    <h4>Contact Information</h4>
                    <ul class="fh5co-footer-links">
                        <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                        <li><a href="mailto:markovvvv.aleksandr@gmail.com">markovvvv.aleksandr@gmail.com</a></li>
                    </ul>
                </div>

            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">&copy; 2021 Markov.</small>
                    </p>
                    <p>
                    <ul class="fh5co-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                    </p>
                </div>
            </div>
        </footer>
    </div><!-- END container-wrap -->
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>
<script src="https://kit.fontawesome.com/c3e6f74f9a.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="/user/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="/user/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="/user/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/user/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="/user/js/jquery.flexslider-min.js"></script>
<!-- Magnific Popup -->
<script src="/user/js/jquery.magnific-popup.min.js"></script>
<script src="/user/js/magnific-popup-options.js"></script>
<!-- Counters -->
<script src="/user/js/jquery.countTo.js"></script>
<!-- Main -->
<script src="/user/js/main.js"></script>

</body>
</html>

