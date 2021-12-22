@extends ("layouts.default")
@section('content')
<div class="hero-container">
</div>
<div>
    <div class="bg-comic-prev">
        <div class="container position-relative">
            <div class="comic-prev">
                <img src="{{$fumetto['thumb']}}" alt="">
                <div class="comic-prev-sub-title text-center">
                    <span>
                        VIEW GALLERY
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row py-5 ">
        <div class="col-8 product-info">
            <h2>{{$fumetto['title']}}</h2>
            <div class="row product-detail">
                <div class="col-9 prouct-detail-left d-flex justify-content-between">
                    <span>U.S. Price: {{$fumetto['price']}}</span>
                    <span>AVAILABLE</span>
                </div>
                <div class="col-3 prouct-detail-right">
                    <span>
                        Check Availability
                    </span>
                </div>
            </div>
            <p>{{$fumetto['description']}}</p>
        </div>
        <div class="col-4 sidebar-right">
            <h5>ADVERTISEMENT</h5>
                    <div class="box-adv">
                        <img src="/img/Badv.jpg" alt="">
                    </div>
        </div>
    </div>

    <div class="row row-cols-2">
        <div class="col">
            <h3 class="info-section-title">Talent</h3>
            <hr>
            <div class="row">
                <div class="col-3">
                    <span class="info-talent">Art by: </span>
                </div>
                <div class="col-9">
                    <p class="info-artits">
                    @foreach ($fumetto['artists'] as $item)
                        {{$item}}
                        @endforeach
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-3">
                    <span class="info-talent">Written by: </span>
                </div>
                <div class="col-9">
                    <p class="info-writers">
                    @foreach ($fumetto['writers'] as $item)
                        {{$item}}
                        @endforeach
                    </p>
                </div>
            </div>
            <hr>
            
            
        </div>
        <div class="col">
            <h3 class="info-section-title">Specs</h3>
            <hr>
            <div class="row">
                <div class="col-3">
                    <span class="info-specs">
                        Series:
                    </span>
                </div>
                <div class="col-9">
                    <span class="info-artits series-text">
                        {{$fumetto['series']}}
                    </span>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-3">
                    <span class="info-specs">
                        Series:
                    </span>
                </div>
                <div class="col-9">
                    <span class="info-artits series-text">
                        {{$fumetto['price']}}
                    </span>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-3">
                    <span class="info-specs">
                        Series:
                    </span>
                </div>
                <div class="col-9">
                    <span class="info-artits series-text">
                        {{$fumetto['sale_date']}}
                    </span>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection