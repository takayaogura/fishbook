@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
   @parent
   <p>{{$user->name}}{{ __('さんの図鑑です') }} </p>
@endsection

@section('content')
<table>
<tr><th>魚種</th><th>サイズ</th><th>場所</th><th>釣行日</th></tr>
    @isset($items)
        @foreach ($items as $item)
        <tr>
            <!--$item->user->nameを削除-->
            <td>{{$item->fish_species}}</td>
            <td>{{$item->size}}cm</td>
            <td>{{$item->place}}</td>
            <td>{{$item->fishing_date}}</td>
            <td><p><a href="/FishBook/book/edit?id={{$item->id}}">編集する</a></p></td>
            <td><p><a href="/FishBook/book/del?id={{$item->id}}">削除する</a></p></td>
        </tr>
        @endforeach
    @endisset
</table>
{{$items->links()}}
<p><a href="/FishBook/">Homeへ戻る</a></p>
<p><a href="/FishBook/book/add">登録する</a></p>
<p><a href="/FishBook/book/find">検索する</a></p>
@endsection

@section('footer')
copyright 2020 Takaya.
@endsection