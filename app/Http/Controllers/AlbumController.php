<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Producer;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class AlbumController extends Controller
{

    public function fiveStaralbum()
    {
        //gets all albums with 5 star rating
        $fiveStaralbum = Album::where('rating', 5)->get();
        //stores inside of fivStarAlbum
        return view('Albums.fiveStar', compact('fiveStaralbum'));
    }

    public function year()
    {
        $year = Album::where('releaseYear', '>', 2000)->get();
        return view('Albums.year', compact('year'));
    }

    public function index()
    {
        $Album = Album::all();
        return view('Albums.index', compact('Album'));
    }


    public function create()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('Album.index')->with('error', '');
        }
        return view('Albums.create');

    }


    public function store(Request $request)
    {
        //validations 
        $request->validate([
            'title' => 'required',
            'rating' => 'required|max:5',
            'releaseYear' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,gif|max:2048',
        ]);

        //saves image with timestamp
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('ArtistImg/images'), $imageName);
        }

        //creating new album in DB
        Album::create([
            'title' => $request->title,
            'rating' => $request->rating,
            'releaseYear' => $request->releaseYear,
            'image' => $imageName,
        ]);

        return to_route('Albums.index')->with('success', 'You just added another album!!!');
    }



    public function show(Album $album)
    {
        $album->load('producer.user');
        return view('Albums.show')->with('album', $album);
    }

    public function edit(Album $album)
    {
        return view('Albums.edit', compact('album'));
    }



    public function update(Request $request, Album $album)
    {
        // Validations
        $request->validate([
            'title' => 'required|string|max:255',
            'rating' => 'required|integer|max:5',
            'releaseYear' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,gif|max:2048',
        ]);

        // checks if image uplaoded
        if ($request->hasFile('image')) {
            if ($album->image) {
                Storage::delete('ArtistImg/images/' . $album->image);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('ArtistImg/images'), $imageName);
            $album->image = $imageName;
        }
        // assighnes new meaning to each 
        $album->title = $request->title;
        $album->rating = $request->rating;
        $album->releaseYear = $request->releaseYear;
        $album->save();

        return redirect()->route('Albums.index')->with('success', 'Album updated successfully!');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {

        if ($album->image) {
            Storage::delete('ArtistImg/images/' . $album->image);
        }

        $album->delete();
        return redirect()->route('Albums.index')->with('success', 'Album deleted successfully!');
    }
}

