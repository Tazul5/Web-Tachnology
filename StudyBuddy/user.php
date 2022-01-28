<?php
$token = "";
$token1="";
session_start();
if(isset($_SESSION["username"])){
    $username=$_SESSION["username"];
    $token= "signout.php";
    $token1="Sign Out";

    $conn = mysqli_connect('localhost','root','','studybuddy');
    
    $password = $_SESSION["password"];
    $sql = "SELECT * FROM users WHERE username ='$username' and password = '$password'";
    $result = $conn->query($sql);
    $result = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        a{
            color: white;
        }
        a:hover{
            color: grey;
            text-decoration:none;
        }
        .info{
            color: black;
            width: 100vw;
            padding: 20px 0px 20px 0px;
            margin: 0 auto;
            background-color: #c5fab9;
            text-align: center;
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
        .fw-lighter{
            font-weight: 400;
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
                <a href="editForm.php" class="my-sm-0" type="submit">Edit Info</a>
            </li>
            <li class="nav-item mr-3">
                <a href="upload.php" class=" my-1 my-sm-0" type="submit">Upload Problem</a>
            </li>
            <li class="nav-item mr-3">
                <a href="home.php" class=" my-1 my-sm-0" type="submit">Home Page</a>
            </li>
            <li class="nav-item mr-3">
                <a href=<?php echo $token; ?> class=" my-1 my-sm-0" type="submit"><?php echo $token1; ?></a>
            </li>
          </ul>
        </div>
    </nav>


<br>

<div class="info">
<?php
    echo "<h1 class='text-center text-dark fw-lighter'>" . "Welcome back ". "$username" ."!"  . "</h1>" ;

?>
    <div class='container'>
    <?php 
        echo "USER ID :   " . $result['id'] ;
        echo "<br>";
        echo "<br>";
        ?>
        <?php 
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

        

</div>
    
<hr>

    <?php
        $conn = mysqli_connect('localhost','root','','studybuddy');
        $username=$_SESSION["username"];
        $password = $_SESSION["password"];
        $sql = "SELECT * FROM problem WHERE username ='$username'";
        $view = $conn->query($sql);
        $num=mysqli_num_rows($view);
    ?>

    <br>

    <div class="problems">
<legend><h2 class='text-center text-success fw-lighter'>My Problems</h2></legend>
<?php 
if($num>0)
{
    $i=0;
    while($row = mysqli_fetch_assoc($view))
{
    $n=$i+1;
    echo "<div class='problem'>";
    echo "<h4 >" . "Problem Number :   "  . "$n". "</h4>" ;
echo "Problem Category :   " . $row['category'] ;
echo "<br>";
echo "<br>";

echo "Problem title :   " . $row['title']; 
echo "<br>";
echo "<br>";

echo "Problem :  " . $row['problem']; 
echo "<br>";
echo "<br>";

echo "buddy Points :   " . $row['price']." Taka"; 
echo "<br>";
echo "<br>";

echo "Phone Number :    " . $row['phone']; 
echo "<br>";

echo "</div>";
echo "<br>";
$i++;
}
}
else {
    echo "Upload your first problem ! ";
}
?>
</fieldset>


</div>
    <script src="validation.js"></script>
</body>
</html>


