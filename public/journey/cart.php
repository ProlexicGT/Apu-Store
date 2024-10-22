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
                <div id="cart-container">
                    <!-- Cart items will be added here --->
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                        const cartContainer = document.getElementById('cart-container');

                        cartItems.forEach((item, index) => {
                            const newItemBox = document.createElement('div');
                            newItemBox.classList.add('item-box', 'container');

                            newItemBox.innerHTML = `
                                <div class="cart-item-picture"></div>
                                <div class="cart-item-name">
                                    <p>${item.name}</p>
                                </div>
                                <div class="cart-item-quantity">
                                    <div class="quantity">
                                        <button class="minus" aria-label="Decrease">&minus;</button>
                                        <input type="number" class="input-box" value="1" min="1" max="10" />
                                        <button class="plus" aria-label="Increase">&plus;</button>
                                    </div>
                                </div>
                                <div class="cart-item-price">
                                    <p>RM ${item.price}</p>
                                </div>
                                <button class="cart-delete-btn font-regular-16" data-index="${index}">Delete</button>
                            `;

                            cartContainer.appendChild(newItemBox);
                        });

                        updateTotalPrice();

                        document.querySelectorAll('.cart-delete-btn').forEach(button => {
                            button.addEventListener('click', function() {
                                const index = this.getAttribute('data-index');
                                removeItem(index);
                            });
                        });
                    });

                    function removeItem(index) {
                        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                        cartItems.splice(index, 1);

                        localStorage.setItem('cartItems', JSON.stringify(cartItems));
                        
                        location.reload();

                        updateTotalPrice();
                    }
                </script>
            </div>
        </div>
        <div class="bottom-cart-list container">
            <a href="/"><button class="font-regular-16">Continue shopping</button></a>
            <div class="checkout">
                <span id="total-price" class="font-bold-16">Total: RM 0</span>
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