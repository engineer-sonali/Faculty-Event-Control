<?php
session_start();
?>
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/registration.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head> 
<body class="back" style="background-color:#042331;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SHAH & ANCHOR KUTCHHI ENGINEERING COLLEGE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mL-auto">
      <li class="nav-item ">
        <a class="nav-link" href="loginpage.php">Login <span class="sr-only">(current)</span><i class="fas fa-sign-in-alt fa-lg"></i></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="registration.php">Register <span class="sr-only">(current)</span><i class="fas fa-user-circle fa-lg"></i></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span><i class="fas fa-house-user fa-lg"></i></a>
      </li>
    </ul>
  </div>
</nav>
<form action="registrationvalidation.php" method="post">
	<div class="split left">
  <div class="centered">
  	<div class="container" style="align-content: center">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2 style="font-style: italic; color: white">Faculty Registration</h2>
				<br><br>
					<div class="form-group">
						<label style="font-style: italic; color: white">Faculty Name</label>
						<input type="text" name="name" class="form-control" placeholder="Enter Faculty name" data-required>
					</div>
					<div class="form-group">
						<label style="font-style: italic; color: white">Faculty ID</label>
						<input type="text" name="user" class="form-control" placeholder="Enter Faculty ID" data-required>
					</div>
					<div class="form-group">
						<label style="font-style: italic; color: white">Gender</label>
						<input id="Male" type="radio" name="gender" value="Male" data-once>
						<label style="font-style: italic; color: white">Male</label>
						<input id="Female" type="radio" name="gender" value="Female" data-once>
						<label style="font-style: italic; color: white">Female</label>
					</div>
					<div class="form-group">
						<label style="font-style: italic; color: white">Contact Number</label>
						<input type="text" name="mobileno" class="form-control" placeholder="Enter Contact Number" data-required data-number data-count="10">
					</div>
					<div class="form-group">
						<label style="font-style: italic; color: white">Contact Address</label>
						<input type="text" name="contactaddress" class="form-control" placeholder="Enter Contact Address" data-required>
					</div>
					<div class="form-group">
						<label style="font-style: italic; color: white">Email Address</label>
						<input type="email" name="emailid" class="form-control" placeholder="Enter Email Address" data-email data-required>
					</div>
			</div>
		</div>
	</div>
	</div>
  </div>
</div>

<div class="split right">
  <div class="centered">
    <div class="container" style="align-content: center">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<form action="registrationvalidation.php" method="post">
					<div class="form-group">
						<label style="font-style: italic; color: white">Qualification</label>
						<input type="text" name="qualification" class="form-control" placeholder="Enter Qualification" data-required>
					</div>
					<div class="form-group">
						<label style="font-style: italic; color: white">Designation</label>
						<input type="text" name="designation" class="form-control" placeholder="Enter Designation" data-required>
					</div>
					<div class="form-group">
						<label style="font-style: italic; color: white">Department</label>
						<input type="text" name="department" class="form-control" placeholder="Enter Department Name" data-required data-number data-count="10">
					</div>
					<div class="form-group">
						<label style="font-style: italic; color: white">Appointment</label>
						<input id="Adhoc" type="radio" name="appointment" value="Adhoc" data-once>
						<label style="font-style: italic; color: white">Adhoc</label>
						<input id="Regular" type="radio" name="appointment" value="Regular" data-once>
						<label style="font-style: italic; color: white">Regular</label>
					</div>
					<div class="form-group">
						<label style="font-style: italic; color: white">Date of Joining</label>
						<input type="date" name="dateofjoining" class="form-control" data-required>
					</div>
					<div class="form-group">
						<label style="font-style: italic; color: white">Set Password</label>
						<input type="password" name="password" class="form-control" placeholder="Set Password" data-email data-required>
					</div>
					<div class="form-group">
					<button type="submit" class="btn btn-primary" style="font-style: italic; color: white"> Register</button>
					</div>
				<div class="form-group">
					<a href="loginpage.php" style="font-style: italic; color: white">Already have an account? Login here!</a>
				</div>
			</div>
		</div>
	</div>
	</div>
  </div>
</div>
</form>
	
</body>
</html>