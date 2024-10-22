<?php require_once($root . 'templates/header.php'); ?>
    <div class="content container">
        <div class="product-page-nav-view-cart">
            <div class="product-page-nav container">
                <ul>
                    <a href="/"><li>Home</li></a>
                    <li>/</li>
                    <a href="/cart"><li>Cart</li></a>
                    <li>/</li>
                    <a href="#"><li>Payment</li></a>      
                </ul>
            </div>
        </div>
        <div class="payment-form">
            <form action="" method="post">
                <div class="payment-page-name">
                    <div class="payment-page-left">
                        <label for="fname">Name</label>
                    </div>
                    <div class="payment-page-name-field">
                        <input type="text" id="fname" placeholder="First Name" required />
                        <input type="text" placeholder="Last Name" required />
                    </div>
                </div>
                <div class="payment-page-email">
                    <div class="payment-page-left">
                        <label for="email">Email</label>
                    </div>
                    <input type="email" id="email" required />
                </div>
                <div class="payment-page-phone">
                    <div class="payment-page-left">
                        <label for="phone">Phone Number</label>
                    </div>
                    <input type="tel" id="phone" pattern="[0-9]{1-15}" maxlength="15" required />
                </div>
                <div class="payment-page-address">
                    <div class="payment-page-left">
                        <label for="address">Address</label>
                    </div>
                    <div class="payment-page-address-right">
                        <input type="text" id="address" placeholder="Address Line 1" required />
                        <input type="text" placeholder="Address Line 2"/>
                        <div class="payment-page-address-city">
                            <div>
                                <input type="text" placeholder="City" required />
                            </div>
                            <div>
                                <input type="text" placeholder="State / Province" required />
                            </div>
                        </div>
                        <input type="text" placeholder="Post / ZIP code" required />
                    </div>
                </div>
                <div class="payment-page-card">
                    <div class="payment-page-left">
                        <label for="card">Credit / Debit Card</label>
                    </div>
                    <input type="number" id="card" maxlength="26" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required />
                </div>
                <div class="payment-page-expiry-date">
                    <div class="payment-page-left">
                        <label for="expiry-date">Expiry Date</label>
                    </div>
                    <input type="tel" pattern="[0-12]{1}/[0-99][1]" id="expiry-date" maxlength="5" placeholder="MM / YY" required />
                </div>
                <div class="payment-page-cvv">
                    <div class="payment-page-left">
                        <label for="cvv">CVC / CVV</label>
                    </div>
                    <input type="number" pattern="[0-9]{3}" maxlength="3" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="cvv" required />
                </div>
            </form>
        </div>
        <div class="checkout-total container">
            <div class="checkout-right">
                <input type="submit" class="payment-button font-regular-16" value="Pay" />
            </div>
        </div>
    </div>
<?php require_once($root . 'templates/footer.php'); ?>