@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="login-text">
            <h2 class="mb10">ログイン</h2>
            <p class="mb10">釣った魚のデータを記録・管理できます</p>
            <p class="mb15">さあ、FishBookで自分だけの<br>お魚図鑑を作ってみよう！！</p>
            <button type="button" class="lp-link"><p><a href="">FishBookで出来ること ></a></p></button>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="forms">
                <div class="form">
                    <input id="name" type="text" class="form-control @error('email') is-invalid @enderror" name="name" placeholder="ユーザーネーム" required autocomplete="email" autofocus>
                    
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="パスワード" required autocomplete="current-password">
                </div> 
            </div>

            <div class="btns">
                <button type="submit" class="btn login">
                    <p>{{ __('ログイン') }}</p>
                </button>

                <button type="buttun" class="btn register">
                    <p><a href="register">{{ __('アカウントを作成') }}</a></p>
                </button>

                @if (Route::has('password.request'))
                <p><a class="forget" href="{{ route('password.request') }}">
                    {{ __('パスワードをお忘れですか？') }}
                </a></p>
                @endif
            </div>
        </form>
    </div>
@endsection
