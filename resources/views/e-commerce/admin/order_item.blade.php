@extends('layouts.admin')

@section('content')
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
                <h1>Détail de la commande</h1>
                <p class="breadcrumbs"><span><a href="/">Accueil</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Détails
                </p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Prix</th>
                                            {{-- <th>Items</th> --}}
                                            {{-- <th>Price</th> --}}
                                            <th>Quantité</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($order_items as $item)
                                            @php
                                                $product = App\Models\Ecommerce\Product::getProduct($item->product_id);
                                                $order = App\Models\Ecommerce\Order::getOrder($item->order_id);
                                            @endphp

                                            <tr>
                                                <td>{{ substr($order->payment_id, 0, 5) }}</td>
                                                <td class="text-center"><img class="product-img"
                                                    src="{{asset('e-commerce/'.
                                                    $product->productImages()->first()->image )}}" width="100" height="100" alt="" />

                                                </td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->price}} €</td>
                                                <td>{{$item->quantity}}</td>
                                                {{-- <td>$80</td>
                                                <td>PAID</td> --}}
                                                <td><span class="mb-2 mr-2 badge badge-secondary">{{$order->order_status}}</span></td>
                                                <td>{{$item->created_at->formatLocalized('%e %B %Y')}}</td>
                                                <td>
                                                    <div class="btn-group mb-1">
                                                        <button type="button"
                                                            class="btn btn-outline-success">Info</button>
                                                        <button type="button"
                                                            class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" data-display="static">
                                                            <span class="sr-only">Info</span>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{route('admins.show', $item->id)}}">Detail</a>
                                                            {{-- <a class="dropdown-item" href="#">Track</a>
                                                            <a class="dropdown-item" href="#">Cancel</a> --}}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach



                                        {{-- <tr>
                                            <td>1049</td>
                                            <td>Ktn Markue</td>
                                            <td>ktn@example.com</td>
                                            <td>10</td>
                                            <td>$280</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1048</td>
                                            <td>mehul Markue</td>
                                            <td>mehul@example.com</td>
                                            <td>5</td>
                                            <td>$100</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1047</td>
                                            <td>Bhavesh Markue</td>
                                            <td>Bhavesh@example.com</td>
                                            <td>8</td>
                                            <td>$140</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1050</td>
                                            <td>Johny Markue</td>
                                            <td>johny@example.com</td>
                                            <td>3</td>
                                            <td>$80</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1049</td>
                                            <td>Ktn Markue</td>
                                            <td>ktn@example.com</td>
                                            <td>10</td>
                                            <td>$280</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1048</td>
                                            <td>mehul Markue</td>
                                            <td>mehul@example.com</td>
                                            <td>5</td>
                                            <td>$100</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1047</td>
                                            <td>Bhavesh Markue</td>
                                            <td>Bhavesh@example.com</td>
                                            <td>8</td>
                                            <td>$140</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1050</td>
                                            <td>Johny Markue</td>
                                            <td>johny@example.com</td>
                                            <td>3</td>
                                            <td>$80</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1049</td>
                                            <td>Ktn Markue</td>
                                            <td>ktn@example.com</td>
                                            <td>10</td>
                                            <td>$280</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1048</td>
                                            <td>mehul Markue</td>
                                            <td>mehul@example.com</td>
                                            <td>5</td>
                                            <td>$100</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1047</td>
                                            <td>Bhavesh Markue</td>
                                            <td>Bhavesh@example.com</td>
                                            <td>8</td>
                                            <td>$140</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1050</td>
                                            <td>Johny Markue</td>
                                            <td>johny@example.com</td>
                                            <td>3</td>
                                            <td>$80</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1049</td>
                                            <td>Ktn Markue</td>
                                            <td>ktn@example.com</td>
                                            <td>10</td>
                                            <td>$280</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1048</td>
                                            <td>mehul Markue</td>
                                            <td>mehul@example.com</td>
                                            <td>5</td>
                                            <td>$100</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1047</td>
                                            <td>Bhavesh Markue</td>
                                            <td>Bhavesh@example.com</td>
                                            <td>8</td>
                                            <td>$140</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1050</td>
                                            <td>Johny Markue</td>
                                            <td>johny@example.com</td>
                                            <td>3</td>
                                            <td>$80</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1049</td>
                                            <td>Ktn Markue</td>
                                            <td>ktn@example.com</td>
                                            <td>10</td>
                                            <td>$280</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1048</td>
                                            <td>mehul Markue</td>
                                            <td>mehul@example.com</td>
                                            <td>5</td>
                                            <td>$100</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1047</td>
                                            <td>Bhavesh Markue</td>
                                            <td>Bhavesh@example.com</td>
                                            <td>8</td>
                                            <td>$140</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1050</td>
                                            <td>Johny Markue</td>
                                            <td>johny@example.com</td>
                                            <td>3</td>
                                            <td>$80</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1049</td>
                                            <td>Ktn Markue</td>
                                            <td>ktn@example.com</td>
                                            <td>10</td>
                                            <td>$280</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1048</td>
                                            <td>mehul Markue</td>
                                            <td>mehul@example.com</td>
                                            <td>5</td>
                                            <td>$100</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1047</td>
                                            <td>Bhavesh Markue</td>
                                            <td>Bhavesh@example.com</td>
                                            <td>8</td>
                                            <td>$140</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1050</td>
                                            <td>Johny Markue</td>
                                            <td>johny@example.com</td>
                                            <td>3</td>
                                            <td>$80</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1049</td>
                                            <td>Ktn Markue</td>
                                            <td>ktn@example.com</td>
                                            <td>10</td>
                                            <td>$280</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1048</td>
                                            <td>mehul Markue</td>
                                            <td>mehul@example.com</td>
                                            <td>5</td>
                                            <td>$100</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1047</td>
                                            <td>Bhavesh Markue</td>
                                            <td>Bhavesh@example.com</td>
                                            <td>8</td>
                                            <td>$140</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1050</td>
                                            <td>Johny Markue</td>
                                            <td>johny@example.com</td>
                                            <td>3</td>
                                            <td>$80</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1049</td>
                                            <td>Ktn Markue</td>
                                            <td>ktn@example.com</td>
                                            <td>10</td>
                                            <td>$280</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1048</td>
                                            <td>mehul Markue</td>
                                            <td>mehul@example.com</td>
                                            <td>5</td>
                                            <td>$100</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1047</td>
                                            <td>Bhavesh Markue</td>
                                            <td>Bhavesh@example.com</td>
                                            <td>8</td>
                                            <td>$140</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1050</td>
                                            <td>Johny Markue</td>
                                            <td>johny@example.com</td>
                                            <td>3</td>
                                            <td>$80</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-secondary">Cancel</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1049</td>
                                            <td>Ktn Markue</td>
                                            <td>ktn@example.com</td>
                                            <td>10</td>
                                            <td>$280</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-warning">Return</span></td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1048</td>
                                            <td>mehul Markue</td>
                                            <td>mehul@example.com</td>
                                            <td>5</td>
                                            <td>$100</td>
                                            <td>COD</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1047</td>
                                            <td>Bhavesh Markue</td>
                                            <td>Bhavesh@example.com</td>
                                            <td>8</td>
                                            <td>$140</td>
                                            <td>PAID</td>
                                            <td><span class="mb-2 mr-2 badge badge-success">Delivered</span>
                                            </td>
                                            <td>2021-10-30</td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success">Info</button>
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Detail</a>
                                                        <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> --}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div>
@endsection
