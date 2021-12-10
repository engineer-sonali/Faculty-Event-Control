<?php

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'eventmanagement');


$e_title=$_POST['etitle'];
$f_id=$_POST['fid'];
$a_image=file_get_contents($_FILES['attendedproof']['tmp_name']);
$a_image=base64_encode($a_image);

$s="select * from attended where event_title='$e_title' and faculty_id='$f_id'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
	header('location:addattendedfailed.php');
}else{
	$add_attended="insert into attended(event_title,faculty_id,attended_proof) values ('$e_title','$f_id','$a_image')";
	mysqli_query($con,$add_attended);
	header('location:addattendedsuccessful.php');
}
?>