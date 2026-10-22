<?php

namespace App\Http\Controllers;

use App\Models\Artwork;

class ArtworkController extends Controller
{
    public function index()
    {
        $artworks = Artwork::all();

        return view('artworks.index', compact('artworks'));
    }

    public function show($id)
    {
        $artwork = Artwork::findOrFail($id);

        return view('artworks.show', compact('artwork'));
    }
}
