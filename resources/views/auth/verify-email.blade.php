@extends('layouts.app')

@section('content')
    <div class="verify-notice">
        <p>登録していただいたメールアドレスに認証メールを送付しました。</p>
        <p>メール認証を完了してください。</p>
        <form method="GET" action="/mypage/profile">
            <button type="submit">
                認証はこちらから
            </button>
        </form>
        <p><a href="">認証メールを再送する</a></p>
    </div>
@endsection
