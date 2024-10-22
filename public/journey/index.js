// Login function for login.php
function Login(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    alert(`Username: ${username}\nPassword: ${password}`);
}


// Register function for register.php (currently not working because of php validation)
function Register(event) {
    event.preventDefault();

    const firstName = document.getElementById('fname').value;
    const lastName = document.getElementById('lname').value;
    const username = document.getElementById('username').value;
    const password = document.getElementById('pass').value;
    const confirmPassword = document.getElementById('dpass').value;

    if (password !== confirmPassword) {
        alert('Error: Passwords do not match!');
        return;
    }

    alert(`First Name: ${firstName}\nLast Name: ${lastName}\nUsername: ${username}\nPassword: ${password}\nConfirm Password: ${confirmPassword}`);
}


// Reset Password function for forgetpass.php
function ResetPassword(event) {
    event.preventDefault();

    const email = document.getElementById('email').value;

    alert(`Email: ${email}`);
}





// Cart function for cart.php
let products = [];

document.addEventListener('DOMContentLoaded', () => {
    FetchProducts();
    LoadCart();
});

function FetchProducts() {
    fetch('/public/journey/products.json')
        .then(response => response.json())
        .then(data => {
            products = data;
            console.log(products);
        })
        .catch(error => console.error('Error: ', error));
}

function LoadCart() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const cartContainer = document.getElementById('cart-container');

    cartItems.forEach((item, index) => {
        const newItemBox = CreateCartItem(item, index);
        cartContainer.appendChild(newItemBox);
    });

    UpdateTotal();
    CartListeners();
}

function AddToCart(productId) {
    const product = products.find(p => p.id === productId);

    if (!product) {
        return alert('Error: Product not found.');
    }

    alert(`Added 1 ${product.name} to your cart`);

    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const existingIndex = cartItems.findIndex(item => item.id === product.id);

    if (existingIndex !== -1) {
        cartItems[existingIndex].quantity += 1;
    } else {
        cartItems.push({ id: product.id, name: product.name, price: product.price, quantity: 1 });
    }

    localStorage.setItem('cartItems', JSON.stringify(cartItems));
    UpdateTotal();
}

function CreateCartItem(item, index) {
    const newItemBox = document.createElement('div');

    newItemBox.classList.add('item-box', 'container');
    newItemBox.innerHTML = `
        <div class="cart-item-picture"></div>
        <div class="cart-item-name">
            <p class="font-bold-16">${item.name}</p>
        </div>
        <div class="cart-item-quantity">
            <div class="quantity">
                <button class="minus" aria-label="Decrease" data-index="${index}">&minus;</button>
                <input type="number" class="input-box" value="${item.quantity}" min="1" readonly />
                <button class="plus" aria-label="Increase" data-index="${index}">&plus;</button>
            </div>
        </div>
        <div class="cart-item-price">
            <p>RM ${item.price * item.quantity}</p>
        </div>
        <button class="cart-delete-btn font-regular-16" data-index="${index}">Remove</button>
    `;

    return newItemBox;
}

function CartListeners() {
    document.querySelectorAll('.cart-delete-btn').forEach(button => {
        button.addEventListener('click', function() {
            const index = this.getAttribute('data-index');
            RemoveItem(index);
        });
    });

    document.querySelectorAll('.plus').forEach(button => {
        button.addEventListener('click', function() {
            const index = this.getAttribute('data-index');
            ChangeQuantity(index, 1);
        });
    });

    document.querySelectorAll('.minus').forEach(button => {
        button.addEventListener('click', function() {
            const index = this.getAttribute('data-index');
            ChangeQuantity(index, -1);
        });
    });
}

function ChangeQuantity(index, change) {
    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const item = cartItems[index];

    if (item) {
        item.quantity = Math.max(1, item.quantity + change);
        localStorage.setItem('cartItems', JSON.stringify(cartItems));
        
        UpdateTotal();

        const inputBox = document.querySelectorAll('.input-box')[index];
            if (inputBox) {
                inputBox.value = item.quantity;
            }

        const priceElement = document.querySelectorAll('.cart-item-price p')[index];
            if (priceElement) {
                priceElement.innerText = `RM ${item.price * item.quantity}`;
            }
    }
}

function UpdateTotal() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const totalPrice = cartItems.reduce((total, item) => total + item.price * item.quantity, 0);
    
    document.getElementById('total-price').innerText = `Total: RM ${totalPrice}`;
}

function RemoveItem(index) {
    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    cartItems.splice(index, 1);

    localStorage.setItem('cartItems', JSON.stringify(cartItems));
    location.reload();
}
