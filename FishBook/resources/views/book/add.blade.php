@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
   @parent
   図鑑登録ページ
@endsection

@section('content')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/FishBook/public/book/add" method="post">
    <table>
        @csrf
        <tr><th>魚種: </th><td><input type="text" name="fish_species"></td></tr>
        <tr><th>サイズ(cm): </th><td><input type="number" name="size"></td></tr>
        <tr><th>場所: </th><td><input type="text" name="place"></td></tr>
        <tr><th>釣行日: </th><td><input type="datetime" name="fishing_date"></td></tr>
        <tr><th></th><td><input type="submit" value="add"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 Takaya.
@endsection