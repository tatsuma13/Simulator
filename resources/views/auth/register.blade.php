@extends('layouts.app')

@section('content')
<h3 class="Simulator-title">確定申告シミュレーター</h3>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h3 class="register-title">新規会員登録</h3>

            <hr>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-5 col-form-label text-md-left">ユーザー名<span class="ml-1 Simulator-require-input-label"><span class="Simulator-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror Simulator-login-input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="確定 太郎">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>氏名を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-5 col-form-label text-md-left">メールアドレス<span class="ml-1 Simulator-require-input-label"><span class="Simulator-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror Simulator-login-input" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="×××××××××@××××.××">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>メールアドレスを入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-5 col-form-label text-md-left">パスワード<span class="ml-1 Simulator-require-input-label"><span class="Simulator-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror Simulator-login-input" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
　　                <label for="password-confirm" class="col-md-5 col-form-label text-md-left">パスワード（確認）</label>

                    <div class="col-md-7">
                        <input id="password-confirm" type="password" class="form-control Simulator-login-input" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="register-text">
                    <p>アカウント作成が完了した時点で、当社の<a href=#>利用規約</a>に同意したものとします。</p>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn Simulator-submit-button w-100">
                        アカウント作成
                    </button>
                </div>
            </form>
             <p>or</p>
                 <div>
                     <p>G Googleで登録</p>
                     <p>Googleでアカウント登録する方</p>
                </div>
        </div>
    </div>
</div>
@endsection
