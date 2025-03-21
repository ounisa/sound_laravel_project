<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DJoz | Template</title>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/album.css') }}">
</head>

<body>

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

<div class="container my-5">
<div class="col-lg-7">
                <div class="section-title">
                    <h2>Popular Album</h2>
                    <h1>sounds</h1>
                </div>
            </div>    <div class="row">
        @foreach($songs as $song)
            <div class="col-md-4 my-3">
                <div class="card">
                    <img src="{{ url('songimage/' . $song->image) }}" class="card-img-top" alt="Song Image" style="height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $song->song }}</h5>
                        <audio controls>
                            <source src="{{ url('songfile/' . $song->file) }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


      



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
                                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
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