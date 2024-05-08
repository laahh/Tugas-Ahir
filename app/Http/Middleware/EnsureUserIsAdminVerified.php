<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserIsAdminVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // Memastikan pengguna telah login
        if (!Auth::check()) {
            return redirect('login')->with('error', 'Anda harus login untuk mengakses halaman ini.');
        }

        // Cek apakah pengguna sudah diverifikasi
        if (!auth()->user()->is_verified) {
            return redirect('dashboard')->with('error', 'Anda harus diverifikasi untuk mengakses halaman ini.');
        }

        return $next($request);
    }
}
