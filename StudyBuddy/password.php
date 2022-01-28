<?php
$conn = mysqli_connect('localhost','root','','studybuddy');
	if(isset($_POST['submit'])){
        $id= $_POST['id'];
		$password= $_POST['cpassword'];
		$npassword= $_POST['npassword'];
		$rpassword= $_POST['rpassword'];
		if($password != '' && $npassword != '' && $password != ''){
             $result = mysqli_query($conn, "SELECT * from users WHERE id='" . $_POST['id'] . "' AND password='" . $_POST['cpassword'] . "'");
            $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);
            if($count == 1)
            {
                if($npassword==$rpassword)
                {
                    mysqli_query($conn, "UPDATE users set password='" . $_POST['npassword'] . "' WHERE id='" . $_POST['id']. "'");
                
                    echo"Password Edited Successfully";
                header("refresh: 2; url = admin.php");
                }
                else{
                    echo "Retype Password...";
                    header("refresh: 2; url = ChangePassword.php");
                }
            }
            else{
                echo "Wrong Password...";
                header("refresh: 2; url = ChangePassword.php");
            }
		}else{
			echo "null value found...";
            header("refresh: 2; url = ChangePassword.php");
		}
	}else{
		echo "invalid request...";
        header("refresh: 2; url = ChangePassword.php");
	}
?>