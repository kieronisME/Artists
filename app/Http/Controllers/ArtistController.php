<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class ArtistController extends Controller
{

 
    public function fiveStaralbum()
    {
        $fiveStaralbum = Artist::where('rating', 5)->get();
        return view('Artists.fiveStar', compact('fiveStaralbum'));
    }

    public function year()
    {
        $year = Artist::where('releaseYear','>',2000)->get();
        return view('Artists.year', compact('year'));
    }

    public function index()
    {
        $Artist = Artist::all();
        return view('Artists.index', compact('Artist'));
    }


    public function create()
    {
        return view('Artists.create');

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

        //creating new artist in DB
        Artist::create([
            'title' => $request->title,
            'rating' => $request->rating,
            'releaseYear' => $request->releaseYear,
            'image' => $imageName,
        ]);

        return to_route('Artists.index')->with('success', 'You just added another album!!!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {

        return view('Artists.show')->with('artist', $artist);
    }


    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Artist $artist)
    {

        return view('Artists.edit', compact('artist'));
    }




    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Artist $artist)
    {
        // Validations
        $request->validate([
            'title' => 'required|string|max:255',
            'rating' => 'required|integer|max:5',
            'releaseYear' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,gif|max:2048',
        ]);


        if ($request->hasFile('image')) {
            if ($artist->image) {
                Storage::delete('ArtistImg/images/' . $artist->image);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('ArtistImg/images'), $imageName);
            $artist->image = $imageName;
        }

        $artist->title = $request->title;
        $artist->rating = $request->rating;
        $artist->releaseYear = $request->releaseYear;
        $artist->save();

        return redirect()->route('Artists.index')->with('success', 'Artist updated successfully!');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {

        if ($artist->image) {
            Storage::delete('ArtistImg/images/' . $artist->image);
        }

        $artist->delete();
        return redirect()->route('Artists.index')->with('success', 'Artist deleted successfully!');
    }
}

