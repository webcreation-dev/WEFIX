<div class="ec-checkout-leftside col-lg-8 col-md-12 ">
    <!-- checkout content Start -->
    <div class="ec-checkout-content">
        <div class="ec-checkout-inner">
            <div class="ec-checkout-wrap margin-bottom-30">
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

            </div>
            <div class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">
                <div class="ec-checkout-block ec-check-bill">
                    <h3 class="ec-checkout-title">Billing Details</h3>
                    <div class="ec-bl-block-content">
                        <div class="ec-check-subtitle">Checkout Options</div>
                        <span class="ec-bill-option">
                            <span>
                                <input type="radio" id="bill1" name="radio-group">
                                <label for="bill1">I want to use an existing address</label>
                            </span>
                            <span>
                                <input type="radio" id="bill2" name="radio-group" checked>
                                <label for="bill2">I want to use new address</label>
                            </span>
                        </span>
                        <div class="ec-check-bill-form">
                            <form action="#" method="post">
                                <span class="ec-bill-wrap ec-bill-half">
                                    <label>First Name*</label>
                                    <input type="text" name="firstname"
                                        placeholder="Enter your first name" required />
                                </span>
                                <span class="ec-bill-wrap ec-bill-half">
                                    <label>Last Name*</label>
                                    <input type="text" name="lastname"
                                        placeholder="Enter your last name" required />
                                </span>
                                <span class="ec-bill-wrap">
                                    <label>Address</label>
                                    <input type="text" name="address" placeholder="Address Line 1" />
                                </span>
                                <span class="ec-bill-wrap ec-bill-half">
                                    <label>City *</label>
                                    <span class="ec-bl-select-inner">
                                        <select name="ec_select_city" id="ec-select-city"
                                            class="ec-bill-select">
                                            <option selected disabled>City</option>
                                            <option value="1">City 1</option>
                                            <option value="2">City 2</option>
                                            <option value="3">City 3</option>
                                            <option value="4">City 4</option>
                                            <option value="5">City 5</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="ec-bill-wrap ec-bill-half">
                                    <label>Post Code</label>
                                    <input type="text" name="postalcode" placeholder="Post Code" />
                                </span>
                                <span class="ec-bill-wrap ec-bill-half">
                                    <label>Country *</label>
                                    <span class="ec-bl-select-inner">
                                        <select name="ec_select_country" id="ec-select-country"
                                            class="ec-bill-select">
                                            <option selected disabled>Country</option>
                                            <option value="1">Country 1</option>
                                            <option value="2">Country 2</option>
                                            <option value="3">Country 3</option>
                                            <option value="4">Country 4</option>
                                            <option value="5">Country 5</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="ec-bill-wrap ec-bill-half">
                                    <label>Region State</label>
                                    <span class="ec-bl-select-inner">
                                        <select name="ec_select_state" id="ec-select-state"
                                            class="ec-bill-select">
                                            <option selected disabled>Region/State</option>
                                            <option value="1">Region/State 1</option>
                                            <option value="2">Region/State 2</option>
                                            <option value="3">Region/State 3</option>
                                            <option value="4">Region/State 4</option>
                                            <option value="5">Region/State 5</option>
                                        </select>
                                    </span>
                                </span>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
            <span class="ec-check-order-btn">
                <a class="btn btn-primary" href="#">Place Order</a>
            </span>
        </div>
    </div>
    <!--cart content End -->
</div>
