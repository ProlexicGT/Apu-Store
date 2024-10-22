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
                <div class="item-box container">
                    <div class="cart-item-picture"></div>
                    <div class="cart-item-name">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum quam harum officiis consequatur ratione deserunt eos fugit atque quisquam hic?</p>
                    </div>
                    <div class="cart-item-quantity">
                        <div class="quantity">
                            <button class="minus" aria-label="Decrease">&minus;</button>
                            <input type="number" class="input-box" value="1" min="1" max="10" />
                            <button class="plus" aria-label="Increase">&plus;</button>
                        </div>
                    </div>
                    <div class="cart-item-price">
                        <p>Price 1</p>
                    </div>
                    <button id="cart-delete-btn">Delete</button>
                </div>
                <div class="item-box container">
                    <div class="cart-item-picture"></div>
                    <div class="cart-item-name">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum quam harum officiis consequatur ratione deserunt eos fugit atque quisquam hic?</p>
                    </div>
                    <div class="cart-item-quantity">
                        <div class="quantity">
                            <button class="minus" aria-label="Decrease">&minus;</button>
                            <input type="number" class="input-box" value="1" min="1" max="10" />
                            <button class="plus" aria-label="Increase">&plus;</button>
                        </div>
                    </div>
                    <div class="cart-item-price">
                        <p>Price 1</p>
                    </div>
                    <button id="cart-delete-btn">Delete</button>
                </div>
            </div>
        </div>
        <div class="bottom-cart-list container">
            <button>Continue Shopping</button>
            <div class="checkout">
                <span>Total Price RM x</span>
                <button>
                    <div>
                        <span class="cotxt">
                            <p>Checkout</p>
                        </span>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <script src="public/journey/index.js"></script>
<?php require_once($root . 'templates/footer.php'); ?>