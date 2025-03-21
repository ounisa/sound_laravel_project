<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Song;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request; // Add this to import the Request class

class AdminController extends Controller
{
    public function songs() {
        return view('admin.songs'); // Ensure this view exists at resources/views/admin/songs.blade.php
    }
    
    public function video() {
        return view('admin.video'); // Ensure this view exists at resources/views/admin/video.blade.php
    }
    
    public function allFeedback() {
        return view('admin.all_feedback'); // Ensure this view exists at resources/views/admin/all_feedback.blade.php
    }


    public function add_feedback()
    {
        if (Auth::user()->usertype == '1') {
            return view('admin.add_feedback');
        } else {
            return redirect()->back();
        }
    }
  



    public function upload_feedback(Request $request)
    {
        if(Auth::user()->usertype == '2'){
            $feedback = new Feedback(); // Make sure you instantiate the Feedback model
    
            $feedback->name = $request->name;
            $feedback->email = $request->email;
            $feedback->remarks = $request->remarks;
            $feedback->comment = $request->comment;
            $feedback->rating = $request->rating;
    
            $feedback->save(); // Save the feedback to the database
            return redirect()->back()->with('success', 'Feedback submitted successfully!'); // Optionally, add a success message
        } else {
            return redirect()->back();
        }
    }
    
    public function all_feedback()
    {
        $feedbacks = Feedback::paginate(10); // Adjust the number based on your preference
        return view('admin.all_feedback', compact('feedbacks'));
    }
    



    public function upload_song(Request $request) {
        $songs = new Song();
    
        // Handle the image upload
        $image = $request->image;
        $imageName = time() . '.' . $image->getClientOriginalExtension();  // Generating a unique image name
        $image->move('songimage', $imageName);  // Saving the image
        $songs->image = $imageName;
    
        // Handle the song file upload
        $file = $request->file;
        $fileName = time() . '.' . $file->getClientOriginalExtension();  // Generating a unique file name
        $file->move('songfile', $fileName);  // Saving the song file
        $songs->file = $fileName;
    
        // Store song name and admin info
        $songs->song = $request->song;
        $songs->admin = Auth::User()->name;
        
        // Save the song to the database
        $songs->save();
    
        // Redirect back to the form after successful upload
        return redirect()->back();
    }
    

    public function add_song() {
        if (Auth::User()->usertype == '1') {
            return view('admin.add_song');
        } else {
            return redirect()->back();
        }
    }
    


    public function delete_song($id) {
        if (Auth::User()->usertype == "1") {
            $songs = Song::find($id)->delete();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
    

    public function edit_song($id) {
        if (Auth::User()->usertype == "1") {
            $song = Song::find($id);
    
            if (!$song) {
                return redirect()->back()->with('error', 'Song not found.');
            }
    
            return view('admin.edit_song', compact('song'));
        } else {
            return redirect()->back();
        }
    }
    
    

    public function update_song(Request $request, $id) {
        if (Auth::User()->usertype == "1") {
            $songs = Song::find($id);
    
            // Handle new image upload (if any)
            if ($request->hasFile('image')) {
                $image = $request->image;
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move('songimage', $imageName);
                $songs->image = $imageName;
            }
    
            // Handle new song file upload (if any)
            if ($request->hasFile('file')) {
                $file = $request->file;
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move('songfile', $fileName);
                $songs->file = $fileName;
            }
    
            // Update the song name and admin
            $songs->song = $request->song;
            $songs->admin = Auth::User()->name;
            $songs->save();
    
            return redirect("/all_songs/" . Auth::User()->name);
        } else {
            return redirect()->back();
        }
    }
    
    
    // public function all_songs($name) {
    //     if (Auth::User()->usertype == '1' && Auth::User()->name == $name) {
    //         $songs = Song::where('admin', $name)->get(); 
            
    //         return view('admin.all_songs', compact('songs'));
    //     } else {
    //         return redirect()->back();
    //     }
    public function all_songs() {
        if (Auth::User()->usertype == '1') {
            // Fetch all songs
            $songs = Song::all();
            return view('admin.all_songs', compact('songs'));
        } else {
            return redirect()->back();
        }
    }
    
    public function all_songs_by_name($name) {
        if (Auth::User()->usertype == '1' && Auth::User()->name == $name) {
            // Fetch songs by admin name
            $songs = Song::where('admin', $name)->get();
            return view('admin.all_songs', compact('songs'));
        } else {
            return redirect()->back();
        }
    }
    
    
    


}





     







