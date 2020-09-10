@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
   @parent
   Booksページ
@endsection

@section('content')
@if (Auth::check())
    <p>{{$user->name}}さんの図鑑です</p>
@else
    <p>ログインしていません</p>
@endif
<table>
<tr><th>ID</th><th>魚種</th><th>サイズ</th><th>場所</th><th>釣行日</th></tr>
    @isset($books)
        @foreach ($books as $book)
        <tr>
            <td>{{$book->user_id}}</td>
            <td>{{$book->fish_species}}</td>
            <td>{{$book->size}}cm</td>
            <td>{{$book->place}}</td>
            <td>{{$book->fishing_date}}</td>
        </tr>
        @endforeach
    @endisset
</table>
<p><a href="/FishBook/public/home">Homeへ戻る</a></p>
<p><a href="/FishBook/public/book/add">図鑑に登録する</a></p>
@endsection

@section('footer')
copyright 2020 Takaya.
@endsection