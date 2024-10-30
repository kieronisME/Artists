<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Support\Facades\Storage;  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     * if somethings wrong its here
     */
    public function index()
    {
        $Artist = Artist::all();
        return view('Artists.index',compact('Artist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view(  'Artists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'rating' => 'required|max:5',
            'releaseYear' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,gif|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('ArtistImg/images'), $imageName);
        }
    
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        //
    }
}
