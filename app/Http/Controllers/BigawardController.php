<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Bigaward;
use Illuminate\Http\Request;

class BigawardController extends Controller
{
//################################################################################################################################################################################################################################
//                                                                                             Index
//################################################################################################################################################################################################################################
   

    public function index()
    {
        $Bigaward = Bigaward::all();
        return view('Bigawards.index', compact('Bigaward'));

    }

//################################################################################################################################################################################################################################
//                                                                                             Create
//################################################################################################################################################################################################################################



    public function create()
    {
        return view('bigawards.create');
    }

    public function store(Request $request)
    {
        //validations 
        $request->validate([
            'album' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'year' => 'required|integer|max:8000',
            'image' => 'nullable|image|mimes:jpeg,png,gif|max:2048',
        ]);

        //saves image with timestamp
        if ($request->hasFile('image')) {
            $imagework = time() . '.' . $request->image->extension();
            $request->image->move(public_path('ArtistImg/images'), $imagework);
        }

        //creating new album in DB
        Bigaward::create([
            'album' => $request->album,
            'name' => $request->name,  
            'year' => $request->year,   
            'image' => isset($imagework) ? $imagework : null,  
        ]);
        return redirect()->route('Bigawards.index')->with('success', 'Award updated successfully!');
    }



    public function show(Bigaward $bigaward)
    {
        return view('Bigawards.show')->with('bigaward', $bigaward);
    }







    public function edit(Bigaward $bigaward)
    {
        return view('Bigawards.edit', compact('bigaward'));

    }


    public function update(Request $request, Bigaward $bigaward)
    {
        // Validations
        $request->validate([
            'album' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'year' => 'required|integer|max:8000',
            'rating' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,gif|max:2048',
        ]);
    
        // Handle image upload if a new one is provided
        if ($request->hasFile('image')) {
            if ($bigaward->image) {
                Storage::delete('ArtistImg/images/' . $bigaward->image);
            }
    
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('ArtistImg/images'), $imageName);
            $bigaward->image = $imageName;
        }
    

        $bigaward->album = $request->album;
        $bigaward->name = $request->name;
        $bigaward->year = $request->year;
        $bigaward->save();
    
        return redirect()->route('Bigawards.index')->with('success', 'Award updated successfully!');
    }


    public function destroy(Bigaward $bigaward)
    {
        if ($bigaward->image) {
            Storage::delete('ArtistImg/images/' . $bigaward->image);
        }

        $bigaward->delete();
        return redirect()->route('Bigawards.index')->with('success', 'AWARD deleted successfully!');
    }
}
