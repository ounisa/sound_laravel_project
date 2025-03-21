<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;  // Import the Song model

class UserController extends Controller
{
    public function albumpage() {
        // Fetch all songs from the database
        $songs = Song::all();  // Retrieve all songs

        // Return the album page view and pass the songs to the view
        return view('user.albumpage', compact('songs'));
    }
}

