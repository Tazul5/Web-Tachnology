<?php
$token = "";
$token1="";
session_start();
if(isset($_SESSION["username"])){

    $token= "signout.php";
    $token1="Sign Out";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .form{
            width: 500px;
            margin: 10px auto;
        }
        a{
            color: white;
        }
        a:hover{
            color: grey;
            text-decoration:none;
        }
    </style>
</head>
<?php require_once 'adminprocess.php';?>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">StuddyBuddy</a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item  mr-3">
                <a class="my-sm-0" type="submit"href="search.php">search All Users</a>
            </li>
            <li class="nav-item mr-3">
                <a class=" my-1 my-sm-0" type="submit"href=<?php echo $token; ?>><?php echo $token1; ?></a>
            </li>

          </ul>
        </div>
    </nav>
<h1 class="text-center mt-2">Admin Dashboard</h1>
<br>
<div class="dbtable">
<?php
//$conn = mysqli_connect('localhost','root','','studybuddy');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,username, firstname, lastname,email,institution FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table  table-striped'>";
    echo "<thead class='thead-dark'><tr><th>Id </th><th>User Name </th><th>First name </th><th>Last name </th><th>Email </th><th>Institution </th></tr></thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["email"]. "</td><td>" . $row["institution"]. "</td></tr> ";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</div>
<br><hr> <hr>
    <center>
        <form class="form" action="adminprocess.php" method="POST">
        <div class="form-group">
        <label for="ID">ID :</label>
        <input class="form-control" type="text" name="id" id="id" required>
    </div>
        <div class="form-group">
        <label for="username">User Name :</label>
        <input class="form-control" type="text" name="username" id="username" required onkeypress="e2()" >
    </div>
    <div class="form-group">
        <label for="password">Password :</label>
        <input class="form-control" type="password" name="password" id="password" required > <br>
       
        <span></span>
    </div>
    <div class="form-group">
        <label for="password">Confirm Password:</label>
        
            <input class="form-control" type="password" name="cpassword" id="cpassword" required onclick="e4()" onkeydown="e6()"><br>
            <span id="confirmPassworderror"> </span>
    </div>
    <div class="form-group">
        <label for="firstname">First Name :</label>
        <input class="form-control" type="text" name="firstname" id="firstname" onkeypress="e1()" required> 
        <span id="fnameerror"></span>
    </div>
    <div class="form-group">
        <label for="lastname">Last Name :</label>
        <input class="form-control" type="text" name="lastname" id="lastname" onkeypress="e1()" required>
        <span id="lnameerror"></span>
    </div>
    <div class="form-group">
        <label for="email">Email :</label>
        <input class="form-control" type="email" name="email" id="email" required>
    </div>
    <div class="form-group">
        <label for="institution">Institution :</label>
        <input class="form-control" type="text" name="institution" id="institution" required>
    </div>
        <br> <hr>
        <button class="btn btn-success" type="submit" name="save">Add Admin</button>
        <button class="btn btn-warning" type="reset" >Reset form</button> 
        <button class="btn btn-primary" type="submit" name="edit">Edit Admin</button>
        <button class="btn btn-danger" type="submit" name="delete">Delete Admin</button>
        <br>
        </form>
    </center>

    
    
</body>
<?php
	
	}else{
		header('location: login.php');
	}
    ?>
</html>
<script>
    function e2() {
        var name = document.getElementById("uname").value;
        if (name.length < 1) {
            document.getElementById("unameerror").innerHTML = "User name must contain at last two letter";
        } else {
            document.getElementById("unameerror").innerHTML = "";
            return true;
        }
    }

    function e3() {
        var phone = document.getElementById("phoneNumber").value;
        if (phone.length != 10) {
            document.getElementById("Phoneerror").innerHTML = "Use bangladeshi phone number";
        } else {
            document.getElementById("Phoneerror").innerHTML = "";
            return true;
        }
    }

    function e4() {
        var p = document.getElementById("password").value;
        var cp = document.getElementById("cpassword").value;
        if (p != cp) {
            document.getElementById("confirmPassworderror").style.background = "#e6fdff";
            document.getElementById("confirmPassworderror").style.color = "red";
            document.getElementById("confirmPassworderror").innerHTML = "Didn't match with password";
        } else {
            document.getElementById("confirmPassworderror").style.background = "green";
            document.getElementById("confirmPassworderror").style.color = "white";
            document.getElementById("confirmPassworderror").innerHTML = "Matched with password";
        }

    }
</script>