<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Playlist</title>
    <link rel="stylesheet" href="{{ asset('css/artist.css') }}">

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
        <img src="{{ asset('/build/assets/image/artist1.jfif') }}" alt="diljit">
        <span>Diljit</span>
    </div>
    <div class="artist" data-artist="talha">
        <img src="{{ asset('/build/assets/image/talha anjum.jfif') }}" alt="talha">
        <span>Talha anjum</span>
    </div>
  
    <div class="artist" data-artist="anuv">
        <img src="{{ asset('/build/assets/image/anuv jain.jfif') }}" alt="arijit">
        <span>Anuv jain</span>
    </div>

    <div class="artist" data-year="2024">
                <div class="col-lg-5">
                    <div class="track__all">
                        <a href="{{URL::to('/artist')}}" class="prime-btn border-btn">View all Artists here</a>
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

</html>