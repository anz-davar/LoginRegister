<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">  <!-- import css file -->
</head>
<body>
<div id="frm">
    <h2>Login</h2>

    <?php // show error message if login failed
    if (isset($_GET['error'])) { // if error exists show this text below
        echo '<p id="error">Login failed. Check your credentials!!!</p>';
    }
    ?>
    <!--    creating form and sending data to login_handler.php on clicking button-->
    <form action="login_server.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="register.php">Register here</a></p>

    </form>
</div>
</body>
</html>
