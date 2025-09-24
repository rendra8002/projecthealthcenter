<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AutoLogout
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            // 🚫 Kecualikan superadmin (contoh: berdasarkan username)
            if ($user->email === 'adminraja@gmail.com') {
                return $next($request);
            }

            $lastActivity = session('lastActivityTime');
            $now = now()->timestamp;

            // Auto logout setelah 5 menit idle
            if ($lastActivity && $now - $lastActivity > 2) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                return redirect()->route('login')
                    ->with('message', 'Sesi Anda telah berakhir, silakan login kembali.');
            }

            session(['lastActivityTime' => $now]);
        }

        return $next($request);
    }
}
