@extends('layouts.admin')

@section('content')



<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-wrapper-2">
            <h1>Vos Commandes</h1>
            <p class="breadcrumbs"><span><a href="/">Accueil</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Commande
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
                                        <th>Info</th>
                                        <th>Location</th>
                                        <th>Téléphone</th>
                                        <th>Quantité</th>
                                        <th>Prix</th>
                                        <th>Paiement</th>
                                        <th>Statut</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($orders as $item)
                                        <tr>
                                            <td>{{ substr($item->payment_id, 0, 5) }}</td>
                                            <td><strong>{{$item->last_name}}   {{$item->first_name}}</strong><br>
                                                {{$item->email}}
                                            </td>
                                            <td><strong>{{$item->city}}   {{$item->country}}</strong><br>
                                                {{$item->apartment}}
                                            </td>
                                            <td> {{$item->phone}} </td>
                                            <td>3</td>
                                            <td>{{$item->total_amount}} €</td>
                                            <td>{{$item->payment_status}}</td>
                                            <td><span class="mb-2 mr-2 badge badge-secondary">{{$item->order_status}}</span>
                                            </td>
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
                                                        <a class="dropdown-item" href="{{route('admins.create', ['order_id' => $item->id])}}">Detail</a>
                                                        {{-- <a class="dropdown-item" href="#">Track</a>
                                                        <a class="dropdown-item" href="#">Cancel</a> --}}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    {{-- <tr>
                                        <td>1049</td>
                                        <td><img class="product-img tbl-img" src="{{asset('admin/assets/img/products/p2.jpg')}}" alt="product"></td>
                                        <td>Tee-Shirt For Men</td>
                                        <td><strong>Kethan Komary</strong><br>
                                            ktn@example.com
                                        </td>
                                        <td>10</td>
                                        <td>$280</td>
                                        <td>COD</td>
                                        <td><span class="mb-2 mr-2 badge badge-warning">Redy To Ship</span>
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
                                        <td>1048</td>
                                        <td><img class="product-img tbl-img" src="{{asset('admin/assets/img/products/p3.jpg')}}" alt="product"></td>
                                        <td>Tee-Shirt For Girl</td>
                                        <td><strong>Mehul Markue</strong><br>
                                            mehul@example.com
                                        </td>
                                        <td>5</td>
                                        <td>$100</td>
                                        <td>COD</td>
                                        <td><span class="mb-2 mr-2 badge badge-info">On The Way</span></td>
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
                                        <td><img class="product-img tbl-img" src="{{asset('admin/assets/img/products/p4.jpg')}}" alt="product"></td>
                                        <td>Cowboy Hat</td>
                                        <td><strong>Bhavesh Markue</strong><br>
                                            Bhavesh@example.com
                                        </td>
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
                                        <td>1046</td>
                                        <td><img class="product-img tbl-img" src="{{asset('admin/assets/img/products/p5.jpg')}}" alt="product"></td>
                                        <td>Womens Purse</td>
                                        <td><strong>Morgus Markue</strong><br>
                                            morgus@example.com
                                        </td>
                                        <td>3</td>
                                        <td>$80</td>
                                        <td>PAID</td>
                                        <td><span class="mb-2 mr-2 badge badge-secondary">Pending</span>
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
                                        <td>1045</td>
                                        <td><img class="product-img tbl-img" src="{{asset('admin/assets/img/products/p6.jpg')}}" alt="product"></td>
                                        <td>Baby toy doctor kit</td>
                                        <td><strong>Merry Donesk</strong><br>
                                            Merry07@example.com
                                        </td>
                                        <td>10</td>
                                        <td>$280</td>
                                        <td>COD</td>
                                        <td><span class="mb-2 mr-2 badge badge-warning">Redy To Ship</span>
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
                                        <td>1095</td>
                                        <td><img class="product-img tbl-img" src="{{asset('admin/assets/img/products/p7.jpg')}}" alt="product"></td>
                                        <td>Mens Shirt</td>
                                        <td><strong>Sin Cinaty</strong><br>
                                            cinaty@example.com
                                        </td>
                                        <td>10</td>
                                        <td>$280</td>
                                        <td>COD</td>
                                        <td><span class="mb-2 mr-2 badge badge-warning">Redy To Ship</span>
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
                                        <td>354</td>
                                        <td><img class="product-img tbl-img" src="{{asset('admin/assets/img/products/p8.jpg')}}" alt="product"></td>
                                        <td>Smart Watch</td>
                                        <td><strong>Tokyo Naikra</strong><br>
                                            naikra@example.com
                                        </td>
                                        <td>10</td>
                                        <td>$280</td>
                                        <td>COD</td>
                                        <td><span class="mb-2 mr-2 badge badge-warning">Redy To Ship</span>
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
                                        <td>654</td>
                                        <td><img class="product-img tbl-img" src="{{asset('admin/assets/img/products/p9.jpg')}}" alt="product"></td>
                                        <td>Tee-Shirt For Men</td>
                                        <td><strong>Hardik Patel</strong><br>
                                            patel000777@example.com
                                        </td>
                                        <td>2</td>
                                        <td>$50</td>
                                        <td>PAID</td>
                                        <td><span class="mb-2 mr-2 badge badge-info">On The Way</span>
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
                                        <td>785</td>
                                        <td><img class="product-img tbl-img" src="{{asset('admin/assets/img/products/p10.jpg')}}" alt="product"></td>
                                        <td>Men casual shoes</td>
                                        <td><strong>Pintos Martino</strong><br>
                                            martino0777@example.com
                                        </td>
                                        <td>10</td>
                                        <td>$280</td>
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
