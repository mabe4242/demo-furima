@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
<div class="login-form__content">
    <form class="form" action="/login" method="post">
        @csrf
        <div class="login-form__heading">
            <h2>ログイン</h2>
        </div>
        <div class="form__group">
            <label class="form__label--item" for="email">メールアドレス</label>
            <input class="form__label--input" name="email" value="{{ old('email') }}" id="email"/>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__group">
            <label class="form__label--item" for="password">パスワード</label>
            <input class="form__label--input" name="password" value="{{ old('password') }}" type="password" id="password"/>
            <div class="form__error">
                @error('password')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">ログインする</button>
        </div>
        <div class="register__link">
            <a class="register__button-submit" href="/register">会員登録の方はこちら</a>
        </div>
    </form>
</div>
@endsection
