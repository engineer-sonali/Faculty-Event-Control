<?php
session_start();
?>
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>Login Failed</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/loginpage.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style>
  .center {
  margin: auto;
  width: 50%;
  border: 2px solid green;
  padding: 10px;
  text-align: center;
}
</style>
</head>
<body class="back" style="background-color:#042331;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fas fa-university fa-lg"></i> SHAH & ANCHOR KUTCHHI ENGINEERING COLLEGE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mL-auto">
      <li class="nav-item">
        <a class="nav-link" href="loginpage.php">Login <span class="sr-only">(current)</span> <i class="fas fa-sign-in-alt fa-lg"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registration.php">Register <span class="sr-only">(current)</span><i class="fas fa-user-circle fa-lg"></i></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span><i class="fas fa-house-user fa-lg"></i></a>
      </li>
    </ul>
  </div>
</nav>
<br><br><br><br><br>
<div class="center">
  <h3 style="color: white;">Invalid login details, please enter registered ID and password.</h3>
  <br>
  <h4><a href="loginpage.php" style="color: white;"> Click here to login again!</a><h4>
</div>

	
</body>
</html>