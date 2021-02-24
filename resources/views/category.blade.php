@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="/">Магазин</a></li>
            <li class="breadcrumb-item active"aria-current="page">Категорий</li>
            <li class="breadcrumb-item active"> <a href="{{route("brand.list")}}">Бренды</a></li>
        </ol>
    </nav>
        <div class="row justify-content-center">
    <div class="col-lg-12">
    <div class="row">
        @foreach($categories as $pro)
            <div class="col-lg-3">
                <div class="card" style="margin-bottom: 20px; height: auto;">
                    <div class="card-body">
                        <h2 class="card-title">{{ $pro->name }}</h2>
                        <a href="{{route('category.chosed',['id'=>$pro->id])}}">Смотреть</a>


                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
    </div>
    </div>
@endsection
