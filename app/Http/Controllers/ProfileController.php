<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\User;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function index() {
        $user = auth()->user();

        return view('pages.profile', compact('user'));
    }

    public function updateProfilePage() {
        $user = auth()->user();

        return view('pages.editprofile', compact('user'));
    }

    public function updateProfile(ProfileRequest $request) {
        User::findOrFail(auth()->id())->update([
            'username' => Str::lower($request->username) ?? auth()->user()->username,
            'email'    => Str::lower($request->email) ?? auth()->user()->email,
            'phone'    => $request->phone ?? auth()->user()->phone,
            'address'  => $request->address ?? auth()->user()->address
        ]);

        return redirect()->route('profile');
    }
}
