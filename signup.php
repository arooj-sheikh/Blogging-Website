<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.html");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" >
    <title>Signup Page</title>
  </head>
  <style>
    .sign-up{
        color-scheme: light;
    text-align: justify-all;
    text-align: center;
    border-block-style: groove;
    border: 100%;
    border-color: rgb(245, 235, 235);
    border-radius: 50px;
    padding-block: 50px;
    font-size: 20px;
    margin-left: 25%;
    margin-right: 25%;
    margin-top: 5%;
    }
</style>


  <body>
    <nav id="navbar">
        <div id="logo">
            <img src="IMAGES/logo.PNG" alt="OnlineReaders.com">
        </div>
    
        <ul>
            <button class="button" onclick="window.location.href='index.html'">Home</button>
            <button class="button"onclick="window.location.href='readblog.html'">Read Blog</button>
            <button class="button"onclick="window.location.href='writeblog.html'">Add your Own Blog</button>
            <button class="button"onclick="window.location.href='about.html'">About Us</button>
            <button class="button"onclick="window.location.href='contact.html'">Contact Us</button>
            <button class="button"onclick="window.location.href='log-in.php'">Login</button>
            <button class="button"onclick="window.location.href='signup.php'">Signup</button>
        </ul>
        
    
    </nav>
    <div class="sign-up">
    <h1>Signup</h1> <br>
  <br>
   
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="fullname">Username:</label>
                <input type="text" class="form-control" name="fullname" Placeholder="Fullname:">
            </div>
            <br>
            <div class="form-group">
            <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" Placeholder="Email:">
            </div>
            <br>
            <div class="form-group">
               <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" Placeholder="Password:">
            </div>
            <br>
            <div class="form-group">
                <label for="password">Confirm Password:</label>
                <input type="password" class="form-control" name="confirm_password" Placeholder="Confirm Password:">
            </div>
            <br>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Register" name="submit">
            </div>
        </form>
        <div>
        <div><p>Already Registered <a href="log-in.php">Login Here</a></p></div>
      </div>
    </div>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; 2023 Example Company. All rights reserved.</p>
            </div>
            <div class="col-md-6"></div>
        </div>
</footer>
  </body>
</html>
