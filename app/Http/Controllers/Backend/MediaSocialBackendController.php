<?php

namespace App\Http\Controllers\Backend;

use App\Models\mediasocial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaSocialBackendController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mediasocials = mediasocial::all();
        return view('pages.backend.mediasocial.index', compact('mediasocials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.mediasocial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_account'    => 'sometimes|required',
            'link'            => 'sometimes|required|url',
            'name_mediasocial' => 'sometimes|required',
            'photo'           => 'nullable|image',
        ]);

        $dataMedia = [
            'name_account'     => $request->name_account,
            'link'             => $request->link,
            'name_mediasocial' => $request->name_mediasocial,
        ];

        if ($request->hasFile('photo')) {
            $dataMedia['photo'] = $request->file('photo')->store('images_mediasocial', 'public');
        }

        Mediasocial::create($dataMedia);

        return redirect()->route('mediasocial.index')->with('success', 'Media Social berhasil ditambahkan.');
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
        $mediasocial = mediasocial::find($id);

        if ($mediasocial != null) {
            session(['last_edited_mediasocial_id' => $id]);
            return view('pages.backend.mediasocial.edit', compact('mediasocial'));
        }

        $lastId = session('last_edited_mediasocial_id');

        if ($lastId && mediasocial::find($lastId)) {
            return redirect()->route('mediasocial.edit', $lastId);
        }

        return redirect()->route('mediasocial.index')->with('error', 'Data Media Social tidak ditemukan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mediasocial = Mediasocial::find($id);

        if ($mediasocial == null) {
            return redirect()->route('mediasocial.index')->with('error', 'Data Media Social tidak ditemukan.');
        }

        $request->validate([
            'name_account'    => 'sometimes|required',
            'link'            => 'sometimes|required|url',
            'name_mediasocial' => 'sometimes|required',
            'photo'           => 'nullable|image',
        ]);

        $mediasocial->name_account     = $request->name_account;
        $mediasocial->link             = $request->link;
        $mediasocial->name_mediasocial = $request->name_mediasocial;

        if ($request->hasFile('photo')) {
            if ($mediasocial->photo && Storage::disk('public')->exists($mediasocial->photo)) {
                Storage::disk('public')->delete($mediasocial->photo);
            }
            $mediasocial->photo = $request->file('photo')->store('images_mediasocial', 'public');
        }

        $mediasocial->save();

        return redirect()->route('mediasocial.index')->with('success', 'Media Social berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mediasocial = mediasocial::find($id);

        if ($mediasocial != null) {
            if ($mediasocial->photo && Storage::disk('public')->exists($mediasocial->photo)) {
                Storage::disk('public')->delete($mediasocial->photo);
            }

            $mediasocial->delete();

            return redirect()->route('mediasocial.index')->with('success', 'Media Social berhasil dihapus.');
        }

        return redirect()->route('mediasocial.index')->with('error', 'Data Media Social tidak ditemukan.');
    }
}
