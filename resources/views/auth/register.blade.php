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
                    <label for="name" class="col-md-5 col-form-label text-md-left">ユーザー名</label>

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
                    <label for="email" class="col-md-5 col-form-label text-md-left">メールアドレス</label>

                    <div class="col-md-7">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror Simulator-login-input" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="メールアドレス">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>メールアドレスを入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-5 col-form-label text-md-left">パスワード</label>

                    <div class="col-md-7">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror Simulator-login-input" name="password" required autocomplete="new-password" placeholder="半角英数字6桁以上">

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

                <h3 class="register-title">事前情報入力項目</h3>
                <hr>
                <div class="form-group row">
                    <label for="child1" class="col-md-5 col-form-label text-md-left">子ども（0歳〜18歳）</label>

                    <div class="col-md-7">
                        <input id="child1" type="number" class="form-control @error('child1') is-invalid @enderror Simulator-register-input" name="child1" value="{{ old('child1') }}" required autocomplete="child1" autofocus placeholder="人数を入力ください">

                        @error('child1')
                        <span class="invalid-feedback" role="alert">
                            <strong>人数を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="child2" class="col-md-5 col-form-label text-md-left">子ども（19歳〜22歳）</label>

                    <div class="col-md-7">
                    <input id="child2" type="number" class="form-control @error('child2') is-invalid @enderror Simulator-register-input" name="child2" value="{{ old('child2') }}" required autocomplete="child2" placeholder="人数を入力ください">

                        @error('child2')
                        <span class="invalid-feedback" role="alert">
                            <strong>人数を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="elderly1" class="col-md-5 col-form-label text-md-left">高齢者（同居）</label>

                    <div class="col-md-7">
                    <input id="elderly1" type="number" class="form-control @error('elderly1') is-invalid @enderror Simulator-register-input" name="elderly1" value="{{ old('elderly1') }}" required autocomplete="elderly1" placeholder="人数を入力ください">

                        @error('elderly1')
                        <span class="invalid-feedback" role="alert">
                            <strong>人数を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="elderly2" class="col-md-5 col-form-label text-md-left">高齢者（別居）</label>

                    <div class="col-md-7">
                    <input id="elderly2" type="number" class="form-control @error('elderly2') is-invalid @enderror Simulator-register-input" name="elderly2" value="{{ old('elderly2') }}" required autocomplete="elderly2" placeholder="人数を入力ください">

                        @error('elderly2')
                        <span class="invalid-feedback" role="alert">
                            <strong>人数を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                
                <hr>

                <div class="register-text">
                    <p>アカウント作成が完了した時点で、当社の<a href=#>利用規約</a>に同意したものとします。</p>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn Simulator-submit-button w-100">
                        アカウント作成
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
