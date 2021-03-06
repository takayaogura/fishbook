@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add') }}</div>

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
                    <form action="/FishBook/book/add" method="post" enctype='multipart/form-data'>
                    <table>
                        @csrf
                        <tr><th>魚種: </th><td><input type="text" name="fish_species"></td></tr>
                        <tr><th>サイズ(cm): </th><td><input type="number" name="size"></td></tr>
                        <tr><th>場所: </th><td><input type="text" name="place"></td></tr>
                        <tr><th>釣行日: </th><td><input type="datetime" name="fishing_date"></td></tr>
                        <tr><th>コメント: </th><td><input type="text" name="comment"></td></tr>
                        <tr><th>写真: </th><td><input type="file" name="picture"></td></tr>
                        <tr><th></th><td><input type="submit" value="add"></td></tr>
                    </table>
                    </form>
                    <p><a href="/FishBook/book/">図鑑に戻る</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection