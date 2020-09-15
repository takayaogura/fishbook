<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function add(Request $request)
    {
        $user = Auth::user();
        return view('user.add');
    }

    public function create(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, Profile::$rules);
        //$profile = Profile::create([['user_id' => $user->id, 'user_name' => $request->user_name, 'intro' => $request->intro]]);
        $profile = new Profile;

        $profile->user_id = $user->id;
        $profile->user_name = $request->user_name;
        $profile->intro = $request->intro;

        $path = $request->file('picture')->store('public/profile_picture');
        $profile->picture = basename($path);

        $profile->save();
        return redirect('/user');
    }

}
