<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $artworks = Artwork::when($search, function ($query, $search) {
            $query->where('title', 'like', '%' . $search . '%')
                  ->orWhere('artist', 'like', '%' . $search . '%');
        })->get();

        return view('artworks.index', compact('artworks', 'search'));
    }

    public function show($id)
    {
        $artwork = Artwork::findOrFail($id);

        return view('artworks.show', compact('artwork'));
    }
}
