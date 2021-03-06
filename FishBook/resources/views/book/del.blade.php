@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Delete') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($errors) > 0)
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="/FishBook/book/del" method="post">
                    <table>
                        @csrf
                        <input type="hidden" name="id" value="{{$form->id}}"><!--BookControllerファンクションの「$request->id」に値を入れるためのinputタグ-->
                        <tr><th>魚種: </th><td>{{$form->fish_species}}</td></tr>
                        <tr><th>サイズ(cm): </th><td>{{$form->size}}</td></tr>
                        <tr><th>場所: </th><td>{{$form->place}}</td></tr>
                        <tr><th>釣行日: </th><td>{{$form->fishing_date}}</td></tr>
                        <tr><th></th><td><input type="submit" value="delete"></td></tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection