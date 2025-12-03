<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Pengguna;

class ProfileController extends Controller
{
    /* ============================================================
        SHOW EDIT PROFILE PAGE
    ============================================================ */
    public function edit()
    {
        $user = Auth::user();
        $profile = Pengguna::where('user_id', $user->id)->first();

        return view('auth.profile', compact('user', 'profile'));
    }


    /* ============================================================
        UPDATE BASIC PROFILE (PATCH /profile)
    ============================================================ */
    public function update(Request $request)
    {
        $request->validate([
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'required|string|max:255',
            'country'      => 'nullable|string|max:255',
            'phone'        => 'nullable|string|max:100',
            'email'        => 'required|email',
            'bio'          => 'nullable|string',
            'linkedin'     => 'nullable|string|max:255',
            'portfolio'    => 'nullable|string|max:255',
        ]);

        $user = Auth::user();
        $profile = Pengguna::where('user_id', $user->id)->first();

        // Update user table
        $user->name  = $request->first_name . ' ' . $request->last_name;
        $user->email = $request->email;
        $user->save();

        // Update profile table
        $profile->first_name = $request->first_name;
        $profile->last_name  = $request->last_name;
        $profile->country    = $request->country;
        $profile->phone      = $request->phone;
        $profile->bio        = $request->bio;
        $profile->linkedin   = $request->linkedin;
        $profile->portfolio  = $request->portfolio;
        $profile->save();

        return back()->with('success', 'Profile updated successfully!');
    }


    /* ============================================================
        UPDATE PROFILE PICTURE (POST /profile/picture)
    ============================================================ */
    public function updatePicture(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|max:2048'
        ]);

        $user = Auth::user();
        $profile = Pengguna::where('user_id', $user->id)->first();

        // Store file
        $fileName = 'profile_' . time() . '.' . $request->profile_picture->extension();
        $request->profile_picture->storeAs('public/profile', $fileName);

        $profile->photo = $fileName;
        $profile->save();

        return back()->with('success', 'Profile picture changed successfully!');
    }


    /* ============================================================
        UPDATE PASSWORD (POST /profile/password)
    ============================================================ */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password'         => 'required|min:6|confirmed',
        ]);

        $user = Auth::user();

        // Validate current password
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors([
                'current_password' => 'Incorrect current password'
            ]);
        }

        // Update password
        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Password updated successfully!');
    }
}
