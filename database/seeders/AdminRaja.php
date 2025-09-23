<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminRaja extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'adminraja@gmail.com'], // cek kalau sudah ada, update
            [
                'username' => 'ADM1N GAC0R',
                'photo'    => 'profile/yt.jpg', // bisa diisi path default kalau mau
                'password' => Hash::make('supersecret'), // ganti dengan passwordmu
                'status'   => 'active',
            ]
        );
    }
}
