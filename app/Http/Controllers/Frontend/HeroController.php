<?php

namespace App\Http\Controllers\Frontend;

use App\Models\hero;
use App\Models\aboutus;
use App\Models\tenagakerja;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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

        return view('pages.frontend.message.index');
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
    public function store()
    {
        //
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