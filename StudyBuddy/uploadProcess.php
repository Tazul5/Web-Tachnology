<?php
session_start();

if(isset($_POST["upload"])){
    //$pid = $_POST["pid"];
    $category = $_POST["category"];
    $title = $_POST["title"];
    $problem = $_POST["problem"];
    $price = $_POST["price"];
    $username = $_SESSION["username"];
    $phone = $_POST["phone"];

    $conn = mysqli_connect('localhost','root','','studybuddy');

{
        $conn = mysqli_connect('localhost','root','','studybuddy');
        $sql = "INSERT INTO `problem`(`category`,`title`,`problem`,`price`,`username`,`phone`) VALUES('$category','$title','$problem','$price','$username','$phone')";
        if(mysqli_query($conn,$sql)){
            echo" Uploaded !";
            header("refresh: 2; url = user.php");
        }
        else {
              echo "Failed !";
        }
    }
}
?>
