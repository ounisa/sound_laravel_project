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
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/year.css') }}" type="text/css">


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
 <div class="contain2">

    <div class="col-lg-7">
        <div class="section-title">
            <h2>Year</h2>
            <h1>sounds</h1>
        </div>
    </div> 
    <!-- Year Selection Section -->
    <div class="year-container">
        <div class="year" data-year="2020">
            <img src="/build/assets/images/2020.jpeg" alt="2020">
            <span>2020</span>
        </div>
        <div class="year" data-year="2021">
            <img src="/build/assets/images/2021.jpeg" alt="2021">
            <span>2021</span>
        </div>
        <div class="year" data-year="2022">
            <img src="/build/assets/images/2022.jpeg" alt="2022">
            <span>2022</span>
        </div>
        <div class="year" data-year="2023">
            <img src="/build/assets/images/2023.jpeg" alt="2023">
            <span>2023</span>
        </div>
        <div class="year" data-year="2024">
            <img src="/build/assets/images/2024.jpeg" alt="2024">
            <span>2024</span>
        </div>
    </div>

    <!-- Song Playlist Section -->
    <div class="playlist-container" id="playlist">
        <h3>Select a year to see the songs</h3>
    </div>

    <!-- Player Section -->
    <div class="player-container" id="player">
        <img id="player-image" src="" alt="Song Image" style="display: none;">
        <audio id="audio-player" controls>
            <source id="audio-source" src="" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    </div>
</div>

 <!-- Footer Section Begin -->
 <footer class="footer footer--normal spad set-bg" data-setbg="img/footer-bg.png">
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


<script>
    document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.year').forEach(function (yearDiv) {
        yearDiv.addEventListener('click', function () {
            var year = this.getAttribute('data-year');
            fetch('/get-songs-by-year?year=' + year)
                .then(response => response.json())
                .then(data => {
                    var playlist = document.getElementById('playlist');
                    playlist.innerHTML = '<h3>Songs for ' + year + ':</h3><ul>';
                    data.forEach(song => {
                        playlist.innerHTML += '<li>' + song.title + ' - <button onclick="playSong(\'' + song.file + '\', \'' + song.image + '\')">Play</button></li>';
                    });
                    playlist.innerHTML += '</ul>';
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });
    });
    
    function playSong(file, image) {
    var player = document.getElementById('audio-player');
    var audioSource = document.getElementById('audio-source');
    var playerImage = document.getElementById('player-image');
    
    audioSource.src = file;
    player.load();
    playerImage.src = image;
    playerImage.style.display = 'block';
    player.play();
    }
    </script>

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