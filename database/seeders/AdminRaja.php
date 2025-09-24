<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\File;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminRaja extends Seeder
{
    public function run(): void
    {
        // pastikan file default ada di database/seeders/photos/yt.jpg
        $source = database_path('seeders/photos/yt.jpg');
        $destination = 'profile/yt.jpg'; // path dalam storage/public

        // kalau file belum ada di storage, copy dulu
        if (!Storage::disk('public')->exists($destination)) {
            Storage::disk('public')->put($destination, File::get($source));
        }

        // buat atau update user
        User::updateOrCreate(
            ['email' => 'adminraja@gmail.com'],
            [
                'username' => 'ADM1N GAC0R',
                'photo'    => $destination, // simpan path relatif
                'password' => Hash::make('supersecret'),
                'status'   => 'active',
            ]
        );
    }
}
