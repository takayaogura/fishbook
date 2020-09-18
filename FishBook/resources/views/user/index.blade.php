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

                    <p>ID      : {{Auth::user()->id}}</p>
                    <p>name    : {{Auth::user()->name}}</p>
                    <p>email   : {{Auth::user()->email}}</p>

                    @if (isset($profile))
                    <!--なぜstorage/app/public/profile_picture/ではなくstorage/profile_picture/なんだろう？-->
                    <p><img src="{{asset('storage/profile_picture/'.$profile->picture)}}" class="picture"></p>
                    <p>ニックネーム      : {{$profile->user_name}}</p>
                    <p>プロフィール      : {{$profile->intro}}</p>
                    @else
                    <p><a href="/FishBook/user/add">プロフィールを登録する</a></p>
                    @endif

                    <p><a href="/FishBook/book/">図鑑に移動する</a></p>
                    <p><a href="/FishBook/">ホームに移動する</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
