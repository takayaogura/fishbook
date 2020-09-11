@extends('layouts.helloapp')

@section('title', 'Result')

@section('menubar')
   @parent
   検索結果ページ<br>検索条件：{{$input}}
@endsection

@section('content')
@if (isset($items))
    <table>
        <tr><th>魚種</th><th>サイズ</th><th>場所</th><th>釣行日</th></tr>
        @foreach ($items as $item)
        <tr>
        <td>{{$item->fish_species}}</td>
        <td>{{$item->size}}cm</td>
        <td>{{$item->place}}</td>
        <td>{{$item->fishing_date}}</td>
        <td><p><a href="/FishBook/book/edit?id={{$item->id}}">編集する</a></p></td>
        <td><p><a href="/FishBook/book/del?id={{$item->id}}">削除する</a></p></td>
        </tr>
        @endforeach
    </table>
@endif
<p><a href="/FishBook/book">図鑑へ戻る</a></p>
@endsection

@section('footer')

@endsection