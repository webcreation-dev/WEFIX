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
            <div class="single-pro-desc single-pro-desc-no-sidebar">
                <div class="single-pro-content">
                    <h5 class="ec-single-title"> {{$product->name}} </h5>
                    <div class="ec-single-rating-wrap">
                        <div class="ec-single-rating">
                            @for ($i = 0; $i < $product->star; $i++)
                                <i class="ecicon eci-star fill"></i>
                            @endfor
                        </div>
                        <span class="ec-read-review"><a href="#ec-spt-nav-review">Be the first to
                                review this product</a></span>
                    </div>

                    <div class="ec-single-price-stoke">
                        <div class="ec-single-price ">
                            <span class="ec-single-ps-title">As low as</span>

                            <span style="text-decoration: line-through;" class="old-price">{{$product->price}} €</span>
                            <span class="new-price">{{$product->reduction_price}} €</span>
                        </div>
                        <div class="ec-single-stoke">
                            <span class="ec-single-ps-title">IN STOCK</span>
                            <span class="ec-single-sku">SKU#: WH12</span>
                        </div>
                    </div>
                    <div class="ec-pro-variation">
                        @foreach ($product->attributes() as $attribute)
                            @if ($attribute->name != 'Couleur')
                                <div class="ec-pro-variation-inner ec-pro-variation-size">
                                    <span>{{$attribute->name}}</span>
                                    <div class=" row">
                                             @foreach ( $attribute->attributesName()->get() as $attributeName)

                                                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
                                                    <button wire:click="addAttributes('{{ $product->id }}', '{{ $attribute->id }}', '{{ $attributeName->id }}')" style="height: 32px; font-size: 13px !important; border-radius: 2px; padding: 0; margin: 0; display: inline-block; line-height: 1;"

                                                        {{-- class="btn btn-block @if ($product->isActive($product->id, $attribute->id, $attributeName->id)) btn-info @else btn-primary @endif " --}}
                                                        >{{ $attributeName->name }}</button>
                                                </div>
                                            @endforeach
                                    </div>
                                </div>
                            @else
                                <div class="ec-pro-variation-inner ec-pro-variation-color">
                                    <span>{{$attribute->name}}</span>
                                    <div class="ec-pro-variation-content">
                                        @foreach ( $attribute->attributesName()->get() as $attributeName)

                                        <li wire:click="addAttributes('{{ $product->id }}', '{{ $attribute->id }}', '{{ $attributeName->id }}')"
                                            {{-- class="@if ($product->isActive($product->id, $attribute->id, $attributeName->id)) active @endif" --}}
                                            >
                                            <span style="background-color: {{ $attributeName->name }};"></span>
                                        </li>




                                        @endforeach

                                    </div>
                                </div>
                            @endif
                        @endforeach


                    </div>

                    <div class="ec-single-qty">
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                        </div>
                        <div class="ec-single-cart ">
                            <button class="btn btn-primary">Add To Cart</button>
                        </div>
                        <div class="ec-single-wishlist">
                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                    src="{{asset('assets/images/icons/wishlist.svg')}}" class="svg_img pro_svg"
                                    alt="" /></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
