<div class="ec-left-sidebar ec-bg-sidebar">
    <div id="sidebar" class="sidebar ec-sidebar-footer">

        <div class="ec-brand">
                <img class="ec-brand-icon"  width="220" height="100" src="{{asset('images/logo.png')}}" alt="" />
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="ec-navigation" data-simplebar>
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <!-- Dashboard -->
                <li>
                    <a class="sidenav-item-link" href="{{route('products.index')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">BOUTIQUE</span>
                    </a>
                    <hr>
                </li>

                <!-- Orders -->
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="{{route('admins.index')}}">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">COMMANDES</span>
                    </a>
                    {{-- <div class="collapse show">
                        <ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="new-order.html">
                                    <span class="nav-text">New Order</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="order-history.html">
                                    <span class="nav-text">Order History</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="order-detail.html">
                                    <span class="nav-text">Order Detail</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidenav-item-link" href="invoice.html">
                                    <span class="nav-text">Invoice</span>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </li>

            </ul>
        </div>
    </div>
</div>
