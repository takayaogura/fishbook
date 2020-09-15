@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('MyPage') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><a href="/FishBook/edit">編集する</a></p>
                    <p><a href="/FishBook/book/">図鑑に移動する</a></p>
                    <p><a href="/FishBook/">ホームに移動する</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
