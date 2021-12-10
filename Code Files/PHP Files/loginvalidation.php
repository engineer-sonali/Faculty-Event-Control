<?php

session_start();
header('location:home.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'eventmanagement');

$id=$_POST['user'];
$pass=$_POST['password'];

$s="select*from facultydetails where faculty_id='$id' && password='$pass'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
	$_SESSION['username']=$id;
	header('location:loggedinhomepage.php');
}else{
	header('location:loginfailed.php');
}
?>