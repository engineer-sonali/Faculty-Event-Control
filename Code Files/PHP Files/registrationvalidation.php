<?php

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'EventManagement');


$id=$_POST['user'];
$pass=$_POST['password'];
$name=$_POST['name'];
$gdr=$_POST['gender'];
$phone=$_POST['mobileno'];
$address=$_POST['contactaddress'];
$email=$_POST['emailid'];
$quali=$_POST['qualification'];
$desig=$_POST['designation'];
$depart=$_POST['department'];
$appoint=$_POST['appointment'];
$doj=date('Y-m-d',strtotime($_POST['dateofjoining']));

$s="select*from facultydetails where faculty_id='$id'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
	header('location:registrationfailed.php');
}else{
	$reg="insert into facultydetails(faculty_id,password,name,gender,mobile_no,contact_address,email_id,qualification,designation,department,appointment,date_of_joining) values ('$id','$pass','$name','$gdr','$phone','$address','$email','$quali','$desig','$depart','$appoint','$doj')";
	mysqli_query($con,$reg);
	header('location:loginpage.php');
}
?>