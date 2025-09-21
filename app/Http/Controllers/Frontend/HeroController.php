<?php

namespace App\Http\Controllers\Frontend;

use App\Models\hero;
use App\Models\aboutus;
use App\Models\gallery;
use App\Models\partner;
use App\Models\sejarah;
use App\Models\services;
use App\Models\appointment;
use App\Models\mediasocial;
use App\Models\tenagakerja;
use App\Models\testimonials;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroes = Hero::where('status', 'active')->get();
        $about = Aboutus::where('status', 'active')->first();
        $teams  = tenagakerja::where('status', 'active')->get();
        $galleries = gallery::where('status', 'active')->get();
        $testimonials = testimonials::where('status', 'active')->get();
        $services = services::where('status', 'active')->get();
        $sejarah = Sejarah::where('status', 'active')->first();
        $partners = partner::where('status', 'active')->get();
        $mediasocials = mediasocial::where('status', 'active')->get();




        return view('pages.frontend.hero.index', compact('heroes', 'about', 'teams', 'galleries', 'testimonials', 'services', 'sejarah', 'partners', 'mediasocials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email',
            'subject'    => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        appointment::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'subject'    => $request->subject,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Appointment berhasil dikirim! Kami akan segera menghubungi Anda.');
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
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
