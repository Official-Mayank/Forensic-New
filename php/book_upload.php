<?php
	session_start();
	$host="localhost";
	$user="root";
	$passw="";
	$database="forensic";
	$table="book_details";
	$email=$_SESSION['Email'];
	$head=$_POST['posttitle'];
	$mysqli=new mysqli($host,$user,$passw,$database);
	$target_path="../books/";
	$date=date("Y/m/d");
	$target_path=$target_path.basename($_FILES['book']['name']);
	move_uploaded_file($_FILES['book']['tmp_name'], $target_path);
	 $query="INSERT INTO $table values('$email','$head','$target_path','$date')";
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
