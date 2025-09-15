<?php

namespace App\Http\Controllers\Backend;

use App\Models\hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HeroBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroes = hero::all();

        return view('pages.backend.hero.index', compact('heroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // ambil data dari table
        $heroes = hero::all();
        return view('pages.backend.hero.create', compact('heroes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        request()->validate([
            'photo' => 'nullable',
            'title' => 'nullable',
            'button_text' => 'nullable',
            'button_link' => 'nullable',
        ]);

        $heroes = [
            'title' => $request->title,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
        ];

        if ($request->hasFile('photo')) {
            $heroes['photo'] = $request->file('photo')->store('images', 'public');
        }

        hero::create($heroes);

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
        $heroes = hero::find($id);

        if ($heroes != null) {
            session(['data yg trakhir diedit' => $id]);

            return view('pages.backend.hero.edit', compact('heroes'));
        }

        $lastId = session('data yg trakhir diedit');

        //jika lastid dan data user keduanya terpenuhi (keduanya ada)
        if ($lastId && hero::find($lastId)) {

            return redirect('adminpanel/hero/' . $lastId . '/edit');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $heroes = Hero::find($id);

        if ($heroes != null) {
            $request->validate([
                'title'        => 'nullable',
                'photo'        => 'nullable',
                'button_text'  => 'nullable',
                'button_link'  => 'nullable',
            ]);

            $heroes->title = $request->title;
            $heroes->button_text = $request->button_text;
            $heroes->button_link = $request->button_link;

            // cek ada file baru atau tidak
            if ($request->hasFile('photo')) {
                if ($heroes->photo && Storage::disk('public')->exists($heroes->photo)) {
                    Storage::disk('public')->delete($heroes->photo);
                }

                $path = $request->file('photo')->store('images', 'public');
                $heroes->photo = $path;
            }

            $heroes->save();

            return redirect()->route('hero.index')->with('success', 'Hero berhasil diperbarui.');
        }
        $heroes->save();
        return redirect()->route('hero.index')->with('error', 'Data hero tidak ditemukan.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $heroes = hero::find($id);

        if ($heroes && $heroes->photo && Storage::disk('public')->exists($heroes->photo)) {
            Storage::disk('public')->delete($heroes->photo);
        }

        if ($heroes) {
            $heroes->delete();
        }

        return redirect()->route('hero.index');
    }
}
