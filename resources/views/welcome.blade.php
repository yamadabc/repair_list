@extends('layouts.app')

@section('content')

    <h1 class='text-center'>修繕管理システム</h1>

    <div class="d-flex flex-row justify-content-center">
        <a href="{{ route('login') }}" class='btn btn-outline-primary btn-lg'>ログイン</a>
        <a href="{{ route('register') }}" class='btn btn-outline-success btn-lg'>新規登録</a>
        
    </div>
</div>

@endsection