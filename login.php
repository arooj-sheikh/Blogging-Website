<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted username and password
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];

    // TODO: Validate the username and password against your user database or any other authentication mechanism

    // For demonstration purposes, we'll simply check if the username is 'admin' and the password is 'password'
    if ($fullname === 'fullname' && $password === 'password') {
        // Successful login
        echo "Login successful!";
    } else {
        // Invalid credentials
        echo "Invalid username or password.";
    }
}
?>
