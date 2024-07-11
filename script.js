function validateRegister() {
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmPassword').value;
    let email = document.getElementById('email').value;
    let confirmEmail = document.getElementById('confirmEmail').value;

    // Check if password length is at least 8
    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        return false;
    }

    // Check if password contains only English letters and digits
    if (!/^[a-zA-Z0-9]+$/.test(password)) {
        alert("Password must contain only English letters and digits.");
        return false;
    }

    // Check if password matches confirm password
    if (password !== confirmPassword) {
        alert("Password and confirm password do not match.");
        return false;
    }

    // Check if email matches confirm email
    if (email !== confirmEmail) {
        alert("Email and confirm email do not match.");
        return false;
    }

    return true;
}
