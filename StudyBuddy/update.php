
<?php
$token = "";
$token1="";
session_start();
if(isset($_SESSION["username"])){
    $token= "signout.php";
    $token1="Sign Out";

    $conn = mysqli_connect('localhost','root','','studybuddy');
    $Qusername=$_SESSION["username"];
}

if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $institution = $_POST["institution"];

    $conn = mysqli_connect('localhost','root','','studybuddy');

    $sql = "UPDATE users SET firstname='$firstname',lastname='$lastname',institution='$institution' where username='$Qusername'";
    $result = mysqli_query($conn,$sql);

        if($result>=mysqli_query($conn,$sql)){
            $sql = "SELECT * FROM users WHERE username ='$Qusername'";
            $result = $conn->query($sql);
            $result = mysqli_fetch_assoc($result);
        }
        else{
              echo "Reg failed";
              
        }
      }

else{
    if(session_status() == PHP_SESSION_NONE){

    }
    //header("location:user.php");
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
    
</head>
<body>

<br>



<div class="container">

<?php 
echo "<h1>" . "Info Updated" . "</h1>";
echo "USERNAME :   " . $result['username'] ;
echo "<br>";
echo "<br>";
?>
<?php 
echo "FIRST-NAME :   " . $result['firstname']; 
echo "<br>";
echo "<br>";
?>

<?php 
echo "LAST-NAME :  " . $result['lastname']; 
echo "<br>";
echo "<br>";
?>
<?php 
echo "EMAIL :   " . $result['email']; 
echo "<br>";
echo "<br>";
?>

<?php 
echo "INSTITUTION :    " . $result['institution']; 
echo "<br>";
echo "<br>";
?>

</div>
    <a href="user.php">Go Back To User Profile</a>
    <br>
    <a href=<?php echo $token; ?>><?php echo $token1; ?></a>
    <br>
    

</body>
</html>