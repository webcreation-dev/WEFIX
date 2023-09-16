<div class="row">
    <style>
        .color-active{
            border: 1px solid #444444;
        }
    </style>
    <div class="ec-shop-rightside col-lg-9 order-lg-last col-md-12 order-md-first margin-b-30">
        <!-- Shop Top Start -->
        {{-- <div class="ec-pro-list-top d-flex">
            <div class="col-md-6 ec-grid-list">
                <div class="ec-gl-btn">
                    <button class="btn btn-grid active"><img src="assets/images/icons/grid.svg" class="svg_img gl_svg"
                            alt="" /></button>
                </div>
            </div>
            <div class="col-md-6 ec-sort-select">
                <span class="sort-by">Filtrer par</span>
                <div class="ec-select-inner">
                    <select name="ec-select" id="ec-select">
                        <option selected disabled>Position</option>
                        <option value="1">Relevance</option>
                        <option value="2">Name, A to Z</option>
                    </select>
                </div>
            </div>
        </div> --}}
        <div class="shop-pro-content">
            <div class="shop-pro-inner">
                <div class="row">


                    @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                        <div class="ec-product-inner">
                            <div class="">
                                <div class="ec-pro-image">
                                    <a href="{{route('products.show', ['product' => $product] )}}" class="image">
                                        <img class="main-image" src={{asset('e-commerce/'.
                                            $product->productImages()->first()->image )}}
                                        alt="Product" />
                                        <img class="hover-image" src={{asset('e-commerce/'.
                                            $product->productImages()->first()->image )}} alt="Product" />
                                    </a>
                                    {{-- <span class="percentage">{{$product->percentage_reduction}}%</span>

                                    @if ( $loop->iteration % 2 == 0)
                                    <span class="flags">
                                        <span class="sale">Sale</span>
                                    </span>
                                    @else
                                    <span class="flags">
                                        <span class="new">New</span>
                                    </span>
                                    @endif --}}
                                    <a href="{{route('products.show', ['product' => $product] )}}" class="quickview" data-link-action="quickview"
                                    title="Quick view"
                                    ><img
                                        src="{{asset('assets/images/icons/quickview.svg')}}"
                                        alt="" /></a>
                                    <div class="ec-pro-actions">

                                        <button title="Add To Cart" wire:click="wishlist({{$product->id}})" class="ec-btn-group wishlist @if ($product->checkProductWishlist($product->id)) active @endif">
                                            <img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" />
                                        </button>

                                    </div>
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

                </div>
            </div>
        </div>

    </div>
    <div class="ec-shop-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
        <div id="shop_sidebar">
            <div class="ec-sidebar-heading">
                <h1>Filtrer les produits par</h1>
            </div>
            <div class="ec-sidebar-wrap">


                <div class="ec-sidebar-block">
                    <div class="ec-sb-title">
                        <h3 class="ec-sidebar-title">Categorie</h3>
                    </div>
                    <div class="ec-sb-block-content">
                        <ul style="border-bottom: 1px solid #eeeeee">
                            @foreach ($product_devices->take(4)->get() as $product_device)
                                <li>
                                    <div class="ec-sidebar-block-item">
                                        <input type="checkbox" wire:model.lazy="checkedProductDevices.{{ $product_device->id }}" value="{{ $product_device->id }}">
                                        <a href="#">{{ $product_device->name }}</a><span
                                            class="checked"></span>
                                    </div>
                                </li>
                            @endforeach

                            {{-- <li id="ec-more-toggle-content" style="padding: 0; display: none;">
                                <ul>
                                    @foreach ($categories->get(); as $category)
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox"  /> <a href="#">{{ $category->name }}</a><span
                                                class="checked"></span>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </li> --}}
                            {{-- <li>
                                <div class="ec-sidebar-block-item ec-more-toggle">
                                    <span class="checked"></span><span id="ec-more-toggle">Plus de categories</span>
                                </div>
                            </li> --}}
                        </ul>

                        <br>
                            <ul>
                                @foreach ($categories as $category)
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox"
                                            wire:model.lazy="checkedCategories.{{ $category->id }}" value="{{ $category->id }}"
                                            >
                                            <a href="#">{{ $category->name }}</a><span
                                                class="checked"></span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                    </div>
                </div>

                {{-- @foreach ($attributes as $attribute)
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
                                    <input type="checkbox" wire:model.lazy="checkedAttributes.{{ $attributeName->id }}" value="{{$attributeName->id}}"
                                      /><a
                                        href="#">{{$attributeName->name}}</a><span class="checked"></span>
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
                                <li >
                                    <div class="ec-sidebar-block-item "><span
                                        wire:click="checkedColorAttributes({{ $attributeName->id }})"
                                        class=" @if($attributeName->checkedFilterAttributes($attribute->id, $attributeName->id)) color-active @endif"
                                            style="background-color:{{$attributeName->name}};"></span></div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
                @endforeach --}}
            </div>
        </div>
    </div>
</div>
