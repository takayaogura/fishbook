@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
   @parent
   インデックスページ
@endsection

@section('content')
   <table>
   <tr><th>Name</th><th>Mail</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
       </tr>
   @endforeach
   </table>
   <p><a href="/FishBook/public/home">Homeへ</a></p>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection