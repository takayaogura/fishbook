<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class BooksController extends Controller
{

    public function index(Request $request)
    {
        $user = Auth::user();
        $books = DB::select('select * from books join users on  books.user_id=users.id');
        return view('books.index', ['books' => $books, 'user' => $user]);
    }

    public function post(Request $request)
    {
        $user = Auth::user();
        $items = DB::select('select * from users');
        return view('books.index');
    }

    public function add(Request $request)
    {
        $user = Auth::user();
        return view('books.add', ['user' => $user]);
    }

    public function create(Request $request)
    {
        $user = Auth::user();
        $param = [
            'user_id' => $user->id,
            'fish_species' => $request->fish_species,
            'size' => $request->size,
            'place' => $request->place,
            'fishing_date' => $request->fishing_date,
        ];
        DB::insert('insert into books (user_id, fish_species, size, place, fishing_date) values (:user_id, :fish_species, :size, :place, :fishing_date)', $param);
        return redirect('/home');
    }
}