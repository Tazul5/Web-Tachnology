
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        li{
            float: right;
            margin-left:10px;
        }
        ul:after{
            content:'';
            display:table;
            clear:both;
        }
        a{
            color: white;
        }
        a:hover{
            color: grey;
            text-decoration:none;
        }
        .problem{
            color: black;
            width: 900px;
            padding: 20px 0px 20px 300px;
            margin: 0 auto;
            border-radius: 40px;
            background-color: #c5fab9;
        }
        .problem:hover{
            box-shadow: 5px 5px 5px lightgrey;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">StuddyBuddy</a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item  mr-3">
                <a href="user.php" class="my-sm-0" type="submit">MyProfile</a>
            </li>
            <li class="nav-item mr-3">
                <a href="about.php" class=" my-1 my-sm-0" type="submit">About Us</a>
            </li>
            <li class="nav-item mr-3">
                <a href="signout.php" class=" my-1 my-sm-0" type="submit">Sign Out</a>
            </li>

          </ul>
        </div>
    </nav>



<?php
    session_start();
    if(session_status()>=0){
        if(isset($_SESSION["username"])){
            if($_SESSION["username"]=="Admin"){           
                
                echo "Redirecting";
                header("refresh: 0.5; url = admin.php");

            }
            else{
                $conn = mysqli_connect('localhost','root','','studybuddy');
                $username=$_SESSION["username"];
                $password = $_SESSION["password"];
                $sql = "SELECT * FROM problem ";
                $view = $conn->query($sql);
                $num=mysqli_num_rows($view);
            }
            
        }
        else{
            echo "Login First!";
            header("refresh: 0.5; url = login.php");
        }
    }
?>
    <?php

if($num>0)
{
    while($row = mysqli_fetch_assoc($view))
{
    echo "<div class='problem'>"  ;
    echo "Problem Category :   " . $row['category'] ;
    echo "<br>";
    echo "<br>";

    echo "Problem title :   " . $row['title']; 
    echo "<br>";
    echo "<br>";

    echo "Problem :  " . $row['problem']; 
    echo "<br>";
    echo "<br>";

    echo "Buddy Points :   " . $row['price']." Taka"; 
    echo "<br>";
    echo "<br>";

    echo "Phone Number :    " . $row['phone']; 
    echo "<br>";
    echo "<br>";echo "Uploaded by :    " . $row['username']; 
    echo "<br>";
    echo "<br>";
    echo "<input class='btn btn-success' type='submit' value='Solve'>"  ;
    echo "</div>"  ;
    echo "<br>";
    echo "<br>";
}
}
else {
    echo "Upload your first problem ! ";
}
?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>