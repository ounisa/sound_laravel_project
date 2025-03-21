<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artistController extends Controller
{
    public function getSongsByArtist(Request $request)
    {
        $artist = $request->query('artist');
        $songs = [];

        // Add songs dynamically based on the year.
        if ($artist == 'diljit') {
            $songs = [
                ['title' => 'Punjabi song', 'file' => asset('artist-song/diljit/song1.mp3'), 'image' => asset('artistImage/image1.jfif')],
                ['title' => 'punjaab song', 'file' => asset('artist-song/diljit/song2.mp3'), 'image' => asset('artistImage/image1.jfif')],
                ['title' => 'aaabbbi', 'file' => asset('artist-song/diljit/song3.mp3'), 'image' => asset('artistImage/image3.jpg')],
                ['title' => 'heelloo', 'file' => asset('artist-song/diljit/song4.mp3'), 'image' => asset('artistImage/image4.jfif')],
                ['title' => 'jiiiig', 'file' => asset('artist-song/diljit/song5.mp3'), 'image' => asset('artistImage/image5.jfif')],
                ['title' => 'hellooohiiiggg', 'file' => asset('artist-song/diljit/song6.mp3'), 'image' => asset('artistImage/image6.jfif')],

            ];
        } elseif ($artist == 'talha') {
            $songs = [
                ['title' => 'Karachi Chal', 'file' => asset('artist-song/talha/song1.mp3'), 'image' => asset('artistImage/karachi chal.jfif')],
                ['title' => 'Agency', 'file' => asset('artist-song/talha/song2.mp3'), 'image' => asset('artistImage/agency.jpg')],
                ['title' => 'Downers At Dusk', 'file' => asset('artist-song/talha/song3.mp3'), 'image' => asset('artistImage/Downers At Dusk.jpg')],
                ['title' => 'Muntazir', 'file' => asset('artist-song/talha/song4.mp3'), 'image' => asset('artistImage/muntazir.jfif')],
                ['title' => 'Umair', 'file' => asset('artist-song/talha/song5.mp3'), 'image' => asset('artistImage/umair.jfif')],
                ['title' => 'Gumaan', 'file' => asset('artist-song/talha/song6.mp3'), 'image' => asset('artistImage/gumaan.jfif')],

            ];

        } elseif ($artist == 'anuv') {
         $songs = [
                ['title' => 'Husn', 'file' => asset('artist-song/anuv/song1.mp3'), 'image' => asset('artistImage/husn.png')],
               ['title' => 'Mazak', 'file' => asset('artist-song/anuv/song2.mp3'), 'image' => asset('artistImage/mazak.jfif')],
                ['title' => 'Meri baton ma tu', 'file' => asset('artist-song/anuv/song3.mp3'), 'image' => asset('artistImage/meri baton ma tu.jfif')],
                ['title' => 'Baarishein', 'file' => asset('artist-song/anuv/song4.mp3'), 'image' => asset('artistImage/baarishein.jpg')],
               ['title' => 'Gul', 'file' => asset('artist-song/anuv/song5.mp3'), 'image' => asset('artistImage/gul.jfif')],
                 ['title' => 'Jo tum mere Ho', 'file' => asset('artist-song/anuv/song6.mp3'), 'image' => asset('artistImage/jo tm mere ho.jpg')],

            ];
     }
     elseif ($artist == 'billie') {
        $songs = [
            ['title' => 'Happier than ever', 'file' => asset('artist-song/billie/song1.mp3'), 'image' => asset('artistImage/happier than ever.jfif')],
            ['title' => 'Chihiro', 'file' => asset('artist-song/billie/song2.mp3'), 'image' => asset('artistImage/chihiro.jfif')],
            ['title' => 'What i was made for?', 'file' => asset('artist-song/billie/song3.mp3'), 'image' => asset('artistImage/what i was made for.jfif')],
            ['title' => 'Birds of a feather', 'file' => asset('artist-song/billie/song4.mp3'), 'image' => asset('artistImage/birds of a feather.jfif')],
            ['title' => 'Everything i wanted', 'file' => asset('artist-song/billie/song5.mp3'), 'image' => asset('artistImage/everything i wanted.jfif')],
            ['title' => 'Wildflower', 'file' => asset('artist-song/billie/song6.mp3'), 'image' => asset('artistImage/wildflower.jfif')],

        ];
    }

    elseif ($artist == 'ed') {
        $songs = [
            ['title' => 'Castle on the hill', 'file' => asset('artist-song/ed/song1.mp3'), 'image' => asset('artistImage/castle on the hill.jfif')],
            ['title' => 'Dive', 'file' => asset('artist-song/ed/song2.mp3'), 'image' => asset('artistImage/dive.jfif')],
            ['title' => 'Perfect', 'file' => asset('artist-song/ed/song3.mp3'), 'image' => asset('artistImage/perfect.jfif')],
            ['title' => 'Let her go', 'file' => asset('artist-song/ed/song4.mp3'), 'image' => asset('artistImage/let her go.jfif')],
            ['title' => 'Lego house', 'file' => asset('artist-song/ed/song5.mp3'), 'image' => asset('artistImage/lego house.jfif')],
            ['title' => 'Shape of you', 'file' => asset('artist-song/ed/song6.mp3'), 'image' => asset('artistImage/shape of you.jfif')],

        ];
    }
        // Add more artists as needed.

        return response()->json($songs);
    }
    
}

