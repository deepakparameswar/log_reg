<?php
session_start();
if(isset($_POST['booked'])) {
    $_SESSION['booked'] = $_SERVER['REQUEST_URI'];
    if(!isset($_SESSION['username'])){
      //  $message = "Plz Login";
     //   echo "<script type='text/javascript'>alert('$message');</script>";
      //  header('Location:login.php');
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Please Log in');
        window.location.href='login.php';
        </script>");
    }else {
        //database query
    }
}
?>