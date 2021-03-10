<?php
 session_start();
    $email = "";
    $password = "";
     if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['password'])){
       $password = $_POST['password'];
    }
    $errormessage="";
    if(isset($_POST['submit'])){    
        if($email == "admin@admin.com" && $password == "secret") {
            $_SESSION['auth'] = true;
        }
        else if($email == "admin@admin.com" && $password != "secret"){
            $errormessage="Invalid Password";
        }
        else if($email != "admin@admin.com" && $password == "secret"){
            $errormessage="Invalid Email Address";
        }
        else if($email == "" && $password == ""){
            $errormessage="Enter Email Address and password!";
        }
    }    
 $auth = isset($_SESSION['auth']);
?>
<!doctype html>
<html>
<head>
 <title>Login Page</title>
</head> 
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<body>
 <?php if($auth) { 
    header("location: home.php");
  } else { ?>
  <div class="container col-md-3 p-3 mt-5">
    <?php if($errormessage !="") { ?>
     <div class="alert alert-warning text-center" role="alert">
       <?php echo $errormessage ?>
     </div>
     <?php } ?> 
    <form action="login.php" method="post">
        <div class="form-group mt-3">
            <label for="email">Email address</label>
            <input type="email" class="form-control form-control-sm col-12" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control form-control-sm col-12" name="password" id="password">
        </div>
       <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" id="submit">Login</button>
    </form>
  </div>
 <?php } ?>
</body>
</html> 
