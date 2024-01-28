@extends('welcome')
@section('title', 'Каталог')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="get" class="d-flex gap-4 mt-5">
                    <select class="form-select" name="sort_price" id="">
                        <option value="asc" {{ request('sort_price') == 'asc' ? 'selected' : '' }}>По возрастанию цены
                        </option>
                        <option value="desc" {{ request('sort_price') == 'desc' ? 'selected' : '' }}>По убыванию цены
                        </option>
                    </select>
                    <select class="form-select" name="sort_name" id="">
                        <option value="asc" {{ request('sort_name') == 'asc' ? 'selected' : '' }}>По названию (А-Я)
                        </option>
                        <option value="desc" {{ request('sort_name') == 'desc' ? 'selected' : '' }}>По названию (Я-А)
                        </option>
                    </select>
                    <select class="form-select" name="category" id="">
                        <option value="">Все категории</option>
                        @foreach($categories as $category)
                            <option
                                value="{{$category->id}}" {{ request('$category') == $category->id ? 'selected' : '' }}>{{$category->category_name}}</option>
                        @endforeach
                    </select>

                    <button class="btn btn-outline-primary">Применить</button>
                </form>
            </div>
        </div>
        <div class="container">
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
@endsection
