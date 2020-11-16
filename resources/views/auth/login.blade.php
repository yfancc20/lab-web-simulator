@extends('layout')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="auth-pages">
        <div class="auth-left">
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
            <h2>歡迎回來！</h2>
            <div class="spacer"></div>

            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}

                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="密碼" required>

                <div class="login-container">
                    <button type="submit" class="auth-button">登入</button>
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 記住我
                    </label>
                </div>

                <div class="spacer"></div>

                <a href="{{ route('password.request') }}">
                    忘記密碼請按此
                </a>

            </form>
        </div>

        <div class="auth-right">
            <h2>如果您世新來的</h2>
            <div class="spacer"></div>
            <p><strong>省去好多時間唷</strong></p>
            <p>快速建立新帳戶，很快建立新帳戶，超快建立新帳戶。</p>
            <div class="spacer"></div>
            <a href="{{ route('register') }}" class="auth-button-hollow">註冊新帳戶</a>

        </div>
    </div>
</div>
@endsection
