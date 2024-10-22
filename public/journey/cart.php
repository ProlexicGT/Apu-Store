<?php require_once($root . 'templates/header.php'); ?>
    <div class="content container">
        <div class="product-page-nav-view-cart">
            <div class="product-page-nav container">
                <ul>
                    <a href="/"><li>Home</li></a>
                    <li>/</li>
                    <a href="/cart"><li>Cart</li></a>
                </ul>
            </div>
        </div>
        <div class="cart-list container">
            <div class="container">
                <div id="cart-container" class="shopping-cart">
                    <!-- Cart items will be added here --->
                </div>
            </div>
        </div>
        <div class="bottom-cart-list container">
            <a href="/"><button class="font-regular-16">Continue shopping</button></a>
            <div class="checkout">
                <span id="total-price" class="font-bold-16">
                    <!-- Total price will be updated here --->
                    Total: RM 0
                </span>
                <a href="/payment">
                    <button>
                        <div>
                            <span class="cotxt">
                                <p>Checkout</p>
                            </span>
                        </div>
                    </button>
                </a>
            </div>
        </div>
    </div>
    <script src="public/journey/index.js"></script>
<?php require_once($root . 'templates/footer.php'); ?>