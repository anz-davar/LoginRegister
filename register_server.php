<?php

//connect to database
$host = "localhost";
$user = "root";
$password = 'root1234';
$db_name = "login_register";

$con = mysqli_connect($host, $user, $password, $db_name);
if (mysqli_connect_error()) { // check if database connection is successful
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}

// get all the fields from the form
$email = $_POST['email'];
$confirmEmail = $_POST['confirmEmail'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$username = $_POST['username'];

// Check if the email already exists in the database
$checkSql = "SELECT COUNT(*) AS count FROM users WHERE email = '$email'";
$checkResult = mysqli_query($con, $checkSql);
$row = mysqli_fetch_assoc($checkResult);
$count = $row['count'];

if ($count > 0) {
    // Email already exists, redirect back to registration page with error message
    header("Location: register.php?error=1");
    exit();
}


// creates new user in database and opens welcome register screen
$sql = "INSERT INTO users (email, password, username) VALUES ('$email', '$password', '$username')"; //sql query to insert new user
$result = mysqli_query($con, $sql); //result will have true if new user was added else false
if ($result) {
    header("Location: register_welcome.php?username=$username"); // go to welcome page
    exit();
} else {
    echo "Error creating user: " . $sql . "<br>" . mysqli_error($con); // print error if user could not be added
}



