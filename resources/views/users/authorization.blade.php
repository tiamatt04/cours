@extends('welcome')
@section('title', 'Авторизация')
@section('content')
    <div class="section">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form method="post">
                    @csrf
                    <h2 class="text-center mt-4 text-white">Авторизация</h2>
                    <div class="mb-3">
                        <label for="login" class="form-label text-danger fs-5">Логин</label>
                        <input type="text" class="form-control @error('login') is-invalid @enderror" id="login" name="login">
                        @error('login')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label orm-label text-danger fs-5">Пароль</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        @error('login')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-danger btn-lg">Войти</button>
                </form></div>
            <div class="col"></div>
        </div>
    </div>
@endsection
