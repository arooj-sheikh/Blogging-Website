<?php
    require_once('database.php');
    if(isset($_POST['fullname'])){
        $fullname= $_POST['fullname'];
        $password= $_POST['password'];

        $sql = "select * from users where fullname='".$fullname."'AND password ='".$password."' limit 1";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 1){
            echo"you have successfully logged in";
            exit();
        }
        else{
            echo"you have entered incorrect password";
            exit();
        }
    }
    ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/One more try2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" >
	<title>Login Page</title>

    <style>
    .log-in{
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
	<script>
		function validateForm() {
			var fullname = document.getElementById("fullname").value;
			var password = document.getElementById("password").value;
			if (fullname == "" || password == "") {
				alert("Username and password fields must be filled out.");
				return false;
			}
			return true;
		}
	</script>
</head>
<body>
    <?php
    include ("login.php");
    ?>
	<nav id="navbar">
        <div id="logo">
            <img src="logo.png" alt="OnlineReaders.com">
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
    <div class="log-in">
	<h1>Login</h1>
	<br>
    <div class="form_input">
	<form method = "POST" action="#">
		<label for="fullname">Username:</label>
		<input type="text" id="fullname" name="fullname"><br><br>
    </div>
    <div class="form_input">
        <label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>
    </div>
		<input class= "login-submit" type="submit" value="Login"><br><br>
		<label for="new account">Don't have an account: <a href= "signup.php" >Create new account<a></label>
	</form>
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
