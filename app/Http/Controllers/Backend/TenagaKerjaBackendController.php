<?php

namespace App\Http\Controllers\Backend;

use App\Models\tenagakerja;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class TenagaKerjaBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenagakerjas = tenagakerja::all();
        return view('pages.backend.tenagakerja.index', compact('tenagakerjas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tenagakerjas = tenagakerja::all();
        return view('pages.backend.tenagakerja.create', compact('tenagakerjas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'name' => 'required',
            'speciality' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $tenagakerjas = [
            'name' => $request->name,
            'speciality' => $request->speciality,
            'phone' => $request->phone,
            'email' => $request->email,
        ];

        if ($request->hasFile('photo')) {
            $tenagakerjas['photo'] = $request->file('photo')->store('images_tenagakerja', 'public');
        }

        tenagakerja::create($tenagakerjas);

        return redirect()->route('tenagakerja.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tenagakerjas = tenagakerja::find($id);
        if ($tenagakerjas) {
            return view('pages.backend.tenagakerja.show', compact('tenagakerjas'));
        }
        return redirect()->route('tenagakerja.index')->with('error', 'Data not found.');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tenagakerjas = tenagakerja::find($id);

        if ($tenagakerjas != null) {
            session(['data yg trakhir diedit' => $id]);

            return view('pages.backend.tenagakerja.edit', compact('tenagakerjas'));
        }

        $lastId = session('data yg trakhir diedit');

        //jika lastid dan data user keduanya terpenuhi (keduanya ada)
        if ($lastId && tenagakerja::find($lastId)) {

            return redirect()->route('tenagakerja.edit', $lastId);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tenagakerjas = tenagakerja::find($id);
        $request->validate([
            'name'       => 'required',
            'speciality' => 'required',
            'phone'      => 'nullable',
            'email'      => 'nullable|email',
            'photo'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            if ($tenagakerjas->photo && Storage::disk('public')->exists($tenagakerjas->photo)) {
                Storage::disk('public')->delete($tenagakerjas->photo);
            }
            $tenagakerjaupdate['photo'] = $request->file('photo')->store('images_tenagakerja', 'public');
        }


        $tenagakerjaupdate = $request->only(['name', 'speciality', 'phone', 'email']);

        if ($request->hasFile('photo')) {
            $tenagakerjaupdate['photo'] = $request->file('photo')->store('images', 'public');
        }

        $tenagakerjas->update($tenagakerjaupdate);

        return redirect()->route('tenagakerja.index')->with('success', 'Doctor updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tenagakerjas = tenagakerja::find($id);

        if ($tenagakerjas && $tenagakerjas->photo && Storage::disk('public')->exists($tenagakerjas->photo)) {
            Storage::disk('public')->delete($tenagakerjas->photo);
        }

        if ($tenagakerjas) {
            $tenagakerjas->delete();
        }

        return redirect()->route('tenagakerja.index');
    }
}