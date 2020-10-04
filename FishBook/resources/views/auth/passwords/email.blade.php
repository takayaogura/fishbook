@extends('layouts.auth')

@section('back')
<div class="back"><a href="../login"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"><path id="パス_10" data-name="パス 10" d="M12.5,0,10.227,2.273l8.6,8.6H0v3.247H18.831l-8.6,8.6L12.5,25,25,12.5Z" transform="translate(25 25) rotate(180)" fill="#2699fb"/></svg></a></div>
@endsection

@section('content')
    <div class="container">
        <div class="login-text">
            <h2 class="mb10">パスワード再発行</h2>
        </div>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="forms">
                <div class="form">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="メールアドレス" required autocomplete="email" autofocus>
                    
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="btns">
                <button type="submit" class="btn email">
                    <p>{{ __('パスワードを再発行する') }}</p>
                </button>
            </div>
        </form>
    </div>
@endsection