<?php

namespace App\Http\Controllers\Backend;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnersBackendController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::latest()->get();
        return view('pages.backend.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $data = $request->only(['name', 'description']);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('partners', 'public');
        }

        Partner::create($data);

        return redirect()->route('partners.index')->with('success', 'Partner berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $partner = Partner::find($id); // pakai find() saja

        if (!$partner) {
            return redirect()->route('partners.index')
                ->with('error', 'Partner tidak ditemukan.');
        }

        return view('pages.backend.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $partner = Partner::find($id); // pakai find() saja

        if (!$partner) {
            return redirect()->route('partners.index')
                ->with('error', 'Partner tidak ditemukan.');
        }

        $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $data = $request->only(['name', 'description']);

        if ($request->hasFile('photo')) {
            if ($partner->photo && Storage::disk('public')->exists($partner->photo)) {
                Storage::disk('public')->delete($partner->photo);
            }
            $data['photo'] = $request->file('photo')->store('partners', 'public');
        }

        $partner->update($data);

        return redirect()->route('partners.index')->with('success', 'Partner berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partners = Partner::find($id);

        if ($partners) {
            if ($partners->photo && Storage::disk('public')->exists($partners->photo)) {
                Storage::disk('public')->delete($partners->photo);
            }
            $partners->delete();

            return redirect()->route('partners.index')->with('success', 'Data Sejarah berhasil dihapus.');
        }

        return redirect()->route('partners.index')->with('error', 'Data Sejarah tidak ditemukan.');
    }
}
