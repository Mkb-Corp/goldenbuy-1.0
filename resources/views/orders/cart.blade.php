@extends('layouts.master')

@section('content')
    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Cart</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="ec-breadcrumb-item active">Panier</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec cart page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-cart-leftside col-lg-8 col-md-12 ">
                    <!-- cart content Start -->
                    <div class="ec-cart-content">
                        <div class="ec-cart-inner">
                            <div class="row">
                                <form action="#">
                                    <div class="table-content cart-table-content">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Produit</th>
                                                    <th>Prix</th>
                                                    <th style="text-align: center;">Qte</th>
                                                    <th>Total</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cart_items as $item)
                                                    <tr>
                                                        <td data-label="Product" class="ec-cart-pro-name"><a
                                                                href="product-left-sidebar.html"><img
                                                                    class="ec-cart-pro-img mr-4"
                                                                    src="{{ asset('storage/' . $item->product->main_picture) }}"
                                                                    alt="" />{{ $item->product->name }}</a></td>
                                                        <td data-label="Price" class="ec-cart-pro-price"><span
                                                                class="amount">${{ $item->product->price }}</span></td>
                                                        <td data-label="Quantity" class="ec-cart-pro-qty"
                                                            style="text-align: center;">
                                                            <div class="cart-qty-plus-minus">
                                                                <input class="cart-plus-minus" type="text"
                                                                    name="cartqtybutton" value="{{ $item->qty }}" />
                                                            </div>
                                                        </td>
                                                        <td data-label="Total" class="ec-cart-pro-subtotal">${{ $item->qty * $item->product->price }}</td>
                                                        <td data-label="Remove" class="ec-cart-pro-remove">
                                                            <a href="#"><i class="ecicon eci-trash-o"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="ec-cart-update-bottom">
                                                <a href="{{ route('products.all') }}">Continuer mes achats</a>
                                                <button class="btn btn-primary">Check Out</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--cart content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-cart-rightside col-lg-4 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Summary Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Details de Livraison</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <h4 class="ec-ship-title">Adresse</h4>
                                <div class="ec-cart-form">
                                    <p>Votre Adresse</p>
                                    <form action="#" method="post">
                                        <span class="ec-cart-wrap">
                                            <label>Province *</label>
                                            <span class="ec-cart-select-inner">
                                                <select name="ec_cart_country" id="ec-cart-select-country"
                                                    class="ec-cart-select">
                                                    <option value="1">Kinshasa</option>
                                                    <option value="2">Haut-Katanga</option>
                                                </select>
                                            </span>
                                        </span>
                                        <span class="ec-cart-wrap">
                                            <label>Adresse</label>
                                            <input type="text" name="address" placeholder="Votre Adresse">
                                        </span>
                                        <span class="ec-cart-wrap">
                                            <label>Numero de contact</label>
                                            <input type="tel" name="phone" placeholder="Votre Numero pour la livraison">
                                        </span>
                                    </form>
                                </div>
                            </div>

                            <div class="ec-sb-block-content">
                                <div class="ec-cart-summary-bottom">
                                    <div class="ec-cart-summary">
                                        <div>
                                            <span class="text-left">Sous-Total</span>
                                            <span class="text-right">${{ $basket_amount }}</span>
                                        </div>
                                        <div class="ec-cart-summary-total">
                                            <span class="text-left">Total</span>
                                            <span class="text-right">${{ $basket_amount }}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Summary Block -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
