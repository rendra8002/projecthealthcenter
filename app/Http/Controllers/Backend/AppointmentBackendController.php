<?php

namespace App\Http\Controllers\Backend;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AppointmentBackendController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all(); // ambil semua data
        return view('pages.backend.appointment.index', compact('appointments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email',
            'subject'    => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Appointment::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'subject'    => $request->subject,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Appointment berhasil dikirim! Kami akan segera menghubungi Anda.');
    }



    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('pages.backend.appointment.show', compact('appointment'));
    }
}
