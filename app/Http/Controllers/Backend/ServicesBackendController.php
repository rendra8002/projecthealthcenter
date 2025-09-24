<?php

namespace App\Http\Controllers\Backend;

use App\Models\services;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class ServicesBackendController extends Controller
{
    public function toggleStatus(Request $request, $id)
    {
        $service = Services::find($id);

        if (!$service) {
            return response()->json(['success' => false, 'message' => 'Service tidak ditemukan.']);
        }

        $service->status = $request->status;
        $service->save();

        return response()->json(['success' => true]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = services::all();
        return view('pages.backend.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.services.create');
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

        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('images_services', 'public');
        }

        Services::create($data);

        return redirect()->route('services.index')->with('success', 'Service berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Services::find($id);

        if ($service) {
            session(['last_edited_service_id' => $id]);
            return view('pages.backend.services.edit', compact('service'));
        }

        $lastId = session('last_edited_service_id');

        if ($lastId && Services::find($lastId)) {
            return redirect()->route('services.edit', $lastId);
        }

        return redirect()->route('services.index')->with('error', 'Data service tidak ditemukan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Services::find($id);

        if (!$service) {
            return redirect()->route('services.index')->with('error', 'Service tidak ditemukan.');
        }

        $request->validate([
            'title' => 'sometimes|required',
            'description' => 'sometimes|required',
            'photo' => 'nullable|image',
        ]);

        $service->title = $request->title;
        $service->description = $request->description;

        if ($request->hasFile('photo')) {
            if ($service->photo && Storage::disk('public')->exists($service->photo)) {
                Storage::disk('public')->delete($service->photo);
            }
            $service->photo = $request->file('photo')->store('images_services', 'public');
        }

        $service->save();

        return redirect()->route('services.index')->with('success', 'Service berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = Services::find($id);

        if ($service) {
            if ($service->photo && Storage::disk('public')->exists($service->photo)) {
                Storage::disk('public')->delete($service->photo);
            }

            $service->delete();

            return redirect()->route('services.index')->with('success', 'Service berhasil dihapus.');
        }

        return redirect()->route('services.index')->with('error', 'Service tidak ditemukan.');
    }
}
