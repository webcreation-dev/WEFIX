<!DOCTYPE html>
 <html lang="en">
@include('components.e-commerce.head')

<body class="product_page">

    @include('components.e-commerce.header')
    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">WISHLIST</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">ACCUEIL</a></li>
                                <li class="ec-breadcrumb-item active">WISHLIST</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec Wishlist page -->
    @livewire('wishlist-controller')

    @include('components.e-commerce.footer')

    @include('components.e-commerce.footer-scripts')
</body>
</html>

