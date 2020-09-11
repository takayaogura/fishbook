@extends('layouts.helloapp')

@section('title', 'Edit')

@section('menubar')
   @parent
   図鑑編集ページ
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
    <form action="/FishBook/book/edit" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}"><!--updateファンクションの「$request->id」に値を入れるためのinputタグ-->
        <tr><th>魚種: </th><td><input type="text" name="fish_species" value="{{$form->fish_species}}"></td></tr>
        <tr><th>サイズ(cm): </th><td><input type="number" name="size" value="{{$form->size}}"></td></tr>
        <tr><th>場所: </th><td><input type="text" name="place" value="{{$form->place}}"></td></tr>
        <tr><th>釣行日: </th><td><input type="datetime" name="fishing_date" value="{{$form->fishing_date}}"></td></tr>
        <tr><th></th><td><input type="submit" value="edit"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 Takaya.
@endsection