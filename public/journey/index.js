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





let products = [];

document.addEventListener('DOMContentLoaded', () => {
    fetch('/public/journey/products.json')
        .then(response => response.json())
        .then(data => {
            products = data;
            console.log(products);
        })
        .catch(error => console.error('Error: ', error));
});


function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    if (!product) return alert('Error: Product not found.');

    alert(product.name + " have been added to your cart!");

    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    const existingItemIndex = cartItems.findIndex(item => item.id === product.id);

    if (existingItemIndex !== -1) {
        cartItems[existingItemIndex].quantity += 1;
    } else {
        cartItems.push({ id: product.id, name: product.name, price: product.price, quantity: 1 });
    }

    localStorage.setItem('cartItems', JSON.stringify(cartItems));

    updateTotalPrice();
}


function updateTotalPrice() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const totalPrice = cartItems.reduce((total, item) => total + item.price, 0);
    document.getElementById('total-price').innerText = `Total: RM ${totalPrice}`;
}





// [Legacy] Cart function for cart.php
document.addEventListener('DOMContentLoaded', function () {
    initCartFunctionality();
});

function initCartFunctionality() {
    const quantityContainers = document.querySelectorAll(".quantity");

    quantityContainers.forEach(container => {
        const minusBtn = container.querySelector(".minus");
        const plusBtn = container.querySelector(".plus");
        const inputBox = container.querySelector(".input-box");

        updateButtonStates();

        container.addEventListener("click", handleButtonClick);
        inputBox.addEventListener("input", handleQuantityChange);

        function updateButtonStates() {
            const value = parseInt(inputBox.value);
            minusBtn.disabled = value <= 1;
            plusBtn.disabled = value >= parseInt(inputBox.max);
        }

        function handleButtonClick(event) {
            if (event.target.classList.contains("minus")) {
                decreaseValue();
            } else if (event.target.classList.contains("plus")) {
                increaseValue();
            }
        }

        function decreaseValue() {
            let value = parseInt(inputBox.value);
            value = isNaN(value) ? 1 : Math.max(value - 1, 1);
            inputBox.value = value;
            updateButtonStates();
            handleQuantityChange();
        }

        function increaseValue() {
            let value = parseInt(inputBox.value);
            value = isNaN(value) ? 1 : Math.min(value + 1, parseInt(inputBox.max));
            inputBox.value = value;
            updateButtonStates();
            handleQuantityChange();
        }

        function handleQuantityChange() {
            let value = parseInt(inputBox.value);
            value = isNaN(value) ? 1 : value;

            console.log("Quantity changed:", value);
        }
    });
}
