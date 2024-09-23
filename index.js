function Login(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    alert(`Username: ${username}\nPassword: ${password}`);
}

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

function ResetPassword(event) {
    event.preventDefault();

    const email = document.getElementById('email').value;

    alert(`Email: ${email}`);
}
