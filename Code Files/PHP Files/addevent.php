<?php

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'EventManagement');

		$e_type=$_POST['etype'];
		$e_title=$_POST['etitle'];
		$e_date=date('Y-m-d',strtotime($_POST['edate']));
		$e_starttime=$_POST['estarttime'];
		$e_endtime=$_POST['eendtime'];
		$e_venue=$_POST['evenue'];
		$e_speaker=$_POST['espeaker'];
		$e_coordinator=$_POST['ecoordinator'];
		$e_incharge=$_POST['eincharge'];
		$e_image=file_get_contents($_FILES['eimage']['tmp_name']);
		$e_image=base64_encode($e_image);

		$s="select * from eventdetails where event_title='$e_title'";
		$result=mysqli_query($con,$s);
		$num=mysqli_num_rows($result);

		if($num==1){
			header('location:addeventfailed.php');;
		}
		else
		{
			$add="insert into eventdetails(event_type,event_title,date,start_time,end_time,venue,speaker,coordinator,incharge,event_image) values ('$e_type','$e_title','$e_date','$e_starttime','$e_endtime','$e_venue','$e_speaker','$e_coordinator','$e_incharge','$e_image')";
			mysqli_query($con,$add);
			header('location:addeventsuccessful.php');
		}
	
?>