<!DOCTYPE html>
 <html lang="en">
 @include('components.e-commerce.head')
<body class="shop_page">
    @include('components.e-commerce.header')

    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">NOS BOUTIQUES</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">ACCUEIL</a></li>
                                <li class="ec-breadcrumb-item active">NOS BOUTIQUES</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ec-page-content section-space-p">
        <div class="container">

                    @livewire('shop-controller')
        </div>
    </section>


    @include('components.e-commerce.footer')
    @include('components.e-commerce.footer-scripts')

</body>
</html>
