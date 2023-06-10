<div class="row">
    <div class="ec-shop-rightside col-lg-9 order-lg-last col-md-12 order-md-first margin-b-30">
        <!-- Shop Top Start -->
        <div class="ec-pro-list-top d-flex">
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
                                        <img class="main-image" src={{asset('e-commerce/'.
                                            $product->productImages()->first()->image )}}
                                        alt="Product" />
                                        <img class="hover-image" src={{asset('e-commerce/'.
                                            $product->productImages()->skip(2)->first()->image )}} alt="Product" />
                                    </a>
                                    <span class="percentage">{{$product->percentage_reduction}}%</span>
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

                                        <button  title="Add To Cart" class="ec-btn-group wishlist"><img
                                            src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></button>
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
                                    <span class="old-price">{{$product->price}} €</span>
                                    <span class="new-price">{{$product->reduction_price}} €</span>
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
                        <button wire:click="toggleCategory(1)" >TEST</button>
                    </div>
                    <div class="ec-sb-block-content">
                        <ul>
                            @foreach ($categories->take(4)->get() as $category)
                            <li>
                                <div class="ec-sidebar-block-item">
                                    {{-- <input type="checkbox" />  --}}
                                    <input type="checkbox" wire:model="checkedCategories.{{ $category->id }}" value="{{ $category->id }}">
                                    <a href="#">{{ $category->name }}</a><span
                                        class="checked"></span>
                                </div>
                            </li>
                            @endforeach


                            <li id="ec-more-toggle-content" style="padding: 0; display: none;">
                                <ul>
                                    @foreach ($categories->skip(3)->take(PHP_INT_MAX)->get(); as $category)
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox"  /> <a href="#">{{ $category->name }}</a><span
                                                class="checked"></span>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <div class="ec-sidebar-block-item ec-more-toggle">
                                    <span class="checked"></span><span id="ec-more-toggle">Plus de categories</span>
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
                                    <input type="checkbox" wire:model="checkedAttributes.{{ $attributeName->id }}" value="{{$attributeName->id}}"
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
                                <li>
                                    <div class="ec-sidebar-block-item"><span
                                            style="background-color:{{$attributeName->name}};"></span></div>
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
                        <h3 class="ec-sidebar-title">Prix</h3>
                    </div>
                    <div class="ec-sb-block-content es-price-slider">
                        <div class="ec-price-filter">
                            <div id="ec-sliderPrice" class="filter__slider-price" data-min="0" data-max="250"
                                data-step="10"></div>
                            <div class="ec-price-input">
                                <label class="filter__label"><input type="text" class="filter__input"></label>
                                <span class="ec-price-divider"></span>
                                <label class="filter__label"><input type="text" class="filter__input"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
