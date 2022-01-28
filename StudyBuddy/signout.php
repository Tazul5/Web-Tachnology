<?php
if(session_status() >= 0){
    session_start();
    session_unset();
    session_destroy();
    echo "Redirecting";

}
header("refresh:1; url =index.php");
?>