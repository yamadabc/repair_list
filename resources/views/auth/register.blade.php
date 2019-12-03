@extends('layouts.app')

@section('content')
@section('title')社員登録@endsection
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">登録</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">名前</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">メールアドレス</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="depart" class="col-md-4 col-form-label text-md-right">部署</label>

                            <div class="col-md-6">
                                <input type="radio" class="@error('depart') is-invalid @enderror" name="depart" value="代表取締役" required>代表取締役
                                <input type="radio" class="@error('depart') is-invalid @enderror" name="depart" value="システム開発部" required>システム開発部
                                <input type="radio" class="@error('depart') is-invalid @enderror" name="depart" value="事業推進部" required>事業推進部
                                <input type="radio" class="@error('depart') is-invalid @enderror" name="depart" value="不動産営業戦略部" required>不動産営業戦略部
                                <input type="radio" class="@error('depart') is-invalid @enderror" name="depart" value="不動産経営戦略部" required>不動産経営戦略部
                                <input type="radio" class="@error('depart') is-invalid @enderror" name="depart" value="経営戦略部" required>経営戦略部                                
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="post" class="col-md-4 col-form-label text-md-right">役職</label>

                            <div class="col-md-6">
                                <input type="radio" class="@error('post') is-invalid @enderror" name="post" value="代表取締役" required>代表取締役
                                <input type="radio" class="@error('post') is-invalid @enderror" name="post" value="マネージャー" required>マネージャー
                                <input type="radio" class="@error('post') is-invalid @enderror" name="post" value="社員" required>社員
                            </div>    
                        </div> 
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">パスワード</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <small class='text-muted'>*8文字以上</small>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                       
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">確認用パスワード</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
