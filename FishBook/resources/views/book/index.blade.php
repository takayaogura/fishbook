@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('FishBook') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (isset($user))
                        <p>{{$user->name}}{{ __('さんの図鑑です') }} </p>

                        <p><a href="/FishBook/user">マイページへ</a></p>
                        <table>
                            <tr><th>魚種</th><th>釣行日</th></tr>
                                @isset($items)
                                    @foreach ($items as $item)
                                    <tr>
                                        <!--$item->user->nameを削除-->
                                        <td><a href="/FishBook/book/detail?id={{$item->id}}">{{$item->fish_species}}</a></td>
                                        <td>{{$item->fishing_date}}</td>
                                    </tr>
                                    @endforeach
                                @endisset
                        </table>
                        {{$items->links()}}
                        <p><a href="/FishBook/book/add">登録する</a></p>
                        <p><a href="/FishBook/book/find">検索する</a></p>
                        
                    @else
                        <p>ログインしてください</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
