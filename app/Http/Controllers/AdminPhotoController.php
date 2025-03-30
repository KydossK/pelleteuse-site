<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class AdminPhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::latest()->get();
        return view('admin.photos.index', compact('photos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|max:2048',
        ]);

        $path = $request->file('photo')->store('photos', 'public');

        Photo::create(['path' => $path]);

        return redirect()->route('admin.photos.index')->with('success', 'Photo ajoutée.');
    }

    public function destroy(Photo $photo)
    {
        Storage::disk('public')->delete($photo->path);
        $photo->delete();

        return redirect()->route('admin.photos.index')->with('success', 'Photo supprimée.');
    }
}
