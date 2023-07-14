<div class="ec-cart-content">
    <div class="ec-cart-inner">
        <div class="row">
            <form action="#">
                <div class="table-content cart-table-content">
                    <table>
                        <thead>
                            <tr>
                                <th>Produit</th>
                                <th>Prix</th>
                                <th style="text-align: center;">Quantité</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @empty(!$cartActive)
                                @foreach ($cartActive as $item)
                                    <tr class="product-cart">
                                        <td data-label="Product" class="ec-cart-pro-name"><a
                                                href="product-left-sidebar.html"><img class="ec-cart-pro-img mr-4" src="{{ asset('e-commerce/' . App\Models\Ecommerce\Cart::getProduct($item['product'])->productImages()->first()->image) }}" alt="" />

                                                {{App\Models\Ecommerce\Cart::getProduct($item['product'])->name}}
                                            </a></td>
                                        <td data-label="Price" class="ec-cart-pro-price">
                                            <span
                                                class="amount">
                                                {{$item['price']}}
                                                {{-- {{App\Models\Ecommerce\Cart::getProduct($item['product'])->reduction_price}} --}}
                                            </span>
                                                <span>€</span>
                                        </td>
                                        <td data-label="Quantity" class="ec-cart-pro-qty"
                                            style="text-align: center;">
                                            <div class="cart-qty-plus-minus">

                                                <input class="cart-plus-minus" type="text"
                                                    name="cartqtybutton" value="{{$item['quantity'] ?? 1}}" />
                                                <span class="product-id" style="display:none;">{{$item['product']}}</span>

                                            </div>
                                        </td>
                                        <td data-label="Total" class="ec-cart-pro-subtotal"><span class="total">56.00</span><span>€</span></td>
                                        <td data-label="Remove" class="ec-cart-pro-remove">
                                            <button title="Retirer de la carte" wire:click="deleteProductCart({{$item['product']}})" ><i  class="ecicon eci-trash-o"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="product-cart">Votre carte est vide ..</tr>
                            @endempty
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ec-cart-update-bottom">
                            <a href="{{route('products.index')}}">Continuer les achats</a>
                            <button wire:click="goToCheckout()" class="btn btn-primary">COMMANDER</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


