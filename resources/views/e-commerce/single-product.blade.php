<!DOCTYPE html>
 <html lang="en">
@include('components.e-commerce.head')

<body class="product_page">
    {{-- <div id="ec-overlay"><span class="loader_img"></span></div> --}}

    @include('components.e-commerce.header')



    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">PRODUIT UNIQUE</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">ACCUEIL</a></li>
                                <li class="ec-breadcrumb-item active">PRODUIT UNIQUE</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Sart Single product -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-pro-rightside ec-common-rightside col-lg-12 col-md-12">

                    <!-- Single product content Start -->
                    <div class="single-pro-block">
                        <div class="single-pro-inner">
                            <div class="row">
                                <div class="single-pro-img single-pro-img-no-sidebar">
                                    <div class="single-product-scroll">
                                        <div class="single-product-cover">
                                            @foreach ($product->productImages()->get() as $image )
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive" src={{asset('e-commerce/'. $image->image )}}
                                                        alt="">
                                                </div>
                                            @endforeach

                                        </div>
                                        <div class="single-nav-thumb">
                                            @foreach ($product->productImages()->get() as $image )
                                                <div class="single-slide">
                                                    <img class="img-responsive" src={{asset('e-commerce/'. $image->image )}}
                                                        alt="">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @livewire('single-product-controller', ['product' => $product])


                    <!--Single product content End -->


                    <!-- Single product tab start -->
                    <div class="ec-single-pro-tab">
                        <div class="ec-single-pro-tab-wrapper">
                            <div class="ec-single-pro-tab-nav">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#ec-spt-nav-details" role="tablist">Détail</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-info"
                                            role="tablist">Plus d'information</a>
                                    </li> --}}
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-review"
                                            role="tablist">Avis</a>
                                    </li> --}}
                                </ul>
                            </div>
                            <div class="tab-content  ec-single-pro-tab-content">
                                <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                    <div class="ec-single-pro-tab-desc">
                                        <p>
                                            {{$product->description}}
                                        </p>
                                        {{-- <ul>
                                            <li>Any Product types that You want - Simple, Configurable</li>
                                            <li>Downloadable/Digital Products, Virtual Products</li>
                                            <li>Inventory Management with Backordered items</li>
                                            <li>Flatlock seams throughout.</li>
                                        </ul> --}}
                                    </div>
                                </div>
                                {{-- <div id="ec-spt-nav-info" class="tab-pane fade">
                                    <div class="ec-single-pro-tab-moreinfo">
                                        <ul>
                                            <li><span>Weight</span> 1000 g</li>
                                            <li><span>Dimensions</span> 35 × 30 × 7 cm</li>
                                            <li><span>Color</span> Black, Pink, Red, White</li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section ec-releted-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-title">Produits associés</h2>
                        <p class="sub-title">Parcourir la collection des meilleurs produits</p>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-b-30">
                <!-- Related Product Content -->
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
                                        src={{asset('e-commerce/'. $product->productImages()->first()->image )}} alt="Product" />
                                    </a>
                                    {{-- <span class="percentage">20%</span> --}}
                                    {{-- @if ( $loop->iteration % 2 == 0)
                                        <span class="flags">
                                            <span class="sale">Solde</span>
                                        </span>
                                    @else
                                        <span class="flags">
                                            <span class="new">Nouveau</span>
                                        </span>

                                    @endif --}}

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
                                    <span class="new-price">{{$product->price}} €</span>
                                    {{-- <span class="new-price">{{$product->reduction_price}} €</span> --}}
                                </span>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Related Product end -->

    @include('components.e-commerce.footer')

    @include('components.e-commerce.footer-scripts')
</body>
</html>


