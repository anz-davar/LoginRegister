<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // check if there we got post request
// connect to database
    $host = "localhost";
    $user = "root";
    $password = 'root1234';
    $db_name = "login_register";

    $con = mysqli_connect($host, $user, $password, $db_name);
    if (mysqli_connect_error()) { // check if database connenction is successful
        die("Failed to connect with MySQL: " . mysqli_connect_error());
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from users where email='$email' and password='$password'"; // build query to get users with given email and password
    $result = mysqli_query($con, $sql); // run sql query on database and save result into variable result
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC); // convert result to array
    $count = mysqli_num_rows($result);
    $username = $row['username'];

    if ($count > 0) { // if checks if sent email equals to admin@gmail.com and password equals to c
        header("Location: login_welcome.php?username=$username"); //  open welcome screen if user details are correct
        exit();
    } else {
//    go back to index.php and send error =1 to tell index.php that we have error
        header("Location: index.php?error=1");
        exit();
    }
} else {
    echo "Invalid request method.";
}
