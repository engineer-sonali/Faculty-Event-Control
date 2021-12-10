<?php 
session_start(); 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'eventmanagement');
$sql= "SELECT * FROM eventdetails"; 
$result = mysqli_query($con,$sql) or die( mysqli_error($con));
?>
<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
  <title>Display All Events</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style>
table, th, td {
  border: 2px solid white;
  border-collapse: collapse;
}
th, td {
  text-align: center;
  background-color: #96D4D4;
  font-size: 20px;
}
</style>
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
<div class="container"> 
<div class="container">
  <?php
     $con=mysqli_connect('localhost','root');
       mysqli_select_db($con,'eventmanagement');
       if (isset($_POST['search'])) {
        $searchKey=$_POST['search'];
        $sql="SELECT * FROM eventdetails where (date like '%$searchKey%' or event_title like '%$searchKey%')";
       }
       else{
        $sql="SELECT * FROM eventdetails";
        $searchKey="";
       }
     $result=mysqli_query($con,$sql);
  ?>
</div>
<div class="container">
  <br>
  <div class="row">
    <div class="col">
      <FORM action="searchevents.php" method="post">
      <div class="input-group">
        <input type="date" placeholder="Event Date" aria-label="Search"
        aria-describedby="search-addon" name="search" value="<?php echo $searchKey?>">
        <button class="btn btn-dark">Search</button>
      </div>
      </FORM>
    </div>
    <div class="col">
        <FORM action="searchevents.php" method="post">
          <div class="input-group">
            <input type="text" placeholder="Enter Year" aria-label="Search"
            aria-describedby="search-addon" name="search" value="<?php echo $searchKey?>">
            <button class="btn btn-dark">Search</button>
          </div>
        </FORM>
    </div>
    <div class="col">
        <FORM action="searchevents.php" method="post">
          <div class="input-group">
            <input type="text" placeholder="Enter Event Title" aria-label="Search"
            aria-describedby="search-addon" name="search" value="<?php echo $searchKey?>">
            <button class="btn btn-dark">Search</button>
          </div>
        </FORM>
    </div>
    
</div>
<br>

<div class="container">
    <table >
    <tr>
      <th colspan="10">
        <h2 >LIST OF EVENTS</h2>
      </th>
        </tr>
        <t>
        <th>EVENT TITLE</th>  
                               <th>EVENT TYPE</th>
                               <th>DATE</th>
                               <th>VENUE</th>
                               <th>SPEAKER</th>
                               <th>START TIME</th>
                               <th>END TIME</th>
                               <th>COORDINATOR</th>
                               <th>INCHARGE</th>
      </t>
      <?php
      while($rows=mysqli_fetch_assoc($result))
       {
         ?>
      <tr>
        <td ><?php echo $rows['event_title'];?></td>
        <td ><?php echo $rows['event_type'];?></td>
        <td ><?php echo $rows['date'];?></td>
        <td ><?php echo $rows['start_time'];?></td>
        <td ><?php echo $rows['end_time'];?></td>
        <td ><?php echo $rows['venue'];?></td>
        <td ><?php echo $rows['speaker'];?></td>
        <td ><?php echo $rows['coordinator'];?></td>
        <td ><?php echo $rows['incharge'];?></td>
      </tr>
      <?php
    }

      ?>
  </table>
</div> 
<br>
<div class="col">
      <div>
          <button class="btn btn-dark float-left">
            <a href="searchevents.php" style="color: white;">Refresh</a>
          </button>
      </div>
    </div> 
</body>
</html> 