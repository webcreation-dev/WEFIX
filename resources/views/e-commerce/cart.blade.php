<!--=========================================================
    Item Name: Ekka - Ecommerce HTML Template.
    Author: ashishmaraviya
    Version: 3.3
    Copyright 2022-2023
	Author URI: https://themeforest.net/user/ashishmaraviya
 ============================================================-->
<!DOCTYPE html>
<html lang="en">

@include('components.e-commerce.head')

<body class="cart_page">

    @include('components.e-commerce.header')

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">PANIER</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">ACCUEIL</a></li>
                                <li class="ec-breadcrumb-item active">PANIER</li>
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
                    @livewire('cart-controller', ['cartActive' => $cartActive])
                    <!--cart content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-cart-rightside col-lg-4 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Summary Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">RECAPITUALTIF</h3>
                            </div>

                            <div class="ec-sb-block-content">
                                <div class="ec-cart-summary-bottom">
                                    <div class="ec-cart-summary">
                                        <div>
                                            <span class="text-left">Sous-Total</span>
                                            <span class="text-right subtotal">80.00 <span>€</span></span>
                                        </div>
                                        <div>
                                            <span class="text-left">Frais de paiement</span>
                                            <span class="delivery-charges text-right">80.00 <span>€</span></span>
                                        </div>
                                        <div class="ec-cart-summary-total">
                                            <span class="text-left">Total</span>
                                            <span class="text-right total_global">80.00<span>€</span></span>

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
    <!-- New Product Start -->
    <section class="section ec-new-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        {{-- <h2 class="ec-bg-title">New Arrivals</h2> --}}
                        <h2 class="ec-title">Ca vient d'arriver tout frais</h2>
                        <p class="sub-title">Parcourir notre collection de produits</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- New Product Content -->
                @foreach ($upsells as $product)
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image"
                                    src={{asset('e-commerce/'. $product->productImages()->first()->image )}}
                                    alt="Product" />
                                    <img class="hover-image"
                                    src={{asset('e-commerce/'. $product->productImages()->skip(2)->first()->image )}} alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
                                @if ( $loop->iteration % 2 == 0)
                                    <span class="flags">
                                        <span class="sale">Solde</span>
                                    </span>
                                @else
                                    <span class="flags">
                                        <span class="new">Nouveau</span>
                                    </span>

                                @endif

                                <div class="ec-pro-actions">

                                    <button title="Add To Cart" class=" add-to-cart"><img
                                            src="{{asset('assets/images/icons/cart.svg')}}" class="svg_img pro_svg"
                                            alt="" /> AJOUTER AU PANIER</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                            src="{{asset('assets/images/icons/wishlist.svg')}}"
                                            class="svg_img pro_svg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{$product->name}}</a></h5>
                            <div class="ec-pro-rating">
                                @for ($i = 0; $i < $product->star; $i++)
                                    <i class="ecicon eci-star fill"></i>
                                @endfor
                            </div>
                            <span class="ec-price">
                                <span class="old-price">{{$product->price}} €</span>
                                <span class="new-price">{{$product->reduction_price}} €</span>
                            </span>

                        </div>
                    </div>
                </div>
            @endforeach

                <div class="col-sm-12 shop-all-btn"><a href="{{route('products.index')}}">Toute nos collections</a></div>
            </div>
        </div>
    </section>
    @include('components.e-commerce.footer')
    @include('components.e-commerce.footer-scripts')

    <script>
        $(document).ready(function() {
            var sum = 0;
            var total = 0;
            var totalGlobal = 0;
            $('.product-cart').each(function () {
                var quantity = parseFloat($(this).closest('.product-cart').find('.ec-cart-pro-qty .cart-plus-minus').val());
                var price = parseFloat($(this).closest('.product-cart').find('.ec-cart-pro-price .amount').text());

                sum = (quantity * price);
                total = total + sum;
                $(this).closest('.product-cart').find('.ec-cart-pro-subtotal .total').text(sum.toFixed(2));
            });
            totalGlobal = total + parseFloat($('.delivery-charges').text());

            $('.subtotal').text(total.toFixed(2));
            $('.total_global').text(totalGlobal);
        });
    </script>

    <script>

        $('.ec_cart_qtybtn .inc').click(function(e){
            e.preventDefault();
            var sum = 0;
            var total = 0;
            var totalGlobal = 0;
            var currentInputChanged = $(this).closest('.product-cart').find('.ec-cart-pro-qty .cart-plus-minus').val();
            var currentProduct = $(this).closest('.product-cart').find('.ec-cart-pro-qty .product-id').text();
            $('.product-cart').each(function () {
                var quantity = parseFloat($(this).closest('.product-cart').find('.ec-cart-pro-qty .cart-plus-minus').val());
                var price = parseFloat($(this).closest('.product-cart').find('.ec-cart-pro-price .amount').text());

                sum = (quantity * price);
                total = total + sum;
                $(this).closest('.product-cart').find('.ec-cart-pro-subtotal .total').text(sum.toFixed(2));
            });
            totalGlobal = total.toFixed(2) + parseFloat($('.delivery-charges').text());

            $('.subtotal').text(total.toFixed(2));
            $('.total_global').text(totalGlobal);


            var data = {
                product: currentProduct,
                quantity: currentInputChanged
            };
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url:"{{ route('update.quantity.product.cart') }}",
                data:{product:currentProduct, quantity:currentInputChanged},
                    success: function(data){
                        console.log(data.success);
                }
            });

        });

        $('.ec_cart_qtybtn .dec').click(function(e){
            e.preventDefault();
            var sum = 0;
            var total = 0;
            var totalGlobal = 0;
            var currentInputChanged = $(this).closest('.product-cart').find('.ec-cart-pro-qty .cart-plus-minus').val();
            var currentProduct = $(this).closest('.product-cart').find('.ec-cart-pro-qty .product-id').text();
            $('.product-cart').each(function () {
                var quantity = parseFloat($(this).closest('.product-cart').find('.ec-cart-pro-qty .cart-plus-minus').val());
                var price = parseFloat($(this).closest('.product-cart').find('.ec-cart-pro-price .amount').text());

                sum = (quantity * price);
                total = total + sum;
                $(this).closest('.product-cart').find('.ec-cart-pro-subtotal .total').text(sum.toFixed(2));
            });
            totalGlobal = total.toFixed(2) + parseFloat($('.delivery-charges').text());

            $('.subtotal').text(total.toFixed(2));
            $('.total_global').text(totalGlobal);

            var data = {
                product: currentProduct,
                quantity: currentInputChanged
            };
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url:"{{ route('update.quantity.product.cart') }}",
                data:{product:currentProduct, quantity:currentInputChanged},
                    success: function(data){
                        console.log(data.success);
                }
            });
        });

    </script>

</body>

</html>
