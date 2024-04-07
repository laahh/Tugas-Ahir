<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'contact_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);


        auth()->user()->update($validatedData);

        return redirect('dashboard')->with('success', 'Profile updated successfully.');
    }


    public function showUsers()
    {
        $users = User::all();
        return view('admin.pages.pengguna.index', compact('users'));
    }
    public function toggleBan(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->is_banned = !$user->is_banned;
        $user->save();

        return response()->json(['success' => true, 'is_banned' => $user->is_banned]);
    }
}
