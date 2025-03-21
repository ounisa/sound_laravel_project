<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\userController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\YearController;
use App\Http\Controllers\artistController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//  Feedback Routes
 Route::get('/add_feedback', [AdminController::class, 'add_feedback']);
 Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');




// admin song pages routes--------------------------------------------------------------------------
// Route::get('/all_songs/{name}', [AdminController::class, 'all_songs']);  // Fetch songs by admin
    // Add other routes that require authentication here
    Route::get('/all_songs', [AdminController::class, 'all_songs']);  // For accessing all songs
Route::get('/all_songs/{name}', [AdminController::class, 'all_songs_by_name']);  // For fetching songs by admin name
Route::get('/add_song', [AdminController::class, 'add_song']);  
Route::get('/all_feedback', [AdminController::class, 'all_feedback']);



// Show the add song form
Route::post('/upload_song', [AdminController::class, 'upload_song']);  // Handle song upload
Route::post('/update_song/{id}', [AdminController::class, 'update_song']);  // Update existing song
Route::get('/delete_song/{id}', [AdminController::class, 'delete_song']);  // Delete a song
Route::get('/edit_song/{id}', [AdminController::class, 'edit_song']);  // Show edit form




// Route::get('/all_songs/{name}', [AdminController::class, 'all_songs']);
// Route::get('/all_songs' , [AdminController::class , 'all_songs']);
// Route::get('/add_song' , [AdminController::class , 'add_song']);
// Route::post('/upload_song' , [AdminController::class , 'upload_song']);
// Route::post('/update_song/{id}' , [AdminController::class , 'update_song']);
// Route::get('/all_songs/{name}' , [AdminController::class , 'all_songs']);
// Route::get('/delete_song/{id}' , [AdminController::class , 'delete_song']);
// Route::get('/edit_song/{id}' , [AdminController::class , 'edit_song']);





// authenticate routes

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');







// User Routes
Route::get('/artist', function () {
    return view('user.artist');
})->name('artist');

Route::get('/year', function () {
    return view('user.year');
})->name('year');
Route::get('/albumpage', [userController::class, 'albumpage']);




Route::prefix('admin')->group(function () {
    Route::get('/songs', [AdminController::class, 'songs'])->name('admin.songs');
    Route::get('/video', [AdminController::class, 'video'])->name('admin.video');
    Route::get('/all_feedback', [AdminController::class, 'allFeedback'])->name('admin.all_feedback');
});




// Artist and Year Controllers
Route::get('/get-songs-by-artist', [artistController::class, 'getSongsByArtist']);
Route::get('/get-songs-by-year', [YearController::class, 'getSongsByYear']);

// Dashboard Route (with user authentication)
Route::get('/dashboard', function () {
    if (Auth::check()) {
        if (Auth::user()->usertype == '0') {
            return view('user.index');
        } elseif (Auth::user()->usertype == '1') {
            return view('admin.index');
        } else {
            return redirect()->back();
        }
    } else {
        return redirect('/login'); // Redirect to login if user is not authenticated
    }
})->name('dashboard');





// Static Pages
Route::get('/', function () {
    return view('user.index');
});

Route::get('/index', function () {
    return view('user.index');
});

 Route::get('/add_feedback', function () {
     return view('user.add_feedback');
 });

Route::get('/videos', function () {
    return view('user.videos');
});

