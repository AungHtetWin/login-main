<?php
 session_start();
 $auth = isset($_SESSION['auth']);
?>
<!doctype html>
<html>
<head>
 <title>Home Page</title>
</head> 
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<body>

 <?php if($auth) { ?>
 <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav my-2 my-lg-0">
    <li class="nav-item">
        <a class="nav-link" href="#"><?php echo $_SESSION['id'] ?></a>
      </li>
      <li class="nav-item">
        <a href="logout.php" class="nav-link">Logout</a>
      </li>
    </ul>
  </div> 
  </nav>
  <div class="jumbotron text-center">
    <h1>Home Page</h1>
    <p>Resize this responsive page to see the effect!</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>Column 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>
      <div class="col-md-4">
        <h3>Column 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>
      <div class="col-md-4">
        <h3>Column 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      </div>
    </div>
  </div>
 <?php } else { ?>
    <div class="container col-md-3 p-3 mt-5 border">
    <h2 class="font-weight-normal mb-3">Please Sign in</h2>
    <form action="login.php" method="post">
      <input type="email" name="email" id="email" class="form-control mb-3" placeholder="User name" required autofocus>
      <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3 pt-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit">Sign in</button>
    </form>
  </div>
 <?php } ?>

</body>
</html> 