<?php
    
    ob_start();
    session_start();
    ob_end_clean();
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if($username=="Nama sendiri" AND $password=="12345678")
    {
        $_SESSION["username"]=$username;
        header("location:dashboard.php");
    }else{
        header("location:index.php?login_error");
    }
?>