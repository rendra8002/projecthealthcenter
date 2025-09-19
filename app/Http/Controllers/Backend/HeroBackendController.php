<?php

namespace App\Http\Controllers\Backend;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class HeroBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroes = Hero::all();
        return view('pages.backend.hero.index', compact('heroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input sederhana
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'button_text' => 'required',
            'button_link' => 'required',
            'photo' => 'required|image',
        ]);

        $datahero = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
        ];

        if ($request->hasFile('photo')) {
            $datahero['photo'] = $request->file('photo')->store('images_hero', 'public');
        }

        Hero::create($datahero);

        return redirect()->route('hero.index');
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
        $heroes = Hero::find($id);

        if ($heroes != null) {
            session(['last_edited_hero_id' => $id]);
            return view('pages.backend.hero.edit', compact('heroes'));
        }

        $lastId = session('last_edited_hero_id');

        if ($lastId && Hero::find($lastId)) {
            return redirect()->route('hero.edit', $lastId);
        }

        return redirect()->route('hero.index')->with('error', 'Data hero tidak ditemukan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $heroes = Hero::find($id);

        if ($heroes == null) {
            return redirect()->route('hero.index')->with('error', 'Hero tidak ditemukan.');
        }

        $request->validate([
            'title' => 'sometimes|required',
            'subtitle' => 'sometimes|required',
            'button_text' => 'sometimes|required',
            'button_link' => 'sometimes|required',
            'photo' => 'nullable|image',
        ]);

        $heroes->title = $request->title;
        $heroes->subtitle = $request->subtitle;
        $heroes->button_text = $request->button_text;
        $heroes->button_link = $request->button_link;

        if ($request->hasFile('photo')) {
            // Hapus foto lama
            if ($heroes->photo && Storage::disk('public')->exists($heroes->photo)) {
                Storage::disk('public')->delete($heroes->photo);
            }
            $heroes->photo = $request->file('photo')->store('images_hero', 'public');
        }

        $heroes->save();

        return redirect()->route('hero.index')->with('success', 'Hero berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $heroes = Hero::find($id);

        if ($heroes != null) {
            // Cek apakah ada file photo yang tersimpan
            if ($heroes->photo && Storage::disk('public')->exists($heroes->photo)) {
                Storage::disk('public')->delete($heroes->photo);
            }

            $heroes->delete();

            return redirect()->route('hero.index')->with('success', 'Hero berhasil dihapus.');
        }

        return redirect()->route('hero.index')->with('error', 'Hero tidak ditemukan.');
    }
}
