<?php
$token = "";
$token1="";
session_start();
if(isset($_SESSION["username"])){
    echo "Change Password ".$_SESSION["username"];
    echo " ";
    $token= "signout.php";
    $token1="Sign Out";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
   <div>
	<form method="post" action="password.php">
		<fieldset>
			<legend>Change Password</legend>
			<table>
			<tr>
					<td>User Id:</td>
					<td><input type="text" name="id"></td>
				</tr>
                <tr>
					<td>Current Password</td>
					<td><input type="password" name="cpassword"></td>
				</tr>
                <tr>
					<td>New Password</td>
					<td><input type="password" name="npassword"></td>
				</tr>
				<tr>
					<td>Retype new Password</td>
					<td><input type="password" name="rpassword"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Change"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
    <div >
        <a href="admin.php">Admin</a> <br>
    </div>
</body>
</html>
<?php
	
	}else{
		header('location: login.php');
	}
?>