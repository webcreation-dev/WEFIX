<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <!-- Compare Content Start -->
            <div class="ec-wish-rightside col-lg-12 col-md-12">
                <!-- Compare content Start -->
                <div class="ec-compare-content">
                    <div class="ec-compare-inner">
                        <div class="row margin-minus-b-30">


                        @if(count($products) == 0)
                            <p class="emp-wishlist-msg">Your wishlist is empty!</p>
                        @else
                            @foreach ($products as $product)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{route('products.show', ['product' => $product] )}}" class="image">
                                                    <img class="main-image"
                                                        src={{asset('e-commerce/'.
                                                        $product->productImages()->first()->image )}} alt="Product" />
                                                    <img class="hover-image"
                                                        src={{asset('e-commerce/'.
                                                        $product->productImages()->skip(2)->first()->image )}} alt="Product" />
                                                </a>
                                                <span class="ec-com-remove ec-remove-wish"><a href="javascript:void(0)"><button wire:click='removeFromWishlist({{$product->id}})'>×</button></a></span>
                                                <span class="percentage">{{$product->percentage_reduction}}%</span>

                                                <a href="{{route('products.show', ['product' => $product] )}}" class="quickview" data-link-action="quickview"
                                                    title="Quick view" ><img
                                                        src="{{asset('assets/images/icons/quickview.svg')}}" class="svg_img pro_svg"
                                                        alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a
                                                    href="{{route('products.show', ['product' => $product->id] )}}">{{$product->name}}</a>
                                            </h5>
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
                        @endempty
                        </div>
                    </div>
                </div>
                <!--compare content End -->
            </div>
            <!-- Compare Content end -->
        </div>
    </div>
</section>
