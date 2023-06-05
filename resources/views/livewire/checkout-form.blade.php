<div class="ec-checkout-leftside col-lg-8 col-md-12 ">
    <!-- checkout content Start -->
    <div class="ec-checkout-content">
        <div class="ec-checkout-inner">
            {{-- <div class="ec-checkout-wrap margin-bottom-30">
                <div class="ec-checkout-block ec-check-new">
                    <h3 class="ec-checkout-title">New Customer</h3>
                    <div class="ec-check-block-content">
                        <div class="ec-check-subtitle">Checkout Options</div>
                        <form action="#">
                            <span class="ec-new-option">
                                <span>
                                    <input type="radio" id="account1" name="radio-group" checked>
                                    <label for="account1">Register Account</label>
                                </span>
                                <span>
                                    <input type="radio" id="account2" name="radio-group">
                                    <label for="account2">Guest Account</label>
                                </span>
                            </span>
                        </form>
                        <div class="ec-new-desc">By creating an account you will be able to shop faster,
                            be up to date on an order's status, and keep track of the orders you have
                            previously made.
                        </div>
                        <div class="ec-new-btn"><a href="#" class="btn btn-primary">Continue</a></div>

                    </div>
                </div>
                <div class="ec-checkout-block ec-check-login">
                    <h3 class="ec-checkout-title">Returning Customer</h3>
                    <div class="ec-check-login-form">
                        <form action="#" method="post">
                            <span class="ec-check-login-wrap">
                                <label>Email Address</label>
                                <input type="text" name="name" placeholder="Enter your email address"
                                    required />
                            </span>
                            <span class="ec-check-login-wrap">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Enter your password"
                                    required />
                            </span>

                            <span class="ec-check-login-wrap ec-check-login-btn">
                                <button class="btn btn-primary" type="submit">Login</button>
                                <a class="ec-check-login-fp" href="#">Forgot Password?</a>
                            </span>
                        </form>
                    </div>
                </div>

            </div> --}}
            <div class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">
                <div class="ec-checkout-block ec-check-bill">
                    <h3 class="ec-checkout-title">Détail de la commande</h3>
                    <div class="ec-bl-block-content">

                        <div class="ec-check-bill-form">
                            <form  wire:submit.prevent="submitFormCheckout">
                                <span>
                                    <input type="hidden" id="total_amount_order" name="total_amount"  wire:model="orderFields.total_amount" value="">
                                </span>
                                <span class="ec-bill-wrap ec-bill-half">
                                    <label>Prénom *</label>
                                    <input type="text"  name="first_name" wire:model="orderFields.first_name"
                                        placeholder="Entrez votre prénom" required />

                                </span>
                                <span class="ec-bill-wrap ec-bill-half">
                                    <label>Nom *</label>
                                    <input type="text" name="last_name" wire:model="orderFields.last_name"
                                        placeholder="Entrez votre nom" required />

                                </span>
                                <span class="ec-bill-wrap ec-bill-half">
                                    <label>Email</label>
                                    <input type="email" name="email"  required wire:model="orderFields.email" placeholder="Entrez votre email" />
                                </span>
                                <span class="ec-bill-wrap ec-bill-half">
                                    <label>Addresse</label>
                                    <input type="text" name="apartement" requiredwire:model="orderFields.apartement" placeholder="Entrez votre addresse" />

                                </span>

                                <span class="ec-bill-wrap ec-bill-half">
                                    <label>Téléphone</label>
                                    <input type="text" name="phone" required wire:model="orderFields.phone" placeholder="Entrez votre téléphone" />

                                </span>
                                <span class="ec-bill-wrap ec-bill-half">
                                    <label>Code postal</label>
                                    <input type="text" name="zip_code" required wire:model="orderFields.zip_code" placeholder="Entre votre code postal" />

                                </span>
                                <span class="ec-bill-wrap ec-bill-half">
                                    <label>Pays *</label>
                                    <span class="ec-bl-select-inner">
                                        <select name="country" id="ec-select-country" required wire:model="orderFields.country"
                                            class="ec-bill-select">
                                            <option selected disabled>Choisir</option>
                                            <option value="1">Country 1</option>
                                            <option value="2">Country 2</option>
                                            <option value="3">Country 3</option>
                                            <option value="4">Country 4</option>
                                            <option value="5">Country 5</option>
                                        </select>
                                    </span>

                                </span>
                                <span class="ec-bill-wrap ec-bill-half">
                                    <label>Ville *</label>
                                    <span class="ec-bl-select-inner">
                                        <select name="city" id="ec-select-city" required wire:model="orderFields.city"
                                            class="ec-bill-select">
                                            <option selected disabled>Choisir</option>
                                            <option value="1">City 1</option>
                                            <option value="2">City 2</option>
                                            <option value="3">City 3</option>
                                            <option value="4">City 4</option>
                                            <option value="5">City 5</option>
                                        </select>
                                    </span>

                                </span>
                                <div class="text-right mt-md-3 mt-5">
                                    <button class="btn btn-block btn-primary"  type="submit" onclick="validateForm()" wire:click="submitFormCheckout" >COMMANDER</button>
                                  </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
            {{-- <span class="ec-check-order-btn">
                <a class="btn btn-block btn-primary" wire:click="submitFormCheckout" >COMMANDER</a>
            </span> --}}
        </div>
    </div>
    <!--cart content End -->
</div>
