@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Detail') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table>
                        <tr><th>魚種</th><th>サイズ</th><th>場所</th><th>釣行日</th><th>コメント</th></tr>
                        <tr>
                        <td>{{$item->fish_species}}</td>
                        <td>{{$item->size}}cm</td>
                        <td>{{$item->place}}</td>
                        <td>{{$item->fishing_date}}</td>
                        <td>{{$item->comment}}</td>
                        </tr>
                    </table>
                    @isset($item->picture)
                        <!--なぜstorage/app/public/profile_picture/ではなくstorage/profile_picture/なんだろう？-->
                        <p><img src="{{asset('storage/fish_picture/'.$item->picture)}}" class="picture"></p>                                         
                    @endisset
                    <td><p><a href="/FishBook/book/edit?id={{$item->id}}">編集する</a></p></td>
                    <td><p><a href="/FishBook/book/del?id={{$item->id}}">削除する</a></p></td>
                    <p><a href="/FishBook/book">図鑑へ戻る</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection