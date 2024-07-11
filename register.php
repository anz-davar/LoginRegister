<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="script.js"></script>
    <title>Registration</title>
</head>
<body>
<div id="frm">
    <h2>Register new user</h2>
    <?php // show error message if login failed
    if (isset($_GET['error'])) { // show error message if we have duplicated email
        echo '<p id="error">Registration failed! User already exists!</p>';
    }
    ?>
    <form action="register_server.php" method="POST" onsubmit="return validateRegister()">
        <!--    <h2>Registration</h2>-->
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="confirmEmail">Confirm Email:</label>
        <input type="email" name="confirmEmail" id="confirmEmail" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
        <br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <button type="submit" id="btn">Register</button>
        <p>Already have an account? <a href="index.php">Login here</a></p>

    </form>
</div>
</body>
</html>
