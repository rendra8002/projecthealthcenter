<?php

namespace App\Http\Controllers\Backend;

use App\Models\Sejarah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class SejarahBackendController extends Controller
{

    public function toggleStatus(Request $request, $id)
    {
        $sejarah = Sejarah::find($id);

        if (!$sejarah) {
            return response()->json(['success' => false, 'message' => 'Data tidak ditemukan'], 404);
        }

        try {
            $sejarah->status = $request->status;
            $sejarah->save();

            return response()->json([
                'success' => true,
                'message' => 'Status berhasil diperbarui',
                'status'  => $sejarah->status
            ]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Gagal memperbarui status'], 500);
        }
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sejarahs = Sejarah::all();
        return view('pages.backend.sejarah.index', compact('sejarahs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.sejarah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'sometimes|required',
            'description' => 'sometimes|required',
            'photo' => 'nullable|image',
        ]);

        $datasejarah = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('photo')) {
            $datasejarah['photo'] = $request->file('photo')->store('images_sejarah', 'public');
        }

        Sejarah::create($datasejarah);

        return redirect()->route('sejarah.index')->with('success', 'Data Sejarah berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sejarahs = Sejarah::find($id);

        if ($sejarahs) {
            session(['last_edited_sejarah_id' => $id]);
            return view('pages.backend.sejarah.edit', compact('sejarahs'));
        }

        $lastId = session('last_edited_sejarah_id');
        if ($lastId && Sejarah::find($lastId)) {
            return redirect()->route('sejarah.edit', $lastId);
        }

        return redirect()->route('sejarah.index')->with('error', 'Data Sejarah tidak ditemukan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sejarahs = Sejarah::find($id);

        if (!$sejarahs) {
            return redirect()->route('sejarah.index')->with('error', 'Data Sejarah tidak ditemukan.');
        }

        $request->validate([
            'title' => 'sometimes|required',
            'description' => 'sometimes|required',
            'photo' => 'nullable|image',
        ]);

        $sejarahs->title = $request->title;
        $sejarahs->description = $request->description;

        if ($request->hasFile('photo')) {
            // hapus foto lama jika ada
            if ($sejarahs->photo && Storage::disk('public')->exists($sejarahs->photo)) {
                Storage::disk('public')->delete($sejarahs->photo);
            }
            $sejarahs->photo = $request->file('photo')->store('images_sejarah', 'public');
        }

        $sejarahs->save();

        return redirect()->route('sejarah.index')->with('success', 'Data Sejarah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sejarah = Sejarah::find($id);

        if ($sejarah) {
            if ($sejarah->photo && Storage::disk('public')->exists($sejarah->photo)) {
                Storage::disk('public')->delete($sejarah->photo);
            }
            $sejarah->delete();

            return redirect()->route('sejarah.index')->with('success', 'Data Sejarah berhasil dihapus.');
        }

        return redirect()->route('sejarah.index')->with('error', 'Data Sejarah tidak ditemukan.');
    }
}
