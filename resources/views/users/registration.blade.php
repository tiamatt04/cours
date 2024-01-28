@extends('welcome')
@section('title', 'Регистрация')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form method="post">
                    @csrf
                    <h2 class="text-center text-white mt-4">Регистрация</h2>

                    <div class="mb-3">
                        <label for="name" class="form-label text-danger fs-5">Имя</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="surname" class="form-label text-danger fs-5">Фамилия</label>
                        <input type="text" class="form-control @error('surname') is-invalid @enderror" id="surname" name="surname">
                        @error('surname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="login" class="form-label text-danger fs-5">Логин</label>
                        <input type="text" class="form-control @error('login') is-invalid @enderror" id="login" name="login">
                        @error('login')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="number" class="form-label text-danger fs-5">Номер телефона +7 *** (***)-**-**</label>
                        <input type="text" class="form-control @error('number') is-invalid @enderror" id="number" name="number">
                        @error('number')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label text-danger fs-5">Пароль</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div class="mb-3 form-check">
                        <input type="checkbox" class="text-danger fs-5 form-check-input @error('rules') is-invalid @enderror" id="rules">
                        <label class="form-check-label text-danger fs-5" for="rules">Согласен с правилами регистрации</label>
                        @error('rules')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-lg btn-light">Зарегистрироваться</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
