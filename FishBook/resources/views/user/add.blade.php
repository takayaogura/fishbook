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

                    <form action="/FishBook/user/add" method="post" enctype='multipart/form-data'>
                        <table>
                            @csrf
                            <tr><th>ニックネーム: </th><td><input type="text" name="user_name"></td></tr>
                            <tr><th>プロフィール: </th><td><input type="text" name="intro"></td></tr>
                            <tr><th>写真: </th><td><input type="file" name="picture"></td></tr>
                            <tr><th></th><td><input type="submit" value="add"></td></tr>
                        </table>
                    </form>
                    
                    <p><a href="/FishBook/book/">図鑑に移動する</a></p>
                    <p><a href="/FishBook/">ホームに移動する</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
