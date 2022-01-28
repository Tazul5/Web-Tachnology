<?php
if(session_status()>=0){
    if(isset($_SESSION["username"])){
        if($_SESSION["username"]=="Admin"){
            echo "Redirecting";
            header("refresh: 0.5; url = admin.php");
        }
        else{
            echo "Redirecting";
            header("refresh: 0.5; url = user.php");
        }
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login-reg.css">
</head>
<body>
    <!-- <form name="myForm" action="loginprocess.php" method="post" onsubmit="return validateForm()">
    
    <div class="">
			<label for="username">Username</label>
			<input type="text" placeholder="Username" id="username" name="username"/>
            <small id ="nameErr"></small>
    </div>
    <div class="">
			<label for="password">Password</label>
			<input type="password" placeholder="Password" id="password" name="password"/>
            <small id ="passErr"></small>
    </div>
    <input type="submit" name="submit">
    </form>
    <a href="signup.php">not registered Yet?</a> -->


    <div class="login-page">
        <div class="form">
            
        <h2>Login</h2>
            <form class="login-form" name="myForm" action="loginprocess.php" method="post" onsubmit="return validateForm()">
            <input type="text" placeholder="username" id="username" name="username"/>
            <input type="password" placeholder="password" id="password" name="password"/>
            <button type="submit" name="submit">Login</button>
            <p class="message" href="signup.php">Not registered? <a href="signup.php">Create an account</a></p>
            </form>
            </div>
    </div>


    <script src="js/loginValidation.js"></script>
</body>
</html>
