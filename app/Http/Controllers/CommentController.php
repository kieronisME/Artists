<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Album;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Album $album)
    {

        $request->validate([
            'comment' => 'required|string|max:500',
            'rating' => 'required|integer|max:5',

        ]);

        $album->comment()->create([
            'user_id' => auth()->id(),
            'comment' => 'required|string|max:500',
            'rating' => 'required|integer|max:5',
            'album_id' => $album->id

        ]);

        return to_route('Albums.show', $album)->with('success', 'youjust added a comment');

    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
