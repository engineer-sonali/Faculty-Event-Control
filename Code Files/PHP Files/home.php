<?php
session_start();
?>
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fas fa-university fa-lg"></i> SHAH & ANCHOR KUTCHHI ENGINEERING COLLEGE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mL-auto">
    	<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login <i class="fas fa-sign-in-alt fa-lg"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="loginpage.php">Faculty Login  <i class="fas fa-sign-in-alt fa-lg"></i></a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registration.php">Register <span class="sr-only">(current)</span> <i class="fas fa-user-circle fa-lg"></i></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span><i class="fas fa-house-user fa-lg"></i></a>
      </li>
    </ul>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img5.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Event 1</h3>
        <p>Develop your skill! </p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img4.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Event 2</h3>
        <p>Learn!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Event 3</h3>
        <p>Develop your knowledge!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	

</body>
</html>