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
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login-reg.css">
</head>
<body>
    


    <div class="login-page">
      <div class="form">
        <h2>Sign Up</h2>
        <form class="register-form"action="registrationprocess.php" method="post" name="regForm" onsubmit="return validateForm()">

            <input type="text" name="username" id="username" placeholder="username">
            <small id ="nameErr"></small>

            <input type="text" name="firstname" id="firstname"  placeholder="firstname">
            <small id ="firstErr"></small>

            <input type="text" name="lastname" id="lastname"  placeholder="lastname">
            <small id ="lastErr"></small>

            <input type="password" name="password" id="password"  placeholder="password">
            <small id ="passErr"></small>

            <input type="email" name="email" id="email"  placeholder="email">
            <small id ="emailErr"></small>

            <input type="text" name="institution" id="institution" placeholder="institution" required >



          <button type="submit" name="signup">create</button>
          <p class="message">Already registered? <a href="login.php">Sign In</a></p>
        </form>
      </div>
  </div>



    <script src="js/signUpValidation.js"></script>
</body>
</html>