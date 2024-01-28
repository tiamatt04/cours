@extends('welcome')
@section('title', 'О нас')
@section('content')
    <div class="hero_cont d-flex justify-content-between container">
        <div class="hero__right mt-5">
            <h2 class="text-white fs-2 mt-5">МЫ ВСЕГДА</h2>
            <h1 class="text-danger fs-1 mt-1">ТЕБЕ РАДЫ</h1>
            <p class="text-white fs-4 w-90">Главный акцент – свежая рыба и морепродукты, которые поставляются в ресторан
                прямиком из Японии</p>
        </div>
        <div class="div">
            <img src="{{asset('/public/storage/hero_logo.png')}}" alt="sushi">
        </div>
    </div>
    <div class="delivery__cards container">
        <h1 class="text-danger fs-1 mt-1  text-center mb-4">Условия доставки</h1>
        <div class="d-flex justify-content-between  mb-3">
            <div class="card mb-3" style="max-width: 300px;max-height: 100px">
                <div class="row g-1">
                    <div class="col-md-4">
                        <img src="{{asset('/public/storage/wall-clock.png')}}" class="img-fluid p-3 w-70" alt="время">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">ДОСТАВКА ДО 45 МИНУТ</h5>
                            <p class="card-text">Время доставки.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 300px;max-height: 100px">
                <div class="row g-1">
                    <div class="col-md-4">
                        <img src="{{asset('/public/storage/wallet_info.png')}}" class="img-fluid p-3 w-70"
                             alt="кошелек">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">ОТ 0 ₽ К ОПЛАТЕ.</h5>
                            <p class="card-text">Мин. сумма.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 300px;max-height: 100px">
                <div class="row g-1">
                    <div class="col-md-4">
                        <img src="{{asset('/public/storage/car_info.png')}}" class="img-fluid p-3 w-70" alt="доставка">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">ДОСТАВКА ОТ 100 ₽</h5>
                            <p class="card-text">Стоим. доставки.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 300px;max-height: 100px">
                <div class="row g-1">
                    <div class="col-md-4">
                        <img src="{{asset('/public/storage/medal_info.png')}}" class="img-fluid p-3 w-60" alt="медаль">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">ЗАКАЗ ОТ 650 ₽</h5>
                            <p class="card-text">Доставка FREE.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="card mb-3" style="max-width: 300px;max-height: 100px">
                <div class="row g-1">
                    <div class="col-md-4">
                        <img src="{{asset('/public/storage/pizza_info.png')}}" class="img-fluid p-3 w-70" alt="время">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">ПИЦЦА ЗА НАШ СЧЕТ</h5>
                            <p class="card-text">От 2000 ₽.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 300px;max-height: 100px">
                <div class="row g-1">
                    <div class="col-md-4">
                        <img src="{{asset('/public/storage/24-7.png')}}" class="img-fluid p-3 w-70" alt="grafic">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">РАБОТАЕМ 24/7 для вас</h5>
                            <p class="card-text">График работы.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 300px;max-height: 100px">
                <div class="row g-1">
                    <div class="col-md-4">
                        <img src="{{asset('/public/storage/sale.png')}}" class="img-fluid p-3 w-70" alt="sale">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">CКИДКА НА ЗАКАЗ 10%</h5>
                            <p class="card-text">При самовывозе.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 300px;max-height: 100px">
                <div class="row g-1">
                    <div class="col-md-4">
                        <img src="{{asset('/public/storage/error.png')}}" class="img-fluid p-3 w-60" alt="error">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">ПЛАТИМ САМИ</h5>
                            <p class="card-text">Если накосячили.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
        <div class="container mt-5" id="menu">
            <h1 class="text-danger fs-1 mt-1  text-center mb-4">Меню</h1>
            <div class="col-12 d-flex flex-wrap justify-content-between mt-3 gap-4">
                @foreach($products as $product)
                    <div class="card" style="width: 18rem;background: #131313;
    border-radius: 15px;box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);">
                        <a href="{{route('catalog_product', $product)}}">
                            <img src="{{ asset('storage/app/public/'. $product->product_photo) }}" height="250px"
                                 style="object-fit: cover; object-position: center" class="card-img-top"
                                 alt="Фото товара">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title fs-5 fw-bold text-center text-white">{{$product->product_name}}</h5>
                            <p class="card-text fs- text-center text-white">{{$product->product_description}}</p>
                            <div class="lower-card d-flex justify-content-between">
                                <div class="card-price">
                                    <p class="card-text fw-bold text-danger fs-5">{{$product->product_price}} ₽</p>
                                </div>
                            </div>
                            {{--                            @auth()--}}
                            {{--                                <form action="{{ route('basket.add', $product) }}" method="post" class="text-center mt-3">--}}
                            {{--                                    @csrf--}}
                            {{--                                    <button type="submit" class="btn btn-outline-info">В корзину</button>--}}
                            {{--                                </form>--}}
                            {{--                            @endauth--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mb-5" id="booking">
        <div class="container">
            <div class="mt-5 mb-4">
                <form method="get" class="p-3 rounded-2">
                    @csrf
                    <h1 class="text-white fs-1 mt-1  text-center mb-3">Бронирование стола</h1>
                    <div class="mb-3">
                        <label for="people_count" class="form-label fs-5 text-white">Количество человек</label>
                        <input type="number" class="form-control @error('people_count') is-invalid @enderror"
                               id="people_count" name="people_count">
                        @error('people_count')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="date" class="form-label fs-5 text-white">Дата</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror""
                               name="date">
                        @error('surname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-danger fs-5">Забронировать</button>
                </form>
            </div>
        </div>
        <div class="mt-5" id="contacts">
            <img src="{{asset('/public/storage/img_1.png')}}" alt="maps" class="h-6 w-100">
        </div>

@endsection
