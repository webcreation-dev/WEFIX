{{-- <header class="ec-header">
    <div class="ec-header-bottom d-none d-lg-block">
        <div class="container position-relative">
            <div class="row">
                <div class="ec-flex">

                    <div class="align-self-center">
                        <div class="header-logo">
                            <a href="index.html">
                                <img src="{{asset('assets/images/logo/logo.png')}}" alt="Site Logo" /><img
                                    class="dark-logo" src="{{asset('assets/images/logo/dark-logo.png')}}" alt="Site Logo"
                                    style="display: none;" /></a>
                        </div>
                    </div>


                    <div class="align-self-center">
                        <div class="ec-main-menu">
                            <ul>
                                <li><a href="/">ACCUEIL</a></li>
                                <li class="dropdown"><span class="main-label-note-new" data-toggle="tooltip"
                                        title="NEW"></span><a href="{{ route('typedevices.index') }}">REPARER</a>
                                    <ul class="sub-menu">
                                        @foreach ($typedevices as $typedevice)
                                        <li class="dropdown position-static"><a href="{{ route('typedevices.show', $typedevice) }}">{{$typedevice->name}}
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                @foreach ($typedevice->brandDevices()->get() as $brand)
                                                    <li>
                                                        <a href="{{ route('brands.create', ['typedevice' => $typedevice , 'brand' => $brand ]) }}">{{$brand->name}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li><a href="{{route('stepsellings.index')}}">REVENDRE</a></li>
                                <li><a href="{{route('stepsellings.index')}}">REVENDRE</a></li>
                                <li><a href="{{route('products.index')}}">NOS BOUTIQUES</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="align-self-center">
                        <div class="ec-header-bottons">

                            <a href="wishlist.html" class="ec-header-btn ec-header-wishlist">
                                <div class="header-icon"><img src="{{asset('assets/images/icons/wishlist.svg')}}"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count">4</span>
                            </a>

                            <a href="#ec-side-cart" id="overlay-cart" class="ec-header-btn ec-side-toggle">
                                <div class="header-icon"><img src="{{asset('assets/images/icons/cart.svg')}}"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count cart-count-lable">3</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ec-header-bottom d-lg-none">
        <div class="container position-relative">
            <div class="row ">

                <div class="col">
                    <div class="header-logo">
                        <a href="index.html"><img src="{{asset('assets/images/logo/logo.png')}}" alt="Site Logo" /><img
                                class="dark-logo" src="{{asset('assets/images/logo/dark-logo.png')}}" alt="Site Logo"
                                style="display: none;" /></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
        <div class="ec-menu-title">
            <span class="menu_title">Menu</span>
            <button class="ec-close">×</button>
        </div>
        <div class="ec-menu-inner">
            <div class="ec-menu-content">
                <ul>
                    <li><a href="index.html">REVENDRE</a></li>
                    <li><a href="index.html">REPARER</a></li>
                    <li><a href="index.html">NOS BOUTIQUES</a></li>
                </ul>
            </div>
        </div>
    </div>
</header> --}}

@livewire('header-mobile-ecommerce-controller')
@livewire('side-cart-controller')

