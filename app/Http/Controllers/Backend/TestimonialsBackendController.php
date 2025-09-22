<?php

namespace App\Http\Controllers\Backend;

use App\Models\testimonials;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class TestimonialsBackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = testimonials::all();
        return view('pages.backend.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'sometimes|required',
            'detail' => 'sometimes|required',
            'rating' => 'sometimes|required|integer|min:1|max:5',
            'photo'  => 'nullable|image',
        ]);

        $datatestimonial = [
            'name'   => $request->name,
            'detail' => $request->detail,
            'rating' => $request->rating,
        ];

        if ($request->hasFile('photo')) {
            $datatestimonial['photo'] = $request->file('photo')->store('images_testimonial', 'public');
        }

        testimonials::create($datatestimonial);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial berhasil ditambahkan.');
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
        $testimonial = testimonials::find($id);

        if ($testimonial != null) {
            session(['last_edited_testimonial_id' => $id]);
            return view('pages.backend.testimonials.edit', compact('testimonial'));
        }

        $lastId = session('last_edited_testimonial_id');

        if ($lastId && testimonials::find($lastId)) {
            return redirect()->route('testimonials.edit', $lastId);
        }

        return redirect()->route('testimonials.index')->with('error', 'Data testimonial tidak ditemukan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testimonial = testimonials::find($id);

        if ($testimonial == null) {
            return redirect()->route('testimonials.index')->with('error', 'Testimonial tidak ditemukan.');
        }

        $request->validate([
            'name'   => 'sometimes|required',
            'detail' => 'sometimes|required',
            'rating' => 'sometimes|required|integer|min:1|max:5',
            'photo'  => 'nullable|image',
        ]);

        $testimonial->name   = $request->name;
        $testimonial->detail = $request->detail;
        $testimonial->rating = $request->rating;

        if ($request->hasFile('photo')) {
            // Hapus foto lama
            if ($testimonial->photo && Storage::disk('public')->exists($testimonial->photo)) {
                Storage::disk('public')->delete($testimonial->photo);
            }
            $testimonial->photo = $request->file('photo')->store('images_testimonial', 'public');
        }

        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = testimonials::find($id);

        if ($testimonial != null) {
            if ($testimonial->photo && Storage::disk('public')->exists($testimonial->photo)) {
                Storage::disk('public')->delete($testimonial->photo);
            }

            $testimonial->delete();

            return redirect()->route('testimonials.index')->with('success', 'Testimonial berhasil dihapus.');
        }

        return redirect()->route('testimonials.index')->with('error', 'Testimonial tidak ditemukan.');
    }
}
