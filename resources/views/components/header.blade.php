<div class="bg-black">
    <div class="container">
        <nav class="navbar navbar-expand-xxl" data-bs-theme="dark">
            <div class="container-fluid" data-bs-theme="dark">
             <a class="navbar-brand text-white fs-4 d-flex gap-1" href="{{route('about')}}" style="">
                    <img src="{{asset('/public/storage/sushi_1.png')}}" alt="Logo" width="auto" height="62"
                         class="d-inline-block pt-1">
                    <p class="pt-3">GONG</p>
                </a>
                <div class="collapse navbar-collapse " id="navbarTogglerDemo03" style="margin-left: 350px;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3 fs-5 mb-1.5">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="{{route('about')}}#menu">Меню</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('about') }}#booking">Бронь</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('about') }}#contacts">Контакты</a>
                        </li>
                    </ul>
                    <div class="d-flex gap-3">
                        @auth()
                            @if(\Illuminate\Support\Facades\Auth::user()-> isAdmin)
                                <a href="{{route('admin')}}" class="btn btn-outline-light">Панель админа</a>
                            @else
                                <a href="#" class="fs-5 text-white nav-link pt-sm-1">Здравствуйте ,{{\Illuminate\Support\Facades\Auth::user()->surname}}</a>
{{--                                <a href="{{ route('basket') }}" class="btn btn-primary">Корзина</a>--}}
{{--                                <a href="{{ route('orders') }}" class="btn btn-primary">Заказы</a>--}}
                            @endif
                        <div class="d-flex gap-3">
                            <a href="{{route('logout')}}" class="fw-bolder btn btn-outline-light btn-danger border-0">Выход</a>
                        </div>

                        @endauth
                        @guest()
                            <a href="{{route('auth')}}" type="button" class="btn btn-light fw-bolder border-0 btn-outline-dark">Вход</a>
                            <a href="{{route('register')}}" type="button" class="btn btn-light fw-bolder btn-outline-danger border-0">Регистрация</a>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
</div>

