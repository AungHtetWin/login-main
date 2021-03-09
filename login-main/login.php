<?php
 session_start();
 $email = $_POST['email'];
 $password = $_POST['password'];
 if($email == "admin@admin.com" && $password == "secret") {
 $_SESSION['auth'] = true;
 $_SESSION['id'] = "Admin";
 }
 header("location: home.php");
?>