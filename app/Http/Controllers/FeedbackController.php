<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'remarks' => 'required|string|max:255',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string',
        ]);
    
        // Create a new feedback entry
        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->remarks = $request->remarks;
        $feedback->rating = $request->rating;
        $feedback->comment = $request->comment;
    
        // Save to the database
        $feedback->save();
    
        // Optionally, redirect with a success message
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }
    
}


