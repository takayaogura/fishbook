<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $items = User::all();
        return view('user.index', ['items' => $items]);
    }
}
