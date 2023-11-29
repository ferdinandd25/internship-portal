<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = User::find($request->user()->id);

        $user->name         = $request->input('name');
        $user->email        = $request->input('email');
        $user->password     = $request->input('password');

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function preferences(){
        $user = Auth::user();
        return view('preferences', ['user' => $user]);
    }
}