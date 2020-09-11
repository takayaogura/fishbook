<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        //$itemsに図鑑のデータを入れる　booksテーブルの中から、ログインしているユーザーのbookのみを選び5件ずつ表示
        $items = Book::orderBy('fishing_date', 'desc')->where('user_id', $user->id)->simplePaginate(5);
        return view('book.index', ['items' => $items, 'user' => $user]);
    }

    public function find(Request $request)
    {
        return view('book.find',['input' => '']);
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        //textで登録されている魚種と場所は、共通のフォームで検索
        if (!empty($request->input)) {
            $items = Book::where('user_id', $user->id)->where('fish_species', $request->input)->orwhere('place', $request->input)->orderBy('fishing_date', 'desc')->get();
            $param = ['input' => $request->input, 'items' => $items,];
            return view('book.result', $param);
        } elseif (!empty($request['from']) && !empty($request['until'])) {
            //ハッシュタグの選択された20xx/xx/xx ~ 20xx/xx/xxのレポート情報を取得
            $date = Book::getDate($request['from'], $request['until']);
            $param = ['input' => $request->input, 'items' => $date,];
            return view('book.result', $param);
        } elseif (!empty($request['minSize']) && !empty($request['maxSize'])) {
            $size = Book::getSize($request['minSize'], $request['maxSize']);
            $param = ['input' => $request->input, 'items' => $size,];
            return view('book.result', $param);
        } else {
            //リクエストデータがなければそのままで表示
            return view('book.find');
        }
    }

    public function add(Request $request)
    {
        $user = Auth::user();
        return view('book.add');
    }

    public function create(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, Book::$rules);
        $book = new Book;
        $form = $request->all();
        unset($form['_token']);
        $book->fill($form);
        $book->user_id = $user->id;
        $book->save();
        return redirect('/book');
    }

    public function edit(Request $request)
    {
        $book = Book::find($request->id);
        return view('book.edit', ['form' => $book]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, Book::$rules);
        $book = Book::find($request->id);
        if($book == null) {
            $book = new Book;
        }
        $form = $request->all();
        unset($form['_token']);
        $book->fill($form);
        $book->user_id = $user->id;
        $book->save();
        return redirect('/book');
    }

    public function delete(Request $request)
    {
        $book = Book::find($request->id);
        return view('/book.del', ['form' => $book]);
    }

    public function remove(Request $request)
    {
        Book::find($request->id)->delete();
        return redirect('/book');
    }

}
