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
    <link rel="stylesheet" href="{{ asset('http://127.0.0.1:8000/css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('http://127.0.0.1:8000/css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('http://127.0.0.1:8000/css/barfiller.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('http://127.0.0.1:8000/css/nowfont.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('http://127.0.0.1:8000/css/rockville.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('http://127.0.0.1:8000/css/magnific-popup.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('http://127.0.0.1:8000/css/owl.carousel.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('http://127.0.0.1:8000/css/slicknav.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('http://127.0.0.1:8000/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('http://127.0.0.1:8000/css/artist.css') }}">
<link rel="stylesheet" href="{{ asset('http://127.0.0.1:8000/css/year.css') }}">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <a href="http://127.0.0.1:8000/index"><img src="http://127.0.0.1:8000/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="http://127.0.0.1:8000/index">Home</a></li>
                                <li><a href="http://127.0.0.1:8000/videos">Videos</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="http://127.0.0.1:8000/artist">Popular Artists</a></li>
                                        <li><a href="http://127.0.0.1:8000/albumpage">Popular Albums</a></li>
                                        <li><a href="http://127.0.0.1:8000/year">Year</a></li>
                                    </ul>
                                <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>

        <li class="nav-item">
        <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="Co76sUVlRrU8vBGzZxx8KqetmuvIkky1sFoholSR">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="http://127.0.0.1:8000/css/year.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/css/artist.css">
        <link rel="stylesheet" href="/css/app.css">
<script src="/js/app.js"></script>
        <!-- Livewire Styles --><style >[wire\:loading][wire\:loading], [wire\:loading\.delay][wire\:loading\.delay], [wire\:loading\.inline-block][wire\:loading\.inline-block], [wire\:loading\.inline][wire\:loading\.inline], [wire\:loading\.block][wire\:loading\.block], [wire\:loading\.flex][wire\:loading\.flex], [wire\:loading\.table][wire\:loading\.table], [wire\:loading\.grid][wire\:loading\.grid], [wire\:loading\.inline-flex][wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.none][wire\:loading\.delay\.none], [wire\:loading\.delay\.shortest][wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter][wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short][wire\:loading\.delay\.short], [wire\:loading\.delay\.default][wire\:loading\.delay\.default], [wire\:loading\.delay\.long][wire\:loading\.delay\.long], [wire\:loading\.delay\.longer][wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest][wire\:loading\.delay\.longest] {display: none;}[wire\:offline][wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}:root {--livewire-progress-bar-color: #2299dd;}[x-cloak] {display: none !important;}</style>
    </head>
    <body class="font-sans antialiased">
        <div x-data="{&quot;show&quot;:true,&quot;style&quot;:&quot;success&quot;,&quot;message&quot;:null}"
            :class="{ 'bg-indigo-500': style == 'success', 'bg-red-700': style == 'danger', 'bg-gray-500': style != 'success' && style != 'danger' }"
            style="display: none;"
            x-show="show && message"
            x-on:banner-message.window="
                style = event.detail.style;
                message = event.detail.message;
                show = true;
            ">
    <div class="max-w-screen-xl mx-auto py-2 px-3 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between flex-wrap">
            <div class="w-0 flex-1 flex items-center min-w-0">
                <span class="flex p-2 rounded-lg" :class="{ 'bg-indigo-600': style == 'success', 'bg-red-600': style == 'danger' }">
                    <svg x-show="style == 'success'" class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <svg x-show="style == 'danger'" class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>
                    <svg x-show="style != 'success' && style != 'danger'" class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                    </svg>
                </span>

                <p class="ms-3 font-medium text-sm text-white truncate" x-text="message"></p>
            </div>

            <div class="shrink-0 sm:ms-3">
                <button
                    type="button"
                    class="-me-1 flex p-2 rounded-md focus:outline-none sm:-me-2 transition"
                    :class="{ 'hover:bg-indigo-600 focus:bg-indigo-600': style == 'success', 'hover:bg-red-600 focus:bg-red-600': style == 'danger' }"
                    aria-label="Dismiss"
                    x-on:click="show = false">
                    <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

        <div class="">
            <nav wire:snapshot="{&quot;data&quot;:[],&quot;memo&quot;:{&quot;id&quot;:&quot;43UVsQMvONISTlDyhL1j&quot;,&quot;name&quot;:&quot;navigation-menu&quot;,&quot;path&quot;:&quot;dashboard&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;b083c9d9295ec2d5000231c0f2c677a3e84b52abe772f98b7647df384465d1d8&quot;}" wire:effects="{&quot;listeners&quot;:[&quot;refresh-navigation-menu&quot;]}" wire:id="43UVsQMvONISTlDyhL1j" x-data="{ open: false }" class=" border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <!-- Teams Dropdown -->
                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        <!--[if BLOCK]><![endif]-->                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        ounisa@gmail.com

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            <!--[if ENDBLOCK]><![endif]-->
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute z-50 mt-2 w-48 rounded-md shadow-lg ltr:origin-top-right rtl:origin-top-left end-0 "
            style="display: none;"
            @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                Manage Account
                            </div>

                            <a class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/user/profile">Profile</a>

                            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="http://127.0.0.1:8000/logout" x-data>
                                <input type="hidden" name="_token" value="Co76sUVlRrU8vBGzZxx8KqetmuvIkky1sFoholSR" autocomplete="off">
                                <a class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/logout" @click.prevent="$root.submit();">Log Out</a>
                            </form>
        </div>
    </div>
</div>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a class="block w-full ps-3 pe-4 py-2 border-l-4 border-indigo-400 text-start text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/dashboard">
    Dashboard
</a>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                <div>
                    <div class="font-medium text-base text-gray-800">ounisa@gmail.com</div>
                    <div class="font-medium text-sm text-gray-500">ounisa@gmail.com</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <a class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/user/profile">
    Profile
</a>

                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                <!-- Authentication -->
                <form method="POST" action="http://127.0.0.1:8000/logout" x-data>
                    <input type="hidden" name="_token" value="Co76sUVlRrU8vBGzZxx8KqetmuvIkky1sFoholSR" autocomplete="off">
                    <a class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/logout" @click.prevent="$root.submit();">
    Log Out
</a>
                </form>

                <!-- Team Management -->
                <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
</nav>

            <!-- Page Heading -->
            
            <!-- Page Content -->
            <main>
                
            </main>
        </div>

        
        <!-- Livewire Scripts -->
<script src="/livewire/livewire.js?id=cc800bf4"   data-csrf="Co76sUVlRrU8vBGzZxx8KqetmuvIkky1sFoholSR" data-update-uri="/livewire/update" data-navigate-once="true"></script>
    </body>
</html>
    </li>

                            </ul>
                     </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>

    </header>
    <!-- Header Section End -->    <!-- Hero Section Begin -->
<!-- data-setbg="../user/img/hero-bg.png" -->
<section class="hero ">
        <video autoplay muted loop id="heroVideo">
            <source src="http://127.0.0.1:8000/img/videos/videos_5.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <span>SOUNDS</span>
                        <h1>Feel the heart beats</h1>
                        <p>"Experience sound in every note,
                Where each tone tells a story.<br />Listen. Feel. Connect with the world of sound."</p>
                        <a href="https://www.youtube.com/watch?v=K4DyBUG242c" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="linear__icon">
            <i class="fa fa-angle-double-down"></i>
        </div>
    </section>
    <!-- Hero Section End -->

<!-- Search Bar Section Begin -->
<!-- Search Bar Section -->
<section class="search-bar">
    <div class="container">
        <form action="#" method="GET" class="search-form">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search sounds, tracks, or albums..." aria-label="Search">
                <button class="btn btn-purple" type="submit">Search</button>
            </div>
        </form>
    </div>
</section>

<!-- Search Bar Section End -->


    <body>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Playlist</title>
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/artist.css">

</head>

<body>

   
<div class="contain2">

<div class="col-lg-7">
    <div class="section-title">
        <h2>Popular Artists</h2>
        <h1>sounds</h1>
    </div>
</div> 
<!-- artist Selection Section -->
<div class="year-container">
    <div class="artist" data-artist="diljit">
        <img src="http://127.0.0.1:8000/build/assets/image/artist1.jfif" alt="diljit">
        <span>Diljit</span>
    </div>
    <div class="artist" data-artist="talha">
        <img src="http://127.0.0.1:8000/build/assets/image/talha anjum.jfif" alt="talha">
        <span>Talha anjum</span>
    </div>
  
    <div class="artist" data-artist="anuv">
        <img src="http://127.0.0.1:8000/build/assets/image/anuv jain.jfif" alt="arijit">
        <span>Anuv jain</span>
    </div>

    <div class="artist" data-year="2024">
                <div class="col-lg-5">
                    <div class="track__all">
                        <a href="http://127.0.0.1:8000/artist" class="prime-btn border-btn">View all Artists here</a>
                    </div>
                </div>
            </div>

   
</div>

    <!-- Song Playlist Section -->
<div class="playlist-container" id="playlist_art">
<h3>Select a artist to see the songs</h3>
</div>

<!-- Player Section -->
<div class="player-container" id="player_art">
<img id="player-image_art" src="" alt="Song Image" style="display: none;">
<audio id="audio-player_art" controls>
    <source id="audio-source_art" src="" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
</div>
</div>



<script>
// JavaScript for artist songs
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.artist').forEach(function (artistDiv) {
        artistDiv.addEventListener('click', function () {
            var artist = this.getAttribute('data-artist');
            fetch('/get-songs-by-artist?artist=' + artist)
                .then(response => response.json())
                .then(data => {
                    var playlistArt = document.getElementById('playlist_art');
                    playlistArt.innerHTML = '<h3>Songs for ' + artist + ':</h3><ul>';
                    data.forEach(song => {
                        playlistArt.innerHTML += '<li>' + song.title + ' - <button onclick="playArtistSong(\'' + song.file + '\', \'' + song.image + '\')">Play</button></li>';
                    });
                    playlistArt.innerHTML += '</ul>';
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });
});

// Separate play function for artist section
function playArtistSong(file, image) {
    var playerArt = document.getElementById('audio-player_art');
    var audioSourceArt = document.getElementById('audio-source_art');
    var playerImageArt = document.getElementById('player-image_art');
    
    audioSourceArt.src = file;
    playerArt.load();
    playerImageArt.src = image;
    playerImageArt.style.display = 'block';
    playerArt.play();
}

</script>
</body>

</html>    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Playlist</title>

    <link rel="stylesheet" href="http://127.0.0.1:8000/css/year.css">

</head>

<body>

    <div class="contain2">

        <div class="col-lg-7">
            <div class="section-title">
                <h2>Year</h2>
                <h1>sound</h1>
            </div>
        </div>
        <!-- Year Selection Section -->
        <div class="year-container">
        <div class="year" data-year="2020">
                <img src="http://127.0.0.1:8000/build/assets/images/2020.jpeg" alt="2020">
                <span>2020</span>
            </div>

            <div class="year" data-year="2021">
                <img src="http://127.0.0.1:8000/build/assets/images/2021.jpeg" alt="2021">
                <span>2021</span>
            </div>

            <div class="year" data-year="2022">
                <img src="http://127.0.0.1:8000/build/assets/images/2022.jpeg" alt="2022">
                <span>2022</span>
            </div>

            <div class="year" data-year="2024">
                <div class="col-lg-5">
                    <div class="track__all">
                        <a href="http://127.0.0.1:8000/year" class="prime-btn border-btn">View all Years here</a>
                    </div>
                </div>
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

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <img src="http://127.0.0.1:8000/img/about/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <h2>He heard something that he knew to be music</h2>
                            <h1>SOUNDS</h1>
                        </div>
                        <p>Music is a special language that everyone can understand. It can make us feel happy, sad, or excited. From a gentle lullaby to a catchy pop song, music touches our hearts and connects us with others. It’s a joyful part of our lives that brings us together, no matter where we are.</p>
                        <a href="#" class="primary-btn">CONTACT ME</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->



    <!-- JavaScript -->
   <script>
    // JavaScript for year songs
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
                        playlist.innerHTML += '<li>' + song.title + ' - <button onclick="playYearSong(\'' + song.file + '\', \'' + song.image + '\')">Play</button></li>';
                    });
                    playlist.innerHTML += '</ul>';
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });
});

// Separate play function for year section
function playYearSong(file, image) {
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

</body>

</html>    <!-- Track Section Begin -->
 <section class="track spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>Latest tracks</h2>
                        <h1>Music podcast</h1>
                    </div>
                </div>
               
            </div>
            <div class="row">
                <div class="col-lg-7 p-0">
                    <div class="track__content nice-scroll">
                        <div class="single_player_container">
                            <h4>Chal Diye Tum Kahan Hum Kahan </h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1"
                            data-url="http://127.0.0.1:8000/music_files/1.mp3"></div>
                            <div class="jp-audio jp_container_1" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                     <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>Ankhain</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_2"
                            data-url="http://127.0.0.1:8000/music_files/2.mp3"></div>
                            <div class="jp-audio jp_container_2" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>O'Meri Laila</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_3"
                            data-url="http://127.0.0.1:8000/music_files/3.mp3"></div>
                            <div class="jp-audio jp_container_3" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>Sabrina Carpenter-Please Please</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_4"
                            data-url="http://127.0.0.1:8000/music_files/4.mp3"></div>
                            <div class="jp-audio jp_container_4" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>ED Sheeran-Perfect</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_5"
                            data-url="http://127.0.0.1:8000/music_files/5.mp3"></div>
                            <div class="jp-audio jp_container_5" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>Gasolina</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_6"
                            data-url="http://127.0.0.1:8000/music_files/6.mp3"></div>
                            <div class="jp-audio jp_container_6" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 p-0">
                    <div class="track__pic">
                        <img src="http://127.0.0.1:8000/img/latest tracks.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>  
    <!-- Track Section End --> 
   <!-- Youtube Section Begin -->
 <section class="youtube spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Latest concert</h2>
                        <h1>Latest videos</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="youtube__item">
                        <div class="youtube__item__pic set-bg" data-setbg="http://127.0.0.1:8000/img/youtube/youtube-1.jpg">
                            <a href="https://www.youtube.com/watch?v=t5yyqXdhLjA" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="youtube__item__text">
                            <h4>Imagine Dragons - I'm So Sorry - LIVE in Vegas
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="youtube__item">
                        <div class="youtube__item__pic set-bg" data-setbg="http://127.0.0.1:8000/img/youtube/youtube-2.jpg">
                            <a href="https://www.youtube.com/watch?v=4xqo7D2k8HM" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="youtube__item__text">
                            <h4>Imagine Dragons - Believer (Live in Vegas)
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="youtube__item">
                        <div class="youtube__item__pic set-bg" data-setbg="http://127.0.0.1:8000/img/youtube/youtube-3.jpg">
                            <a href="https://www.youtube.com/watch?v=Fpn1imb9qZg" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="youtube__item__text">
                            <h4>Coldplay - A Sky Full Of Stars (Live at River Plate)
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Youtube Section End -->   <!-- Countdown Section Begin -->
    <section class="countdown spad set-bg" data-setbg="http://127.0.0.1:8000/img/countdown-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown__text">
                        <h1>Tomorrowland 2020</h1>
                        <h4>Music festival start in</h4>
                    </div>
                    <div class="countdown__timer" id="countdown-time">
                        <div class="countdown__item">
                            <span>20</span>
                            <p>days</p>
                        </div>
                        <div class="countdown__item">
                            <span>45</span>
                            <p>hours</p>
                        </div>
                        <div class="countdown__item">
                            <span>18</span>
                            <p>minutes</p>
                        </div>
                        <div class="countdown__item">
                            <span>09</span>
                            <p>seconds</p>
                        </div>
                    </div>
                    <div class="buy__tickets">
                        <a href="#" class="primary-btn">Buy tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Countdown Section End -->

     <!-- Footer Section Begin -->
 
    <!-- Footer Section Begin -->
    <footer class="footer spad set-bg" data-setbg="http://127.0.0.1:8000/img/footer-bg.png">
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
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
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
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			<div class="footer__copyright__text">
				<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
			</div>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- Footer Section End -->  <!-- Js Plugins -->
        <!-- Js Plugins -->
        <script src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>


        <script src="http://127.0.0.1:8000/jsfiles/jquery-3.3.1.min.js"></script>
        <script src="http://127.0.0.1:8000/jsfiles/bootstrap.min.js"></script>
        <script src="http://127.0.0.1:8000/jsfiles/jquery.magnific-popup.min.js"></script>
        <script src="http://127.0.0.1:8000/jsfiles/jquery.nicescroll.min.js"></script>
        <script src="http://127.0.0.1:8000/jsfiles/jquery.barfiller.js"></script>
        <script src="http://127.0.0.1:8000/jsfiles/jquery.countdown.min.js"></script>
        <script src="http://127.0.0.1:8000/jsfiles/jquery.slicknav.js"></script>
        <script src="http://127.0.0.1:8000/jsfiles/owl.carousel.min.js"></script>
        <script src="http://127.0.0.1:8000/jsfiles/main.js"></script>

        <!-- Music Plugin -->
        <script src="http://127.0.0.1:8000/jsfiles/jquery.jplayer.min.js"></script>
        <script src="http://127.0.0.1:8000/jsfiles/jplayerInit.js"></script>

</body>

</html>

   


