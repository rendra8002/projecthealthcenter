<?php

namespace App\Http\Controllers\Backend;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnersBackendController
{
    public function index()
    {
        $partners = Partner::all();
        return view('pages.backend.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('pages.backend.partners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'nullable|image',
            'name' => 'sometimes|required',
            'description' => 'sometimes|required',
        ]);

        $partner = new Partner();
        $partner->name = $request->name;
        $partner->description = $request->description;

        if ($request->hasFile('photo')) {
            $partner->photo = $request->file('photo')->store('images_partners', 'public');
        }

        $partner->save();

        return redirect()->route('partners.index')
            ->with('success', 'Partner berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $partner = Partner::find($id);

        if (!$partner) {
            return redirect()->route('partners.index')
                ->with('error', 'Partner tidak ditemukan.');
        }

        return view('pages.backend.partners.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::find($id);

        if (!$partner) {
            return redirect()->route('partners.index')
                ->with('error', 'Partner tidak ditemukan.');
        }

        $request->validate([
            'photo' => 'nullable|image',
            'name' => 'sometimes|required',
            'description' => 'sometimes|required',
        ]);

        $partner->name = $request->name;
        $partner->description = $request->description;

        if ($request->hasFile('photo')) {
            if ($partner->photo && Storage::disk('public')->exists($partner->photo)) {
                Storage::disk('public')->delete($partner->photo);
            }
            $partner->photo = $request->file('photo')->store('images_partners', 'public');
        }

        $partner->save();

        return redirect()->route('partners.index');
    }

    public function destroy(string $id)
    {
        $partner = Partner::find($id);

        if ($partner) {
            if ($partner->photo && Storage::disk('public')->exists($partner->photo)) {
                Storage::disk('public')->delete($partner->photo);
            }
            $partner->delete();

            return redirect()->route('partners.index')
                ->with('success', 'Partner berhasil dihapus.');
        }

        return redirect()->route('partners.index')
            ->with('error', 'Partner tidak ditemukan.');
    }
}
