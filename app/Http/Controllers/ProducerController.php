<?php

namespace App\Http\Controllers;

use App\Models\Producer;
use App\Models\Album;
use Illuminate\Http\Request;

class ProducerController extends Controller
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
            'name' => 'required|text',
            'genre' => 'required|text',
            'studio' => 'required|text',
            'label' => 'required|text',

        ]);

        $album->producer()->create([
            'user_id' => auth()->id(),
            'name' => $request->input('name'),
            'genre' => $request->input('genre'),
            'studio' => $request->input('studio'),
            'label' => $request->input('label'),
            'album_id' => $album->id


        ]);

        return to_route('Albums.show', $album)->with('success', 'youjust added a producer');






















    }

    /**
     * Display the specified resource.
     */
    public function show(Producer $producer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producer $producer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producer $producer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producer $producer)
    {
        //
    }
}
