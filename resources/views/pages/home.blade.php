@extends('layouts.app')
@section('title')
Home
@endsection
@section('content')
<!--/ Carousel Star /-->
<div class="intro intro-carousel">

    <div id="carousel" class="owl-carousel owl-theme">

      @foreach ($realestate as $item)
          <div class="carousel-item-a intro-item bg-image" style="background-image: url({{$item->img}})">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <h1 class="intro-title mb-4">
                                        <span class="color-b">{{$item->name}}</h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="#"><span class="price-a">{{$item->status}} | IDR {{$item->price_usd}}</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      @endforeach
        
        
    </div>
</div>
<!--/ Carousel end /-->

<!--/ Services Star /-->
<section class="section-services section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Our Services</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                            <span class="fa fa-shopping-cart"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                            <h2 class="title-c">Buy</h2>
                        </div>
                    </div>
                    <div class="card-body-c">
                        <p class="content-c">
                            Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien
                            massa,
                            convallis a pellentesque
                            nec, egestas non nisi.
                        </p>
                    </div>
                    {{-- <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div> --}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                            <span class="fa fa-home"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                            <h2 class="title-c">Rent</h2>
                        </div>
                    </div>
                    <div class="card-body-c">
                        <p class="content-c">
                            Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Mauris
                            blandit
                            aliquet elit, eget tincidunt
                            nibh pulvinar a.
                        </p>
                    </div>
                    {{-- <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div> --}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                            <span class="fa fa-usd"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                            <h2 class="title-c">Sell</h2>
                        </div>
                    </div>
                    <div class="card-body-c">
                        <p class="content-c">
                            Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien
                            massa,
                            convallis a pellentesque
                            nec, egestas non nisi.
                        </p>
                    </div>
                    {{-- <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Services End /-->

<!--/ Property Star /-->
<section class="section-property section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Latest Properties</h2>
                    </div>
                    <div class="title-link">
                        <a href="property-grid.html">All Property
                            <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="property-carousel" class="owl-carousel owl-theme">
            @foreach ($realestate as $item)
            <div class="carousel-item-b">
                <div class="card-box-a card-shadow">
                    <div class="img-box-a">
                        <img src="{{$item->img}}" alt="" class="img-a img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-overlay-a-content">
                            <div class="card-header-a">
                                <h2 class="card-title-a">
                                    <a href="property-single.html">{{$item->name}}</a>
                                </h2>
                            </div>
                            <div class="card-body-a">
                                <div class="price-box d-flex">
                                    <span class="price-a">{{$item->status}} | IDR {{$item->price_usd}}</span>
                                </div>
                                {{-- <a href="#" class="link-a">Click here to view
                                    <span class="ion-ios-arrow-forward"></span>
                                </a> --}}
                            </div>
                            <div class="card-footer-a">
                                <ul class="card-info d-flex justify-content-around">
                                    <li>
                                         <h4 class="card-info-title">Area</h4>
                                        <span>{{$item->size}}m
                                            <sup>2</sup>
                                        </span>
                                    </li>
                                    <li>
                                         <h4 class="card-info-title">Beds</h4>
                                        <span>{{$item->beds}}</span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title">Baths</h4>
                                        <span>{{$item->baths}}</span>
                                    </li>
                                    {{-- <li>
                                        <h4 class="card-info-title">Garages</h4>
                                        <span>1</span>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          </div>



</section>
<!--/ Property End /-->

@endsection
