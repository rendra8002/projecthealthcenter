<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class UserBackendController extends Controller
{

    public function toggleStatus(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User tidak ditemukan']);
        }

        if ($user->email === 'adminraja@gmail.com') {
            return response()->json(['success' => false, 'message' => 'Superadmin tidak bisa diubah']);
        }

        $user->status = $request->status;
        $user->save();

        return response()->json(['success' => true]);
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datauser = User::all();
        return view('pages.backend.user.index', compact('datauser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());
        // Validasi input sederhana
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'photo' => 'nullable|image',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        if ($request->hasFile('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('images_user', 'public');
        }

        User::create($validatedData);

        return redirect()->route('user.index');
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
        $datauser = User::find($id);

        if ($datauser != null) {
            session(['last_edited_hero_id' => $id]);
            return view('pages.backend.user.edit', compact('datauser'));
        }

        $lastId = session('last_edited_hero_id');

        if ($lastId && User::find($lastId)) {
            return redirect()->route('user.edit', $lastId);
        }

        return redirect()->route('user.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datauser = User::find($id);

        if ($datauser == null) {
            return redirect()->route('user.index')->with('error', 'Hero tidak ditemukan.');
        }

        $request->validate([
            'title' => 'sometimes|required',
            'subtitle' => 'sometimes|required',
            'button_text' => 'sometimes|required',
            'button_link' => 'sometimes|required',
            'photo' => 'nullable|image',
        ]);

        $datauser->title = $request->title;
        $datauser->subtitle = $request->subtitle;
        $datauser->button_text = $request->button_text;
        $datauser->button_link = $request->button_link;

        if ($request->hasFile('photo')) {
            // Hapus foto lama
            if ($datauser->photo && Storage::disk('public')->exists($datauser->photo)) {
                Storage::disk('public')->delete($datauser->photo);
            }
            $datauser->photo = $request->file('photo')->store('images_user', 'public');
        }

        $datauser->save();

        return redirect()->route('user.index')->with('success', 'Hero berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $datauser = User::find($id);

        if ($datauser != null) {
            // Cek apakah ada file photo yang tersimpan
            if ($datauser->photo && Storage::disk('public')->exists($datauser->photo)) {
                Storage::disk('public')->delete($datauser->photo);
            }

            $datauser->delete();

            return redirect()->route('user.index')->with('success', 'Hero berhasil dihapus.');
        }

        return redirect()->route('user.index')->with('error', 'Hero tidak ditemukan.');
    }
}
