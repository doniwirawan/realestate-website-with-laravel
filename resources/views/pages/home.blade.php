@extends('layouts.app')
@section('title')
Home
@endsection
@section('content')
<!--/ Carousel Star /-->
<div class="intro intro-carousel">

    <div id="carousel" class="owl-carousel owl-theme">

        @foreach ($realestate as $item)
        <div class="carousel-item-a intro-item bg-image" style="background-image: url('storage/img/{{$item->img}}')">

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
                                        <a href="#"><span class="price-a">{{$item->status}} | IDR
                                                @money($item->price_usd)</span></a>
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
                           We have a wide range option of villas and land. We do selection, verification, valuation, neighborhood checking, and maintaining relationship with notary, lawyer, and other related network to assured you a great and safe property investment.
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
                           Knowing and understanding the customer's needs, tastes, and plans for the future are the keys to match our customers with the perfect property. We assist and help you in the entire process right from the start until the property is in your hand.
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
                            Using our technology tools we can generate new requests every day, therefore we can match your property with the right buyer. Sell your property with us to get your property sold out at a great price with a simple, fast and stress-less process.
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
                        <a href="/realestate">All Property
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
                        <img src="/storage/img/{{$item->img}}" alt="{{$item->name}}" class="img-a img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-overlay-a-content">
                            <div class="card-header-a">
                                <h2 class="card-title-a">
                                    <a href="/realestate/{{$item->slug}}">{{$item->name}}</a>
                                </h2>
                            </div>
                            <div class="card-body-a">
                                <div class="price-box d-flex">
                                    <span class="price-a">{{$item->status}} | IDR @money($item->price_usd)</span>
                                </div>
                                <a href="/realestate/{{$item->slug}}" class="link-a">Click here to view
                                    <span class="ion-ios-arrow-forward"></span>
                                </a>
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
                                        @if ($item->beds)
                                        <h4 class="card-info-title">Beds</h4>
                                        <span>{{$item->beds}}</span>
                                        @endif

                                    </li>
                                    <li>
                                        @if ($item->baths)
                                        <h4 class="card-info-title">Baths</h4>
                                        <span>{{$item->baths}}</span>
                                        @endif

                                    </li>
                                    {{-- <li>
                                        <h4 class="card-info-title">Garages</h4>
                                        <span>1</span>
                                    </li> --}}

                                    <a href="https://wa.me/6282146333864?text=I'm%20interested%20to%20buy%20{{$item->name}}"
                                        target="_blank" rel="noopener noreferrer" class="btn bg-white text-success"><i
                                            class="fa fa-whatsapp mr-2"></i>Buy</a>
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


{{-- cta --}}
<section class="call-to-action p-5 mt-5 bg-maps">
    <div class="container p-4">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <h2 class="title-a text-center">Maps</h2>
                <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores natus eum tempora illum nostrum exercitationem rerum vero doloremque possimus dignissimos.</p>
            </div>
            <div class="col-12 d-flex justify-content-center" id="map">
                {{-- <a href="/realestate" class="btn btn-outline-success w-10 d-flex align-items-center justify-content-center mx-1">Card View</a> --}}
                <a href="/maps" class="btn btn-success  d-flex align-items-center justify-content-center mx-1 p-2 h5">Check Our Maps</a>
            </div>
        </div>
    </div>
</section>

@endsection
