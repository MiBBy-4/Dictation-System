@extends('layouts.head')
@section('title')Приветствие@endsection
@section('content')
<div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="card-header text-center">
        <h5 class="m-0">Система написания диктантов</h5>
        </div>
        <div class="card-body">
            <h6 class="card-title">Необходима авторизация</h6>

            <p class="card-text">Для дальнейшего написания диктанта необходимо авторизоваться.</p>
                <div class="container d-flex justify-content-center">
                    <a href="{{ route('login') }}" class="btn btn-primary mr-3">Авторизация</a>
                    <a href="{{ route('register') }}" class="btn btn-primary">Регистрация</a>
                </div>
            
        </div>
    </div>
</div>
@endsection