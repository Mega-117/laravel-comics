@php
$navBarSecondary= [
        [
          "text"=> "Digital comics",
          "href"=> "#",
          "img"=> "/img/buy-comics-digital-comics.png",
        ],
        [
          "text"=> "Dc merchandise",
          "href"=> "#",
          "img"=> "/img/buy-comics-merchandise.png",
        ],
        [
          "text"=> "subscription",
          "href"=> "#",
          "img"=> "/img/buy-comics-subscriptions.png",
        ],
        [
          "text"=> "comic shop location",
          "href"=> "#",
          "img"=> "/img/buy-comics-shop-locator.png",
        ],
        [
          "text"=> "Dc power Visa",
          "href"=> "#",
          "img"=> "/img/buy-dc-power-visa.svg",
        ],
];
   
@endphp

@extends ("layouts.default")
@section("page_title", "Home")
@section('content')
<div class="hero-container">
  </div>
  <div class="bg-content">
    <div class="main-container">
      <button class="btn-series">current series</button>
      
      <div class="product-container">
        @foreach ($listaComicConId as $item)
        <div class="card">
          <div class="img-container">

            <a href="{{route('pages.product-detail', ['id' => $item['id']])}}">
              <img src="{{$item['thumb']}}" alt="" />
            </a>
          </div>
            <div class="title">
              <h6>{{$item['series']}}</h6>
            </div>
        </div>
        @endforeach
          
      </div>
      <div class="product-bottom-nav">
        <button class="btn-load-more">load more</button>
      </div>
    </div>
  </div>

  <div class="bg-navbar2">
    <div class="main-container">
      <ul>
          @foreach ($navBarSecondary as $item)
          <li>
            <img src="{{$item['img']}}" alt="" />
            <a href="#">{{ $item['text'] }}</a>
          </li>
          @endforeach
      </ul>
    </div>
  </div>
@endsection
