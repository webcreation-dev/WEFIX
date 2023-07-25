<!-- Header start  -->
<header class="ec-header">

    <div class="header-top">
        <div class="container">
            <div class="row align-items-center ">

                <div class="col d-lg-none ">
                    <div class="ec-header-bottons">
                        <div class="ec-header-user dropdown">
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="register.html">Register</a></li>
                                <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                <li><a class="dropdown-item" href="login.html">Login</a></li>
                            </ul>
                        </div>

                        <a href="{{route('wishlists.index')}}" class="ec-header-btn ec-header-wishlist">
                            <div class="header-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -28 512.001 512"
                                    src="assets/images/icons/wishlist.svg" class="svg_img header_svg" alt="">
                                    <path
                                        d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0">
                                    </path>
                                </svg></div>
                            <span class="ec-header-count">{{$number_products_wishlist}}</span>
                        </a>

                        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                            <div class="header-icon"><svg xmlns="http://www.w3.org/2000/svg" height="512pt"
                                    viewBox="-35 0 512 512.00102" width="512pt" src="assets/images/icons/cart.svg"
                                    class="svg_img header_svg" alt="">
                                    <path
                                        d="m443.054688 495.171875-38.914063-370.574219c-.816406-7.757812-7.355469-13.648437-15.15625-13.648437h-73.140625v-16.675781c0-51.980469-42.292969-94.273438-94.273438-94.273438-51.984374 0-94.277343 42.292969-94.277343 94.273438v16.675781h-73.140625c-7.800782 0-14.339844 5.890625-15.15625 13.648437l-38.9140628 370.574219c-.4492192 4.292969.9453128 8.578125 3.8320308 11.789063 2.890626 3.207031 7.007813 5.039062 11.324219 5.039062h412.65625c4.320313 0 8.4375-1.832031 11.324219-5.039062 2.894531-3.210938 4.285156-7.496094 3.835938-11.789063zm-285.285157-400.898437c0-35.175782 28.621094-63.796876 63.800781-63.796876 35.175782 0 63.796876 28.621094 63.796876 63.796876v16.675781h-127.597657zm-125.609375 387.25 35.714844-340.097657h59.417969v33.582031c0 8.414063 6.824219 15.238282 15.238281 15.238282s15.238281-6.824219 15.238281-15.238282v-33.582031h127.597657v33.582031c0 8.414063 6.824218 15.238282 15.238281 15.238282 8.414062 0 15.238281-6.824219 15.238281-15.238282v-33.582031h59.417969l35.714843 340.097657zm0 0">
                                    </path>
                                </svg></div>
                            <span class="ec-header-count cart-count-lable">{{$number_products_cart}}</span>
                        </a>

                        <a href="javascript:void(0)" class="ec-header-btn ec-sidebar-toggle">
                            <img src="{{asset('images/favicon.png')}}" alt="" width="40">
                        </a>

                        <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24" width="24px"
                                height="24px" src="assets/images/icons/menu.svg" class="svg_img header_svg" alt="icon">
                                <path
                                    d="M 3 5 A 1.0001 1.0001 0 1 0 3 7 L 21 7 A 1.0001 1.0001 0 1 0 21 5 L 3 5 z M 3 11 A 1.0001 1.0001 0 1 0 3 13 L 21 13 A 1.0001 1.0001 0 1 0 21 11 L 3 11 z M 3 17 A 1.0001 1.0001 0 1 0 3 19 L 21 19 A 1.0001 1.0001 0 1 0 21 17 L 3 17 z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="ec-header-bottom d-none d-lg-block">
        <div class="container position-relative">
            <div class="row">
                <div class="ec-flex">

                    <div class="align-self-center">
                            <a href="/">
                                <img src="{{asset('images/logo.png')}}" alt="" width="200"></a>
                    </div>


                    <div class="align-self-center">
                        <div class="ec-main-menu">
                            <ul>
                                <li><a href="/">ACCUEIL</a></li>
                                <li class="dropdown"><span class="main-label-note-new" data-toggle="tooltip"
                                        title="NEW"></span><a href="{{ route('typedevices.index') }}">REPARER</a>
                                    <ul class="sub-menu">
                                        @foreach ($typedevices as $typedevice)
                                        <li class="dropdown position-static"><a
                                                href="{{ route('typedevices.show', $typedevice) }}">{{$typedevice->name}}
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                @foreach ($typedevice->brandDevices()->get() as $brand)
                                                <li>
                                                    <a
                                                        href="{{ route('brands.create', ['typedevice' => $typedevice , 'brand' => $brand ]) }}">{{$brand->name}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li><a href="{{route('stepsellings.index')}}">REVENDRE</a></li>
                                <li><a href="{{route('products.index')}}">NOS BOUTIQUES</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="align-self-center">
                        <div class="ec-header-bottons">

                            <a href="{{route('wishlists.index')}}" class="ec-header-btn ec-header-wishlist">
                                <div class="header-icon"><img src="{{asset('assets/images/icons/wishlist.svg')}}"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count">{{$number_products_wishlist}}</span>
                            </a>

                            <a href="#ec-side-cart" id="overlay-cart" class="ec-header-btn ec-side-toggle">
                                <div class="header-icon"><img src="{{asset('assets/images/icons/cart.svg')}}"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count cart-count-lable">{{$number_products_cart}}</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="ec-header-bottom d-lg-none">
        <div class="container position-relative">
            <div class="row ">

                <div class="align-self-center">
                    <a href="/">
                        <img src="{{asset('images/logo.png')}}" alt="" width="200"></a>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
        <div class="ec-menu-title">
            <span class="menu_title">Menu</span>
            <button class="ec-close">×</button>
        </div>
        <div class="ec-menu-inner">
            <div class="ec-menu-content">
                <ul>
                    <li><a href="{{route('stepsellings.index')}}">REVENDRE</a></li>
                    <li><a href="{{ route('typedevices.index') }}">REPARER</a></li>
                    <li><a href="{{route('products.index')}}">NOS BOUTIQUES</a></li>
                </ul>
            </div>
        </div>
    </div>

</header>

