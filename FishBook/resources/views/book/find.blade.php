@extends('layouts.helloapp')

@section('title', 'Find')

@section('menubar')
   @parent
   検索ページ
@endsection

@section('content')
<form action="/FishBook/book/result" method="post">
    @csrf
    魚種or場所で検索<input type="text" name="input" value="{{$input ?? ''}}">
    <input type="submit" value="find">
</form>
<form action="/FishBook/book/result" method="post">
    @csrf
    <input type="date" name="from" placeholder="from_date">
    <input type="date" name="until" placeholder="until_date">
    <input type="submit" value="find">
</form>
<form action="/FishBook/book/result" method="post">
    @csrf
    <input type="number" name="minSize" placeholder="min_size">
    <input type="number" name="maxSize" placeholder="max_size">
    <input type="submit" value="find">
</form>
<p><a href="/FishBook/book">図鑑へ戻る</a></p>
@endsection

@section('footer')

@endsection