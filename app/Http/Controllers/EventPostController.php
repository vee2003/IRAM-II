<?php
namespace App\Http\Controllers;

use App\Models\EventPost;
use Illuminate\Http\Request;

class EventPostController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $eventPost = EventPost::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'user_id' => auth()->id(), // Assuming the admin is authenticated
        ]);

        return response()->json(['message' => 'Event post created successfully!', 'data' => $eventPost], 201);
    }
} 