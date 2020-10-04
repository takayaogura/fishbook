@extends('layouts.auth')

@section('back')
<div class="back"><a href="login"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"><path id="パス_10" data-name="パス 10" d="M12.5,0,10.227,2.273l8.6,8.6H0v3.247H18.831l-8.6,8.6L12.5,25,25,12.5Z" transform="translate(25 25) rotate(180)" fill="#2699fb"/></svg></a></div>
@endsection

@section('content')
    <div class="container">
        <div class="login-text">
            <h2 class="mb20">アカウントを作成</h2>
            <button type="button" class="lp-link"><p><a href="">FishBookで出来ること ></a></p></button>
        </div>


            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="forms">
                    <div class="form">
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="ユーザーネーム" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form">
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="メールアドレス" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form">
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="パスワード" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form">
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="パスワード確認用" required autocomplete="new-password">
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn create">
                            <p>{{ __('アカウントを作成') }}</p>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
