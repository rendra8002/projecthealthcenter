<?php

namespace App\Http\Controllers\Backend;

use App\Models\aboutus;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class AboutUsBackendController extends Controller
{

    public function toggleStatus(Request $request, $id)
    {
        $aboutus = aboutus::find($id);

        if (!$aboutus) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan'
            ], 404);
        }

        $aboutus->status = $request->status;
        $aboutus->save();

        return response()->json([
            'success' => true,
            'message' => 'Status berhasil diubah'
        ]);
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutuses = aboutus::all();
        return view('pages.backend.aboutus.index', compact('aboutuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aboutuses = aboutus::all();
        return view('pages.backend.aboutus.create', compact('aboutuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'photo' => 'nullable|image',
            'description' => 'sometimes|required',
        ]);

        $aboutuses = [
            'description' => $request->description,
        ];

        if ($request->hasFile('photo')) {
            $aboutuses['photo'] = $request->file('photo')->store('images_about', 'public');
        }

        aboutus::create($aboutuses);

        return redirect()->route('aboutus.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aboutuses = aboutus::find($id);

        if ($aboutuses != null) {
            session(['data yg trakhir diedit' => $id]);

            return view('pages.backend.aboutus.edit', compact('aboutuses'));
        }

        $lastId = session('data yg trakhir diedit');

        //jika lastid dan data user keduanya terpenuhi (keduanya ada)
        if ($lastId && aboutus::find($lastId)) {

            return redirect()->route('aboutus.edit', $lastId);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aboutuses = aboutus::find($id);

        if ($aboutuses != null) {
            $request->validate([
                'description' => 'sometimes|required',
                'photo' => 'nullable|image', // photo tidak wajib
            ]);

            // simpan description
            $aboutuses->description = $request->description;

            // cek ada file baru atau tidak
            if ($request->hasFile('photo')) {
                // hapus foto lama jika ada
                if ($aboutuses->photo && Storage::disk('public')->exists($aboutuses->photo)) {
                    Storage::disk('public')->delete($aboutuses->photo);
                }

                $path = $request->file('photo')->store('images_about', 'public');
                $aboutuses->photo = $path;
            }

            $aboutuses->save();

            return redirect()->route('aboutus.index')
                ->with('success', 'About berhasil diperbarui.');
        }

        return redirect()->route('aboutus.index')
            ->with('error', 'Data About tidak ditemukan.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aboutuses = aboutus::find($id);

        if ($aboutuses && $aboutuses->photo && Storage::disk('public')->exists($aboutuses->photo)) {
            Storage::disk('public')->delete($aboutuses->photo);
        }

        if ($aboutuses) {
            $aboutuses->delete();
        }

        return redirect()->route('aboutus.index');
    }
}
