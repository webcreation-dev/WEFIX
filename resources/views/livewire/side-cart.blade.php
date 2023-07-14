<div class="ec-side-cart-overlay"></div>
 <div id="ec-side-cart" class="ec-side-cart">
     <div class="ec-cart-inner">
         <div class="ec-cart-top">

             <div class="ec-cart-title">
                 <span class="cart_title">Mon Panier</span>
                 <button class="ec-close">×</button>
             </div>
             <ul class="eccart-pro-items">

                @empty(!$cartActive)
                    @foreach ($cartActive as $item)
                    <li class="side-product-cart">
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                            src="{{ asset('e-commerce/' . App\Models\Ecommerce\Cart::getProduct($item['product'])->productImages()->first()->image) }}"
                                alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">{{App\Models\Ecommerce\Cart::getProduct($item['product'])->name}}</a>
                            <span class="cart-price"><span class="side-amount">{{$item['price']}}<span>€</span></span> </span>
                            <div class="qty-plus-minus side-cart">
                                <div class="dec ec_qtybtn" >-</div>
                                <input class="qty-input" type="text" name="ec_qtybtn" value="{{$item['quantity'] ?? 1}}" />
                                <div class="ec_qtybtn inc">+</div>
                                <span class="product-id" style="display:none;">{{$item['product']}}</span>
                            </div>


                            <button id="delete-product" wire:click="deleteProductCart({{$item['product']}})" class="remove">x</button>
                        </div>
                    </li>
                    @endforeach
                @else
                    <div>Votre carte est vide ..</div>
                @endempty

             </ul>
         </div>
         <div class="ec-cart-bottom">
             <div class="cart-sub-total side-cart-sub-total">
                 <table class="table cart-table">
                     <tbody>
                         <tr>
                             <td class="text-left">Sous-Total :</td>
                             <td class="text-right "><span class="side-subtotal" >300.00</span> <span>€</span></td>
                         </tr>
                         <tr>
                             <td class="text-left">Frais de paiement :</td>
                             <td class="text-right "><span class="side-delivery-charges">80.00</span> <span>€</span></td>
                         </tr>
                         <tr>
                             <td class="text-left ">Total :</td>
                             <td class="text-right primary-color"><span class="side-total-global">300.00</span> <span>€</span></td>
                         </tr>
                     </tbody>
                 </table>
             </div>
             <div class="cart_btn">
                 <a href="{{route('carts.index')}}" class="btn btn-primary">VOIR LE PANIER</a>
                 <a href="{{route('orders.index')}}" class="btn btn-secondary">COMMANDER</a>
             </div>
         </div>
     </div>
 </div>


<script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
<script>
    $('#delete-product').click(function(e){
        e.preventDefault();
        var currentProduct = $(this).closest('.side-product-cart').find('.side-cart .product-id').text();

        var data = {
                product: currentProduct,
            };
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url:"{{ route('delete.product.side.cart') }}",
                data:{product:currentProduct},
                    success: function(data){
                        console.log(data.success);
                }
            });

    });

    $('#overlay-cart').click(function(e){
        e.preventDefault();
        var sum = 0;
        var total = 0;
        var totalGlobal = 0;
        $('.side-product-cart').each(function () {
            var quantity = parseFloat($(this).closest('.side-product-cart').find('.side-cart .qty-input').val());
            var price = parseFloat($(this).closest('.side-product-cart').find('.ec-pro-content .side-amount').text());

            sum = (quantity * price);
            total = total + sum;
        });
        totalGlobal = parseFloat(total) + parseFloat($('.side-delivery-charges').text());

        $('.side-subtotal').text(total.toFixed(2));
        $('.side-total-global').text(totalGlobal.toFixed(2));
    });

        $('.side-cart .inc').click(function(e){
            e.preventDefault();
            var sum = 0;
            var total = 0;
            var totalGlobal = 0;

            var currentProduct = $(this).closest('.side-product-cart').find('.side-cart .product-id').text();
            var currentInputChanged = parseFloat($(this).closest('.side-product-cart').find('.side-cart .qty-input').val())+1;

            $('.side-product-cart').each(function () {
                var quantity = parseFloat($(this).closest('.side-product-cart').find('.side-cart .qty-input').val());
                var price = parseFloat($(this).closest('.side-product-cart').find('.ec-pro-content .side-amount').text());

                sum = (quantity * price);
                total = total + sum;
            });
            totalGlobal = parseFloat(total) + parseFloat($('.side-delivery-charges').text());

            $('.side-subtotal').text(total.toFixed(2));
            $('.side-total-global').text(totalGlobal.toFixed(2));


            var data = {
                product: currentProduct,
                quantity: currentInputChanged
            };
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url:"{{ route('update.quantity.product.cart') }}",
                data:{product:currentProduct, quantity:currentInputChanged},
                    success: function(data){
                        console.log(data.success);
                }
            });
        });

        $('.side-cart .dec').click(function(e){
            e.preventDefault();
            var sum = 0;
            var total = 0;
            var totalGlobal = 0;
            var currentProduct = $(this).closest('.side-product-cart').find('.side-cart .product-id').text();
            var currentInputChanged = parseFloat($(this).closest('.side-product-cart').find('.side-cart .qty-input').val())-1;
            $('.side-product-cart').each(function () {
                var quantity = parseFloat($(this).closest('.side-product-cart').find('.side-cart .qty-input').val());
                var price = parseFloat($(this).closest('.side-product-cart').find('.ec-pro-content .side-amount').text());

                sum = (quantity * price);
                total = total + sum;
            });
            totalGlobal = parseFloat(total) + parseFloat($('.side-delivery-charges').text());

            $('.side-subtotal').text(total.toFixed(2));
            $('.side-total-global').text(totalGlobal.toFixed(2));

            var data = {
                product: currentProduct,
                quantity: currentInputChanged
            };
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url:"{{ route('update.quantity.product.cart') }}",
                data:{product:currentProduct, quantity:currentInputChanged},
                    success: function(data){
                        console.log(data.success);
                }
            });
        });
</script>

