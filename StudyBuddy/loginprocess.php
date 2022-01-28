<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/spinner.css">
</head>
<body>
    <?php

if(session_status()>=0){
    if(isset($_SESSION["username"])){
        if($_SESSION["username"]=="Admin"){
            echo "<span class='load'></span>";
            header("refresh: 0.5; url = admin.php");
        }
        else{
            echo "<span class='load'></span>";
            header("refresh: 0.5; url = user.php");
        }
        
    }
}

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $conn = mysqli_connect('localhost','root','','studybuddy');
    $sql = "SELECT * FROM users WHERE username ='$username' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        if($_POST["username"]=="Admin" && $_POST["password"]=="Admin"){
            session_start();
            $_SESSION["username"] = $username;
            echo "<span class='load'></span>";
            header("refresh: 0.5; url = admin.php");
            exit();
        }
        else{
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            echo "<span class='load'></span>";
            header("refresh: 1.5; url = home.php");
            exit();
        }
    }
    else{
        echo "<h1>User not found!</h1>";
        header("refresh: 1; url = index.php");
    }
}

?>
</body>
</html>