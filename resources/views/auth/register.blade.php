@extends('layout')

@section('title', '註冊新帳戶')

@section('content')
<div class="container">
    <div class="auth-pages">
        <div>
            @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
            @endif @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <h2>註冊新帳戶</h2>
            <div class="spacer"></div>

            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="使用者名稱" required autofocus>

                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="信箱" required>

                <input id="password" type="password" class="form-control" name="password" placeholder="密碼" required>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="密碼再確認"
                    required>

                <div class="login-container">
                    <button type="submit" class="auth-button">繼續</button>
                    <div class="already-have-container">
                        <p><strong>已經有帳戶？</strong></p>
                        <a href="{{ route('login') }}">登入</a>
                    </div>
                </div>

            </form>
        </div>

        <div class="auth-right">
            <h2>用戶規定</h2>
            <div class="spacer"></div>
            <p><strong>以下複製網路的</strong></p>
            <p> 參加者必須遵守momo購物網的服務條款、使用規範及其他交易有關之規定</p>

            &nbsp;
            <div class="spacer"></div>
            <p><strong>註冊流程</strong></p>
            <p>註冊及移動帳號流程。註冊流程更簡單，移動流程更順暢，帳戶資訊更安全。</p>
        </div>
    </div> <!-- end auth-pages -->
</div>
@endsection
