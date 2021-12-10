<?php

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'eventmanagement');


$e_title=$_POST['etitle'];
$f_id=$_POST['fid'];
$o_image=file_get_contents($_FILES['organizedproof']['tmp_name']);
$o_image=base64_encode($o_image);

$s="select * from organized where event_title='$e_title' and faculty_id='$f_id'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
	header('location:addorganizedfailed.php');;
}else{
	$add_organized="insert into organized(event_title,faculty_id,organized_proof) values ('$e_title','$f_id','$o_image')";
	mysqli_query($con,$add_organized);
	header('location:addorganizedsuccessful.php');
}
?>