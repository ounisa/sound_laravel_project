<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Playlist</title>

    <link rel="stylesheet" href="{{ asset('css/year.css') }}">

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
                <img src="{{ asset('build/assets/images/2020.jpeg') }}" alt="2020">
                <span>2020</span>
            </div>

            <div class="year" data-year="2021">
                <img src="{{ asset('build/assets/images/2021.jpeg') }}" alt="2021">
                <span>2021</span>
            </div>

            <div class="year" data-year="2022">
                <img src="{{ asset('build/assets/images/2022.jpeg') }}" alt="2022">
                <span>2022</span>
            </div>

            <div class="year" data-year="2024">
                <div class="col-lg-5">
                    <div class="track__all">
                        <a href="{{URL::to('/year')}}" class="prime-btn border-btn">View all Years here</a>
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
                        <img src="{{ asset('img/about/about.jpg') }}" alt="">
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

</html>