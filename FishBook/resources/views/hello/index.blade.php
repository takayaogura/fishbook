@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
   @parent
   インデックスページ
@endsection

@section('content')
    <p>登録ユーザー一覧</p>
   <table>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->name}}</td>
       </tr>
   @endforeach
   </table>
   <p><a href="/FishBook/">Homeへ</a></p>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection