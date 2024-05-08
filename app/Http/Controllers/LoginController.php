<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    //tambahkan script di bawah ini
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }


    //tambahkan script di bawah ini 
    public function handleProviderCallback(Request $request)
    {
        $user_google    = Socialite::driver('google')->user();
        $user           = User::where('email', $user_google->getEmail())->first();
        //jika user ada maka langsung di redirect ke halaman home
        //jika user tidak ada maka simpan ke database
        //$user_google menyimpan data google account seperti email, foto, dsb

        if ($user != null) {
            auth()->login($user, true);
            $user->update([
                'email_verified_at' => Carbon::now()
            ]);

            return redirect()->intended('/');
        } else {

            $create = User::create([
                'email'             => $user_google->getEmail(),
                'name'              => $user_google->getName(),
                'password'          => 0,
                'email_verified_at' => Carbon::now()
            ]);



            auth()->login($create, true);
            return redirect()->intended('/');
        }
    }
}
