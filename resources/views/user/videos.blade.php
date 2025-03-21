<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DJoz | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/barfiller.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/nowfont.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/rockville.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/videos.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
  <!-- Header Section Begin -->
 <header class="header header--normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="header__logo">
                    <a href="{{URL::to('/index')}}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                    <ul>
                                <li class="active"><a href="{{URL::to('/index')}}">Home</a></li>
                                <li><a href="{{URL::to('/videos')}}">Videos</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="{{URL::to('/artist')}}">Popular Artists</a></li>
                                        <li><a href="{{URL::to('/albumpage')}}">Popular Albums</a></li>
                                        <li><a href="{{URL::to('/year')}}">Year</a></li>
                                    </ul>
                                <li><a href="{{URL::to('/add_feedback')}}">Contact</a></li>

    @if(Auth::id())
    <li class="nav-item">
        <x-app-layout>
        </x-app-layout>
    </li>
@else
    <li class="nav-item"><a href="/register" class="nav-link">Sign_up</a></li>
    <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
@endif

                            </ul>
                    </nav>
                   
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header Section End --> 
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{URL::to('/index')}}"><i class="fa fa-home"></i> Home</a>
                        <span>Videos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Video Section Begin -->
    <section class="videos spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>Live Concert</h2>
                        <h1>Latest videos</h1>
                    </div>
                    <div class="videos__large__item set-bg" data-setbg="{{ asset('img/videos/large-item.jpg') }}">
                        <a href="https://www.youtube.com/watch?v=MA9hbox27Zc" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        <div class="videos__large__item__text">
                            <h4>ATIF ASLAM & NEHA KAKKAR|DIL DIYAN GALLAN|UNPLUGGED|LIVE</h4>
                            <ul>
                                <li>05:04</li>
                                <li>Dec 17, 2018</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="videos__slider owl-carousel">
                            <div class="col-lg-3">
                                <div class="videos__item">
                                    <div class="videos__item__pic set-bg" data-setbg="{{ asset('img/videos/videos-1.jpg') }}">
                                        <a href="https://www.youtube.com/watch?v=a_0kgAUe1Ds" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5>One Direction performs 'Steal My Girl' | BBC Music Awards 2014 - BBC
                                        </h5>
                                        <ul>
                                            <li>03:57</li>
                                            <li>jan 08, 2016</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="videos__item">
                                    <div class="videos__item__pic set-bg" data-setbg="{{ asset('img/videos/videos-2.jpg') }}">
                                        <a href="https://www.youtube.com/watch?v=t5yyqXdhLjA" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5>Imagine Dragons - I'm So Sorry - LIVE in Vegas
                                        </h5>
                                        <ul>
                                            <li>03:58</li>
                                            <li>June 03, 2023</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="videos__item">
                                    <div class="videos__item__pic set-bg" data-setbg="{{ asset('img/videos/videos-3.jpg') }}">
                                        <a href="https://www.youtube.com/watch?v=3nQNiWdeH2Q?autoplay=1" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5>Imagine Dragons - Believer (Live in Vegas)</h5>
                                        <ul>
                                            <li>04:40</li>
                                            <li>Aug 08, 2019</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="videos__item">
                                    <div class="videos__item__pic set-bg" data-setbg="{{ asset('img/videos/videos-4.jpg') }}">
                                        <a href="https://www.youtube.com/watch?v=aEZWikWUcV8" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5>Justin Bieber Baby Live concert</h5>
                                        <ul>
                                            <li>03:30</li>
                                            <li>Sep 24, 2012</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="videos__item">
                                    <div class="videos__item__pic set-bg" data-setbg="{{ asset('img/videos/videos-3.jpg') }}">
                                        <a href="https://www.youtube.com/watch?v=Fpn1imb9qZg" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                    </div>
                                    <div class="videos__item__text">
                                        <h5>Coldplay - A Sky Full Of Stars (Live at River Plate)
                                        </h5>
                                        <ul>
                                            <li>04:48</li>
                                            <li>Dec 21, 2023</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer footer--normal spad set-bg" data-setbg="{{ asset('img/footer-bg.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Phone</p>
                                <h6>1-677-124-44227</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6>DJ.Music@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2>SOUND</h2>
                        <div class="footer__social__links">
                            <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <h4>Stay With me</h4>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

   <!-- Js Plugins -->
<script src="{{ asset('jsfiles/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('jsfiles/bootstrap.min.js') }}"></script>
<script src="{{ asset('jsfiles/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('jsfiles/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('jsfiles/jquery.barfiller.js') }}"></script>
<script src="{{ asset('jsfiles/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('jsfiles/jquery.slicknav.js') }}"></script>
<script src="{{ asset('jsfiles/owl.carousel.min.js') }}"></script>
<script src="{{ asset('jsfiles/main.js') }}"></script>

<!-- Music Plugin -->
<script src="{{ asset('jsfiles/jquery.jplayer.min.js') }}"></script>
<script src="{{ asset('jsfiles/jplayerInit.js') }}"></script>

</body>

</html>