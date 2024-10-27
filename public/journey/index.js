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
    
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (emailPattern.test(email)) {
        displayEmailSent(email);
    } else {
        var invalidEmail = document.getElementById("invalidEmail");
        invalidEmail.style.display = "block";

        var sentEmail = document.getElementById("emailSent");
        sentEmail.style.display = "none";

        var noEmail = document.getElementById("emailNotEntered");
        noEmail.style.display = "none";
    }

}


// Cart function for cart.php
let products = [];

document.addEventListener('DOMContentLoaded', () => {
    FetchProducts();
    LoadCart();
});

// Fetch all products from products.json in JSON format
function FetchProducts() {
    fetch('/public/journey/products.json')
        .then(response => response.json())
        .then(data => {
            products = data;
            console.log(products);
        })
        .catch(error => console.error('Error: ', error));
}

// Update cart item with data from Local Storage
function LoadCart() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const cartContainer = document.getElementById('cart-container');
    cartContainer.innerHTML = '';

    if (cartItems.length === 0) {
        const noItemsMessage = document.createElement('h3');
        noItemsMessage.textContent = 'You have no items in your cart.';

        cartContainer.appendChild(noItemsMessage);
    } else {
        cartItems.forEach((item, index) => {
            const newItemBox = CreateCartItem(item, index);
            
            cartContainer.appendChild(newItemBox);
        });
    }

    UpdateTotal();
    CartListeners();
}

// Get all the product attributes using its ID and save them into Local Storage
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
        cartItems.push({ id: product.id, name: product.name, price: product.price, image: product.image, quantity: 1 });
    }

    localStorage.setItem('cartItems', JSON.stringify(cartItems));
    LoadCart();
}

// Create a new cart item in HTML for cart.php
function CreateCartItem(item, index) {
    const newItemBox = document.createElement('div');

    newItemBox.classList.add('item-box', 'container');
    newItemBox.innerHTML = `
        <div class="cart-item-picture">
            <img src="${item.image}" alt="${item.name}" />
        </div>
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

// Attach remove, plus, and minus button event listeners for each cart item
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

// Update cart item quantity based on index and change (either 1 or -1) parameters
function ChangeQuantity(index, change) {
    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const item = cartItems[index];

    if (item) {
        item.quantity = Math.max(1, item.quantity + change);
        localStorage.setItem('cartItems', JSON.stringify(cartItems));

        const inputBox = document.querySelectorAll('.input-box')[index];
            if (inputBox) {
                inputBox.value = item.quantity;
            }

        const priceElement = document.querySelectorAll('.cart-item-price p')[index];
            if (priceElement) {
                priceElement.innerText = `RM ${item.price * item.quantity}`;
            }

        UpdateTotal();
    }
}

// Update total price with data from Local Storage
function UpdateTotal() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const totalPrice = cartItems.reduce((total, item) => total + item.price * item.quantity, 0);
    
    document.getElementById('total-price').innerText = `Total: RM ${totalPrice}`;
}

// Remove cart item based on the index parameter
function RemoveItem(index) {
    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    cartItems.splice(index, 1);

    localStorage.setItem('cartItems', JSON.stringify(cartItems));
    LoadCart();
}

function displayEmailSent(email) {
    if (email == null) {
        var noEmail = document.getElementById("emailNotEntered");
        noEmail.style.display = "block";

        var sentEmail = document.getElementById("emailSent");
        sentEmail.style.display = "none";

        var invalidEmail = document.getElementById("invalidEmail");
        invalidEmail.style.display = "none";
    } else if (email != null) {
        var sentEmail = document.getElementById("emailSent");
        sentEmail.style.display = "block";

        var noEmail = document.getElementById("emailNotEntered");
        noEmail.style.display = "none";

        var invalidEmail = document.getElementById("invalidEmail");
        invalidEmail.style.display = "none";
    }

}