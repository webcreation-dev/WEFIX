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
                            <h2 class="ec-breadcrumb-title">Cart</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Cart</li>
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
                                <h3 class="ec-sidebar-title">Summary</h3>
                            </div>

                            <div class="ec-sb-block-content">
                                <div class="ec-cart-summary-bottom">
                                    <div class="ec-cart-summary">
                                        <div>
                                            <span class="text-left">Sub-Total</span>
                                            <span class="text-right subtotal">80.00 <span>€</span></span>
                                        </div>
                                        <div>
                                            <span class="text-left">Delivery Charges</span>
                                            <span class="delivery-charges text-right">80.00 <span>€</span></span>
                                        </div>
                                        <div>
                                            <span class="text-left">Coupan Discount</span>
                                            <span class="text-right"><a class="ec-cart-coupan">Apply Coupan</a></span>
                                        </div>
                                        <div class="ec-cart-coupan-content">
                                            <form class="ec-cart-coupan-form" name="ec-cart-coupan-form" method="post"
                                                action="#">
                                                <input class="ec-coupan" type="text" required=""
                                                    placeholder="Enter Your Coupan Code" name="ec-coupan" value="">
                                                <button class="ec-coupan-btn button btn-primary" type="submit"
                                                    name="subscribe" value="">Apply</button>
                                            </form>
                                        </div>
                                        <div class="ec-cart-summary-total">
                                            <span class="text-left">Total Amount</span>
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
                        <h2 class="ec-bg-title">New Arrivals</h2>
                        <h2 class="ec-title">New Arrivals</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- New Product Content -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="product-left-sidebar.html" class="image">
                                    <img class="main-image" src="assets/images/product-image/6_1.jpg" alt="Product" />
                                    <img class="hover-image" src="assets/images/product-image/6_2.jpg" alt="Product" />
                                </a>
                                <span class="percentage">20%</span>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view"
                                    data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                        src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img
                                            src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                    <button title="Add To Cart" class=" add-to-cart"><img
                                            src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To
                                        Cart</button>
                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                            src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Round Neck T-Shirt</a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an
                                unknown printer took a galley.</div>
                            <span class="ec-price">
                                <span class="old-price">$27.00</span>
                                <span class="new-price">$22.00</span>
                            </span>
                            <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/6_1.jpg"
                                                data-src-hover="assets/images/product-image/6_1.jpg"
                                                data-tooltip="Gray"><span style="background-color:#e8c2ff;"></span></a>
                                        </li>
                                        <li><a href="#" class="ec-opt-clr-img"
                                                data-src="assets/images/product-image/6_2.jpg"
                                                data-src-hover="assets/images/product-image/6_2.jpg"
                                                data-tooltip="Orange"><span
                                                    style="background-color:#9cfdd5;"></span></a></li>
                                    </ul>
                                </div>
                                <div class="ec-pro-size">
                                    <span class="ec-pro-opt-label">Size</span>
                                    <ul class="ec-opt-size">
                                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$25.00"
                                                data-new="$20.00" data-tooltip="Small">S</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00"
                                                data-tooltip="Medium">M</a></li>
                                        <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$30.00"
                                                data-tooltip="Extra Large">XL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 shop-all-btn"><a href="#">Shop All Collection</a></div>
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
            totalGlobal = total.toFixed(2) + parseFloat($('.delivery-charges').text());

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
