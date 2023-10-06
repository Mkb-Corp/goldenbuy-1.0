@extends('layouts.master')

@section('content')
    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p" id="collection">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Nos derniers produits</h2>
                        <h2 class="ec-title">Nos derniers produits</h2>
                        <p class="sub-title">Decouvrez nos produits récents</p>
                    </div>
                </div>

                <!-- Tab End -->
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        @foreach ($products as $p)
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content"
                                data-animation="fadeIn">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="#" class="image">
                                                <img class="main-image" src="{{ asset('storage/' . $p->main_picture) }}"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{ asset('storage/' . $p->main_picture) }}"
                                                    alt="Product" />
                                            </a>
                                            <a href="#" class="quickview" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                            <div class="ec-pro-actions">
                                                <form action="{{ route('basket.add') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="product_slug" value="{{ $p->slug }}">
                                                    <input type="hidden" name="qty" value="1">
                                                    <button type="submit" title="Add To Cart" class="add-to-cart"><i
                                                            class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                </form>
                                                @if ($p->isWishlisted())
                                                    <a href="{{ route('wishlist.add', [$p->slug]) }}"
                                                        class="ec-btn-group wishlist active" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                @else
                                                    <a href="{{ route('wishlist.add', [$p->slug]) }}"
                                                        class="ec-btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a
                                                href="{{ route('product_details', [$p->slug]) }}">{{ $p->name }}</a>
                                        </h5>
                                        <span class="ec-price">
                                            <span class="new-price">${{ $p->price }} </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-sm-12 shop-all-btn"><a href="{{ route('products.all') }}">Tous les articles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->

    <!--  offer Section Start -->
    <section class="section ec-offer-section section-space-p section-space-m">
        <h2 class="d-none">Offer</h2>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center ec-offer-content">
                    <h2 class="ec-offer-title">Sunglasses</h2>
                    <h3 class="ec-offer-stitle" data-animation="slideInDown">Super Offer</h3>
                    <span class="ec-offer-img" data-animation="zoomIn"><img src="assets/images/offer-image/1.png"
                            alt="offer image" /></span>
                    <span class="ec-offer-desc">Acetate Frame Sunglasses</span>
                    <span class="ec-offer-price">$40.00 Only</span>
                    <a class="btn btn-primary" href="shop-left-sidebar-col-3.html" data-animation="zoomIn">Shop
                        Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Section End -->
@endsection
