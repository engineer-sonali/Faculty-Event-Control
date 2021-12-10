<?php 
session_start(); 
?>
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>Add Events</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/event.css">
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
	<h2>Add Event</h2>
	<div class="addevent">
		<form id="addevent" method="post" action="addevent.php" enctype="multipart/form-data">
			<label>Event Type:</label><br>
			<input type="text" name="etype" placeholder="Enter Event Type" id="etype" data-required>
			<label>Event Title:</label><br>
			<input type="text" name="etitle" placeholder="Enter Event Title" id="etitle" data-required>
			<label>Event Date:</label><br>
			<input type="date" name="edate" placeholder="Enter Event Date" id="edate" data-required>
			<label>Event Start Time:</label><br>
			<input type="time" name="estarttime" placeholder="Enter Event Start Time" id="estarttime" data-required>
			<label>Event End Time:</label><br>
			<input type="time" name="eendtime" placeholder="Enter Event End Time" id="eendtime" data-required>
			<label>Event Venue:</label><br>
			<select name="evenue" placeholder="Enter Event Venue" id="evenue" data-required>
		  <option value="Venue1" >Venue1</option>
		  <option value="Venue2" >Venue2</option>
		  <option value="Venue3" >Venue3</option>
		  <option value="Venue4">Venue4</option>
			</select>
			
			<label>Event Speaker:</label><br>
			<input type="text" name="espeaker" placeholder="Enter Event Speaker" id="espeaker" data-required>
			<label>Event Coordinator:</label><br>
			<input type="text" name="ecoordinator" placeholder="Enter Event Coordinator" id="ecoordinator" data-required>
			<label>Event Incharge:</label><br>
			<input type="text" name="eincharge" placeholder="Enter Event Incharge" id="eincharge" data-required><br>
			<label>Event Image:</label><br>
			<input type="file" name="eimage" placeholder="Enter Event Incharge" id="eimage" data-required>
			<br><br>
			<button type="submit" name="button" class="btn btn-primary" id="button"> Add</button>
		</form>
	</div>
	 
	
</body>
</html> 