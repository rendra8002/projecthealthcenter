<?php

namespace App\Http\Controllers\Frontend;

use App\Models\hero;
use App\Models\aboutus;
use App\Models\tenagakerja;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroes = hero::all();
        $aboutuses = aboutus::first();
        $tenagakerjas = tenagakerja::all(); // ambil data dokter

        return view('pages.frontend.hero.index', compact('heroes', 'aboutuses', 'tenagakerjas'));
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
