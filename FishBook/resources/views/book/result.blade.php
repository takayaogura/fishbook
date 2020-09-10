@extends('layouts.helloapp')

@section('title', 'Result')

@section('menubar')
   @parent
   検索結果ページ
@endsection

@section('content')
@if (isset($items))
    <table>
        <tr><th>ユーザー</th><th>魚種</th><th>サイズ</th><th>場所</th><th>釣行日</th></tr>
        @foreach ($items as $item)
        <tr>
        <td>{{$item->user->name}}</td>
        <td>{{$item->fish_species}}</td>
        <td>{{$item->size}}cm</td>
        <td>{{$item->place}}</td>
        <td>{{$item->fishing_date}}</td>
        <td><p><a href="/FishBook/public/book/edit?id={{$item->id}}">編集する</a></p></td>
        <td><p><a href="/FishBook/public/book/del?id={{$item->id}}">削除する</a></p></td>
        </tr>  
        @endforeach
    </table>
@endif
<p><a href="/FishBook/public/book">図鑑へ戻る</a></p>
@endsection

@section('footer')

@endsection