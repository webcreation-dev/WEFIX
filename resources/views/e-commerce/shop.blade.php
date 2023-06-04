<!DOCTYPE html>
 <html lang="en">
 @include('components.e-commerce.head')
<body class="shop_page">
    {{-- <div id="ec-overlay"><span class="loader_img"></span></div> --}}

    @include('components.e-commerce.header')

    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Shop</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-shop-rightside col-lg-9 order-lg-last col-md-12 order-md-first margin-b-30">
                    <!-- Shop Top Start -->
                    <div class="ec-pro-list-top d-flex">
                        <div class="col-md-6 ec-grid-list">
                            <div class="ec-gl-btn">
                                <button class="btn btn-grid active"><img src="assets/images/icons/grid.svg"
                                        class="svg_img gl_svg" alt="" /></button>
                            </div>
                        </div>
                        <div class="col-md-6 ec-sort-select">
                            <span class="sort-by">Sort by</span>
                            <div class="ec-select-inner">
                                <select name="ec-select" id="ec-select">
                                    <option selected disabled>Position</option>
                                    <option value="1">Relevance</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3">Name, Z to A</option>
                                    <option value="4">Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="shop-pro-content">
                        <div class="shop-pro-inner">
                            <div class="row">


                                @foreach ($products as $product)
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                        <div class="ec-product-inner">
                                            <div class="">
                                                <div class="ec-pro-image">
                                                    <a href="{{route('products.show', ['product' => $product] )}}" class="image">
                                                        <img class="main-image"
                                                        src={{asset('e-commerce/'. $product->productImages()->first()->image )}}
                                                        alt="Product" />
                                                        <img class="hover-image"
                                                            src={{asset('e-commerce/'. $product->productImages()->skip(2)->first()->image )}} alt="Product" />
                                                    </a>
                                                    <span class="percentage">20%</span>
                                                    @if ( $loop->iteration % 2 == 0)
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                    @else
                                                        <span class="flags">
                                                            <span class="new">New</span>
                                                        </span>

                                                    @endif
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="assets/images/icons/cart.svg" class="svg_img pro_svg"
                                                                alt="" /> Add To Cart</button>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="assets/images/icons/wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="{{route('products.show', ['product' => $product->id] )}}">{{$product->name}}</a></h5>
                                                <div class="ec-pro-rating">
                                                    @for ($i = 0; $i < $product->star; $i++)
                                                        <i class="ecicon eci-star fill"></i>
                                                    @endfor
                                                </div>
                                                <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                                                <span class="ec-price">
                                                    <span class="old-price">{{$product->price}} €</span>
                                                    <span class="new-price">{{$product->reduction_price}} €</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <!-- Ec Pagination Start -->
                        {{-- <div class="ec-pro-pagination">
                            <span>Showing 1-12 of 21 item(s)</span>
                            <ul class="ec-pro-pagination-inner">
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a></li>
                            </ul>
                        </div> --}}
                        <!-- Ec Pagination End -->
                    </div>
                </div>
                <div class="ec-shop-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
                    <div id="shop_sidebar">
                        <div class="ec-sidebar-heading">
                            <h1>Filter Products By</h1>
                        </div>
                        <div class="ec-sidebar-wrap">


                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Category</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        @foreach ($categories->take(3)->get() as $category)
                                            <li>
                                                <div class="ec-sidebar-block-item">
                                                    <input type="checkbox"/> <a href="#">{{ $category->name }}</a><span
                                                        class="checked"></span>
                                                </div>
                                            </li>
                                        @endforeach


                                        <li id="ec-more-toggle-content" style="padding: 0; display: none;">
                                            <ul>
                                                @foreach ($categories->skip(3)->take(PHP_INT_MAX)->get(); as $category)
                                                    <li>
                                                        <div class="ec-sidebar-block-item">
                                                            <input type="checkbox"/> <a href="#">{{ $category->name }}</a><span
                                                                class="checked"></span>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-block-item ec-more-toggle">
                                                <span class="checked"></span><span id="ec-more-toggle">More
                                                    Categories</span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>


                            @foreach ($attributes as $attribute)
                                <div class="ec-sidebar-block ">
                                    <div class="ec-sb-title">
                                        <h3 class="ec-sidebar-title">{{$attribute->name}}</h3>
                                    </div>
                                    @if ($attribute->name != 'Couleur')
                                        <div class="ec-sb-block-content ec-sidebar-block-clr">
                                            <ul>
                                                @foreach ( $attribute->attributesName()->get() as $attributeName)
                                                    <li>
                                                        <div class="ec-sidebar-block-item">
                                                            <input type="checkbox" value="{{$attributeName->id}}" /><a href="#">{{$attributeName->name}}</a><span
                                                                class="checked"></span>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @else
                                        <div class="ec-sidebar-block ec-sidebar-block-clr">
                                            <div class="ec-sb-block-content ec-sidebar-dropdown">
                                                <ul>
                                                    @foreach ( $attribute->attributesName()->get() as $attributeName)
                                                        <li>
                                                            <div class="ec-sidebar-block-item"><span style="background-color:{{$attributeName->name}};"></span></div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Price</h3>
                                </div>
                                <div class="ec-sb-block-content es-price-slider">
                                    <div class="ec-price-filter">
                                        <div id="ec-sliderPrice" class="filter__slider-price" data-min="0"
                                            data-max="250" data-step="10"></div>
                                        <div class="ec-price-input">
                                            <label class="filter__label"><input type="text"
                                                    class="filter__input"></label>
                                            <span class="ec-price-divider"></span>
                                            <label class="filter__label"><input type="text"
                                                    class="filter__input"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('components.e-commerce.footer')
    @include('components.e-commerce.footer-scripts')

</body>
</html>
