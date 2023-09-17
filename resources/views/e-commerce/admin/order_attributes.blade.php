@extends('layouts.admin')

@section('content')
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
                <h1>Attributs Commande</h1>
                <p class="breadcrumbs"><span><a href="/">Accueil</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Attributs
                </p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="ec-odr-dtl card card-default">
                        <div class="card-header card-header-border-bottom d-flex justify-content-between">
                            <h2 class="ec-odr">Point<br>
                                @php
                                    $product = App\Models\Ecommerce\MergeOrderItemAttribute::getProduct($order_first->order_item_id);
                                    $order = App\Models\Ecommerce\MergeOrderItemAttribute::getOrder($order_first->order_item_id);
                                @endphp

                                <span class="small">ID Commande: #{{ substr($order->payment_id, 0, 5) }}</span>
                            </h2>
                        </div>
                        <div class="card-body">
                            {{-- <div class="row">
                                <div class="col-xl-3 col-lg-6">
                                    <address class="info-grid">
                                        <div class="info-title"><strong>Customer:</strong></div><br>
                                        <div class="info-content">
                                            Twitter, Inc.<br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </div>
                                    </address>
                                </div>
                                <div class="col-xl-3 col-lg-6">
                                    <address class="info-grid">
                                        <div class="info-title"><strong>Shipped To:</strong></div><br>
                                        <div class="info-content">
                                            Elaine Hernandez<br>
                                            P. Sherman 42,<br>
                                            Wallaby Way, Sidney<br>
                                            <abbr title="Phone">P:</abbr> (123) 345-6789
                                        </div>
                                    </address>
                                </div>
                                <div class="col-xl-3 col-lg-6">
                                    <address class="info-grid">
                                        <div class="info-title"><strong>Payment Method:</strong></div><br>
                                        <div class="info-content">
                                            Visa ending **** 1234<br>
                                            h.elaine@gmail.com<br>
                                        </div>
                                    </address>
                                </div>
                                <div class="col-xl-3 col-lg-6">
                                    <address class="info-grid">
                                        <div class="info-title"><strong>Order Date:</strong></div><br>
                                        <div class="info-content">
                                            4:34PM,<br>
                                            Wed, Aug 13, 2020
                                        </div>
                                    </address>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="tbl-title">ATTRIBUTS DE LA COMMANDE</h3>
                                    <div class="table-responsive">
                                        <table class="table table-striped o-tbl">
                                            <thead>
                                                <tr class="line">
                                                    <td><strong>#</strong></td>
                                                    <td class="text-center"><strong>IMAGE</strong></td>
                                                    <td class="text-center"><strong>PRODUCT</strong></td>
                                                    <td class="text-left"><strong>CAPACITE DE STOCKAGE</strong></td>
                                                    <td class="text-left"><strong>COULEUR</strong></td>
                                                    <td class="text-left"><strong>ETAT</strong></td>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>1</td>
                                                    <td class="text-center"><img class="product-img"
                                                            src="{{asset('e-commerce/'.
                                                            $product->productImages()->first()->image )}}" alt="" />

                                                        </td>
                                                    <td class="text-center"><strong>{{$product->name}}</strong></td>

                                                    @foreach ($order_attributes as $item)
                                                        @php
                                                            $attribute = App\Models\Ecommerce\AttributeName::getAttributeName($item->attribute_name_id);
                                                        @endphp
                                                        <td class="text-left">{{$attribute->name}}</td>
                                                    @endforeach

                                                </tr>

                                                {{-- <tr>
                                                    <td>2</td>
                                                    <td><img class="product-img"
                                                            src="{{asset('admin/assets/img/products/p2.jpg')}}" alt="" /></td>
                                                    <td><strong>Tee-Shirt For Men</strong><br>Classie and full
                                                        slive tee-shirt for boy or man.</td>
                                                    <td class="text-center">15</td>
                                                    <td class="text-center">$75</td>
                                                    <td class="text-right">$1,125.00</td>
                                                </tr>
                                                <tr class="line">
                                                    <td>3</td>
                                                    <td><img class="product-img"
                                                            src="{{asset('admin/assets/img/products/p4.jpg')}}" alt="" /></td>
                                                    <td><strong>Round Cap</strong><br>Comfertable round cut cap
                                                        for both.</td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">$75</td>
                                                    <td class="text-right">$150.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4"></td>
                                                    <td class="text-right"><strong>Taxes</strong></td>
                                                    <td class="text-right"><strong>N/A</strong></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">
                                                    </td>
                                                    <td class="text-right"><strong>Total</strong></td>
                                                    <td class="text-right"><strong>$2,400.00</strong></td>
                                                </tr>

                                                <tr>
                                                    <td colspan="4">
                                                    </td>
                                                    <td class="text-right"><strong>Payment Status</strong></td>
                                                    <td class="text-right"><strong>PAID</strong></td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tracking Detail -->
                    {{-- <div class="card mt-4 trk-order">
                        <div class="p-4 text-center text-white text-lg bg-dark rounded-top">
                            <span class="text-uppercase">Tracking Order No - </span>
                            <span class="text-medium">34VB5540K83</span>
                        </div>
                        <div
                            class="d-flex flex-wrap flex-sm-nowrap justify-content-between py-3 px-2 bg-secondary">
                            <div class="w-100 text-center py-1 px-2"><span class="text-medium">Shipped
                                    Via:</span> UPS Ground</div>
                            <div class="w-100 text-center py-1 px-2"><span class="text-medium">Status:</span>
                                Checking Quality</div>
                            <div class="w-100 text-center py-1 px-2"><span class="text-medium">Expected
                                    Date:</span> DEC 09, 2021</div>
                        </div>
                        <div class="card-body">
                            <div
                                class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                                <div class="step completed">
                                    <div class="step-icon-wrap">
                                        <div class="step-icon"><i class="mdi mdi-cart"></i></div>
                                    </div>
                                    <h4 class="step-title">Confirmed Order</h4>
                                </div>
                                <div class="step completed">
                                    <div class="step-icon-wrap">
                                        <div class="step-icon"><i class="mdi mdi-tumblr-reblog"></i></div>
                                    </div>
                                    <h4 class="step-title">Processing Order</h4>
                                </div>
                                <div class="step completed">
                                    <div class="step-icon-wrap">
                                        <div class="step-icon"><i class="mdi mdi-gift"></i></div>
                                    </div>
                                    <h4 class="step-title">Product Dispatched</h4>
                                </div>
                                <div class="step">
                                    <div class="step-icon-wrap">
                                        <div class="step-icon"><i class="mdi mdi-truck-delivery"></i></div>
                                    </div>
                                    <h4 class="step-title">On Delivery</h4>
                                </div>
                                <div class="step">
                                    <div class="step-icon-wrap">
                                        <div class="step-icon"><i class="mdi mdi-hail"></i></div>
                                    </div>
                                    <h4 class="step-title">Product Delivered</h4>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div> <!-- End Content -->
    </div>
@endsection
