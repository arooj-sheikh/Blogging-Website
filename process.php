<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $action = $_POST["action"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $email = $_POST["email"];
    
    // Authenticate user (example using a simple array, replace with your own logic)
    $users = [
        ['email' => 'user1@example.com', 'password' => 'password1'],
        ['email' => 'user2@example.com', 'password' => 'password2']
    ];
    
    $loggedIn = false;
    
    foreach ($users as $user) {
        if ($user['email'] == $email && $user['password'] == $password) {
            $loggedIn = true;
            break;
        }
    }
    
    if (!$loggedIn) {
        echo "Authentication failed. Please check your credentials.";
        exit;
    }
    
    // Email parameters
    $to = "alishbaabdulsuboor@gmail.com"; // Change this to the admin's email address
    $subject = "New Blog Submission";
    $message = "Title: $title\n\nContent: $content\n\nSubmitted by: $email";
    $headers = "From: $email";
    
    // Send the email
    $success = mail($to, $subject, $message, $headers);
    
    if ($success) {
        echo "Thank you for submitting your blog. It has been sent to the admin.";
    } else {
        echo "Oops! An error occurred while sending the blog. Please try again later.";
    }
}
?>
