@extends('layouts.master')

@section('content')
    <section class="section ec-product-tab section-space-p" id="collection">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Parcourez la catégorie</h2>
                        <h2 class="ec-title">Tous les produits</h2>
                        <p class="sub-title">Parcourez nos articles</p>
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
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="{{ asset('storage/' . $p->main_picture) }}"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{ asset('storage/' . $p->main_picture) }}"
                                                    alt="Product" />
                                            </a>
                                            <a href="#" class="quickview" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#ec_quickview_modal"><i class="fi-rr-eye"></i></a>
                                            <div class="ec-pro-actions">
                                                <button title="Add To Cart" class="add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                        class="fi-rr-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a
                                                href="{{ route('product_details', [$p->id]) }}">{{ $p->name }}</a></h5>
                                        <span class="ec-price">
                                            <span class="new-price">${{ $p->price }}</span>
                                        </span>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
