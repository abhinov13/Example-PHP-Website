<?php
session_start();
$uname = "abhi@gmail.com";
$pass = "pass";
    if(isset($_SESSION['username']))
    {
        header("Location:Welcome.php");
    }
    else{
        if($_POST['loginMail'] == $uname && $_POST['loginPassword'] == $pass)
        {
            $_SESSION['username'] = $uname;
            header("Location:Welcome.php");
        }
        else
        {
            header("Location:Login.php");
        }
    }
?>