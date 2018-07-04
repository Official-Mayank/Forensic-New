<?php
	session_start();
	$host="localhost";
	$user="root";
	$passw="";
	$database="forensic";
	$table="event_details";
	$email=$_SESSION['Email'];
	$head=$_POST['posttitle'];
	extract($_POST);
	$mysqli=new mysqli($host,$user,$passw,$database);
	$date=date("Y/m/d");
	 $query="INSERT INTO $table values('$email','$head','$url','$date')";
	    $res=$mysqli->query($query);
	    if($res)
			{
			echo "update success";
			echo "".$email."";
			header("location:../profile.php");
			}
		else
			{
			echo "Update failed";
			echo "".$email." ".$head." ".$data;
			}
	/*$check="SELECT 'heading' FROM $table WHERE $table.email='$email'";
	$checkres=$mysqli->query($check);
	$st=0;
	while($row=$checkres->fetch_row())
	{
		if($row==$head)
		{
			 $st=1;
		}
	}
	if($st==1)
	{
		echo "This blog already exist";
	}
	else
	{*/
	   
	//}
?>
?>
