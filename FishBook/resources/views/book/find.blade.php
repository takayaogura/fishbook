@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Find') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/FishBook/book/result" method="post">
                        @csrf
                        魚種or場所で検索<input type="text" name="input" value="{{$input ?? ''}}">
                        <input type="submit" value="find">
                    </form>
                    <form action="/FishBook/book/result" method="post">
                        @csrf
                        <input type="date" name="from" placeholder="from_date">
                        <input type="date" name="until" placeholder="until_date">
                        <input type="submit" value="find">
                    </form>
                    <form action="/FishBook/book/result" method="post">
                        @csrf
                        <input type="number" name="minSize" placeholder="min_size">
                        <input type="number" name="maxSize" placeholder="max_size">
                        <input type="submit" value="find">
                    </form>
                    <p><a href="/FishBook/book">図鑑へ戻る</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection