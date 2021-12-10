<?php
session_start();
?>
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/loginpage.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body class="back" style="background-color:#042331;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fas fa-university fa-lg"></i> SHAH & ANCHOR KUTCHHI ENGINEERING COLLEGE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mL-auto">
      <li class="nav-item active">
        <a class="nav-link" href="loginpage.php">Login <span class="sr-only">(current)</span></a>
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
	<div class="container" style="align-content: center">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2 style="font-style: italic; color: white">Faculty Login</h2>
				<form action="loginvalidation.php" method="post">
					<div class="form-group">
						<label style="font-style: italic; color: white">Faculty ID</label>
						<input type="text" name="user" class="form-control" placeholder="Enter Faculty ID" required>
					</div>
					<div class="form-group">
						<label style="font-style: italic; color: white">Password</label>
						<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
					</div>
					<div class="form-group">
					<button type="submit" class="btn btn-primary" style="font-style: italic; color: white"> Login</button>
					</div>

				</form>
				<div class="form-group">
					<a href="registration.php" style="font-style: italic; color: white">Don't have an account? Register here!</a>
				</div>
			</div>
		</div>
	</div>
	</div>
	
</body>
</html>