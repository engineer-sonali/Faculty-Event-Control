<?php 
session_start(); 
?>
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>Add Attended Events</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/attended.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fas fa-university fa-lg"></i> SHAH & ANCHOR KUTCHHI ENGINEERING COLLEGE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mL-auto">
      <li class="nav-item">
        <a class="nav-link" href="loggedinhomepage.php">Home <span class="sr-only">(current)</span><i class="fas fa-house-user fa-lg"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><?php echo $_SESSION['username'];?>  <span class="sr-only">(current)</span><i class="fas fa-user fa-lg"></i> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span><i class="fas fa-sign-out-alt fa-lg"></i> </a>
      </li>
    </ul>
  </div>
</nav>
	<h1>Event Attended</h1>
	<div class="eventattended">
		<form id="eventattended" method="post" action="addattended.php" enctype="multipart/form-data">
			<br><br>
			<label>Event Title:</label><br>
			<input type="text" name="etitle" placeholder="Enter Event Title" id="eid" data-required>
			<label>Faculty ID:</label><br>
			<input type="text" name="fid" placeholder="Enter Faculty ID" id="fid" data-required>
			<br><br>
			<label>Attended Event Proof:</label><br>
			<input type="file" name="attendedproof"  data-required>
			<br><br>
			<button type="submit" class="btn btn-primary" id="button"> Add</button>
		</form>
	</div>
	 
	
</body>
</html> 