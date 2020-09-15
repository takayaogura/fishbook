<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $profile = Profile::where('user_id', '=', Auth::user()->id)->first();
        return view('user.index', ['profile' => $profile]);
    }

    public function edit(Request $request) 
    {
        $user = Auth::user();
        return view('user.edit', []);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        //validationを入れる
    }


}
