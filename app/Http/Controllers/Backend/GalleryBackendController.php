<?php

namespace App\Http\Controllers\Backend;

use App\Models\gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryBackendController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = gallery::all();
        return view('pages.backend.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input sederhana
        $request->validate([
            'title' => 'sometimes|required',
            'photo' => 'nullable|image',
            'description' => 'sometimes|required',
        ]);

        $galleries = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('photo')) {
            $galleries['photo'] = $request->file('photo')->store('images_gallery', 'public');
        }

        gallery::create($galleries);

        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $galleries = gallery::find($id);

        if ($galleries != null) {
            session(['last_edited_hero_id' => $id]);
            return view('pages.backend.gallery.edit', compact('galleries'));
        }

        $lastId = session('last_edited_hero_id');

        if ($lastId && gallery::find($lastId)) {
            return redirect()->route('gallery.edit', $lastId);
        }

        return redirect()->route('gallery.index')->with('error', 'Data hero tidak ditemukan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $galleries = gallery::find($id);

        if ($galleries == null) {
            return redirect()->route('gallery.index')->with('error', 'Gallery tidak ditemukan.');
        }

        $request->validate([
            'title' => 'sometimes|required',
            'description' => 'sometimes|required',
            'photo' => 'nullable|image',
        ]);

        $galleries->title = $request->title;
        $galleries->description = $request->description;

        if ($request->hasFile('photo')) {
            // Hapus foto lama
            if ($galleries->photo && Storage::disk('public')->exists($galleries->photo)) {
                Storage::disk('public')->delete($galleries->photo);
            }
            $galleries->photo = $request->file('photo')->store('images_gallery', 'public');
        }

        $galleries->save();

        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $galleries = gallery::find($id);

        if ($galleries != null) {
            // Cek apakah ada file photo yang tersimpan
            if ($galleries->photo && Storage::disk('public')->exists($galleries->photo)) {
                Storage::disk('public')->delete($galleries->photo);
            }

            $galleries->delete();

            return redirect()->route('gallery.index');
        }

        return redirect()->route('hero.index');
    }
}
