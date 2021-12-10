<?php
session_start();
?>
<html>
<head>
	<title>Logged in Home Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" type="text/css" href="CSS/loggedinhomepage.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style>
  
</style>
  
</head>
<body >
  <div style="background-image: url('images/img2 .jpg');"  width="1100" height="500">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fas fa-university fa-lg"></i> SHAH & ANCHOR KUTCHHI ENGINEERING COLLEGE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mL-auto">
      <li class="nav-item active">
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
</div>
<div class="sidebar">
  <a href="#" ><i class="fas fa-user fa-5x" style="align-self: center;"></i></a>
  <a href="events.php"><i class="far fa-calendar-plus fa-lg"></i>  Events</a>
  <a href="attended.php"><i class="fas fa-plus-square fa-lg"></i>  Attended Events</a>
  <a href="organized.php"><i class="fas fa-plus-square fa-lg"></i>  Organized Events</a>
  <a href="displayallevents.php"><i class="far fa-calendar-alt fa-lg"></i>  Display All Events</a>
  <a href="displayattended.php"><i class="far fa-calendar-alt fa-lg"></i>  Attended Events</a>
  <a href="displayorganized.php"><i class="far fa-calendar-alt fa-lg"></i>  Organized Events</a>
  <a href="searchevents.php"><i class="fas fa-search fa-lg"></i>  Search Events</a>
  <a href="displayallfaculties.php"><i class="fas fa-users fa-lg"></i>  All Faculties</a>
</div>


</body>
</html>